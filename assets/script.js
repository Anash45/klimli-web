function getReplacementWord(inputString) {
    // Define an object with key-value pairs
    const wordMappings = {
        "taxOverview": "Income Tax 101",
        "charity": "Charity",
        "dependents": "Family",
        "education": "Education",
        "employment": "Employment",
        "healthcare": "Healthcare",
        "homeowner": "Home ownership",
        "investment": "Investment",
        "SALT": "State & Local Taxes",
        "smallBusiness": "Small Business"
    };

    // Return the corresponding value if the key exists, otherwise return a default message
    return wordMappings[inputString] || inputString;
}

$(document).ready(function () {
    // Path to the JSON file
    const jsonFilePath = './assets/KlimliTaxLibrary.json';

    // Function to count entries for each group
    function countGroups(data) {
        const groupCounts = {};
        data.forEach(entry => {
            const group = entry.group;
            if (groupCounts[group]) {
                groupCounts[group]++;
            } else {
                groupCounts[group] = 1;
            }
        });
        return groupCounts;
    }

    // Generate HTML for each group
    function generateHTML(groupCounts) {
        const container = $('#card-container');
        container.empty();

        let i = 0;
        let required = '';
        for (const group in groupCounts) {
            required = i == 0 ? 'required' : '';
            const cardHTML = `
                <div class="col-md-6 col-sm-12 mb-4">
                    <label class="card h-100 group">
                        <div class="card-horizontal">
                            <div class="add-padding">
                                <img src="assets/img/${group}.png" class="card-img-left" alt="error">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">${getReplacementWord(group)}</h5>
                                <p class="card-text text-secondary">This is a paragraph for ${group}.</p>
                                <p class="card-text">${groupCounts[group]} Articles</p>
                            </div>
                        </div>
                        <input type="checkbox" ${required} class="form-check-input d-none group-check" name="groups[]" value="${group}">
                    </label>
                </div>
            `;
            i++;
            container.append(cardHTML);
        }
    }

    if ($('#card-container').length > 0) {
        // Load the JSON file and process the data
        $.getJSON(jsonFilePath, function (data) {
            const groupCounts = countGroups(data);
            generateHTML(groupCounts);

            $('.group-check').on('change', function () {
                console.log('change');
                validateTaxForm();
                $('.group-check').each(function () {
                    if ($(this).is(':checked')) {
                        console.log('checked');
                        $(this).closest('.card').addClass('selected');
                    } else {
                        $(this).closest('.card').removeClass('selected');
                        console.log('NOT checked');
                    }
                });
            });
        }).fail(function () {
            console.error('Failed to load JSON file.');
        });
    }

    $('#tax-form').on('submit', function (e) {
        if (!validateTaxForm()) {
            e.preventDefault();
        }
        console.log('Submitted');
    });
});


function validateTaxForm() {
    let error = false;
    if ($('.group-check:checked').length < 1) {
        error = true;
        $('.group').addClass('inp-error');
    } else {
        $('.group').removeClass('inp-error');
    }

    return !(error);
}
function updatePreference() {
    const selectedValue = $('input[name="contactMethod"]:checked').val();

    if (selectedValue === 'email') {
        $('.email-pref').show();
        $('.phone-pref').find('input').prop('required', false);
        $('.email-pref').find('input').prop('required', true);
        $('.phone-pref').hide();
    } else {
        $('.email-pref').hide();
        $('.phone-pref').show();
        $('.email-pref').find('input').prop('required', false);
        $('.phone-pref').find('input').prop('required', true);
    }
}

$(document).ready(function () {
    $('input[name="contactMethod"]').change(updatePreference);
    updatePreference();
});

(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();
                if (form.checkValidity() === false) {
                } else {

                    // Check if at least one checkbox with name 'services' is checked
                    if ($('input[name="services[]"]:checked').length === 0) {
                        $('#services-error').html('<p class="text-danger"><small>Please select at least one service.</small></p>');
                    } else {
                        $('#services-error').html('');
                        // Gather form data
                        var formData = $('#contact-form').serialize();

                        // Send form data using AJAX
                        $.ajax({
                            url: 'contact-process.php',
                            type: 'POST',
                            data: formData,
                            dataType: 'json',
                            success: function (response) {
                                console.log(response);
                                if (response.status === 'success') {
                                    $('#response-message').html('<p class="alert alert-success">' + response.message + '</p>');
                                    // $('#contact-form').trigger('reset');
                                } else {
                                    $('#response-message').html('<p class="alert alert-danger">' + response.message + '</p>');
                                }
                            },
                            error: function () {
                                $('#response-message').html('<p class="alert alert-danger">There was an error processing your request. Please try again later.</p>');
                            }
                        });
                    }
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

