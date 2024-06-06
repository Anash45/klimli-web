<?php
$page = 'contact';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact-page</title>
    <link rel="stylesheet" href="assets/stylesheet.css?v=1">
  </head>

  <body>
    <?php include 'header.php'; ?>
    <div class="contact-heading">
      <h1>Let's Work Together</h1>
      <p>Kimli makes customers happy</p>
    </div>
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-6">
          <form class="needs-validation" method="POST" id="contact-form" novalidate>
            <div class="form-group row">
              <div class="col">
                <label for="fname" class="set-font-size">First Name</label>
                <input type="text" class="form-control" required name="first_name" id="fname" placeholder="Jane">
              </div>
              <div class="col">
                <label for="lname" class="set-font-size">Last Name</label>
                <input type="text" class="form-control" required name="last_name" id="lname" placeholder="Smitherton">
              </div>
            </div>
            <div class="form-group mt-4">
              <label class="set-font-size">Communication Preference</label>
              <div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" name="contactMethod" checked
                    value="email"><label class="mb-0 form-check-label"> Email</label></div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" name="contactMethod"
                    value="call"><label class="mb-0 form-check-label"> Call me</label></div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" name="contactMethod"
                    value="text"><label class="mb-0 form-check-label"> Text me</label></div>
              </div>
            </div>
            <div class="form-group email-pref mt-4">
              <label for="email" class="set-font-size">Email Address</label>
              <input type="email" class="form-control" required name="email" id="email"
                placeholder="email@janesfakedomain.net">
            </div>
            <div class="form-group phone-pref mt-4">
              <label for="telephone" class="set-font-size">Telephone #</label>
              <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="+1 ###-####">
            </div>
            <div class="form-group mt-4">
              <label class="set-font-size">Communication Speed</label>
              <div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" required
                    name="communication_speed" value="Today if possible"><label class="mb-0 form-check-label"> Today if
                    possible</label></div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" name="communication_speed" value="This week
                  please"><label class="mb-0 form-check-label"> This week please</label></div>
                <div class="d-flex gap-2"><input type="radio" class="form-check-input" name="communication_speed" value="This month is
                  cool"><label class="mb-0 form-check-label"> This month is cool</label></div>
              </div>
            </div>
            <div class="form-group mt-4">
              <fieldset>
                <label class="set-font-size">What can we help you with?</label>
                <div class="row">
                  <div class="col px-1">
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="Tax filing"><label class="mb-0 form-check-label nowrap"> Tax Filing</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="tax strategy"><label class="mb-0 form-check-label nowrap"> Tax Strategy</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="Irs/State defense"><label class="mb-0 form-check-label nowrap"> IRS/State Defence</label></div>
                  </div>
                  <div class="col px-1">
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="bookkeeping"><label class="mb-0 form-check-label nowrap"> Bookkeeping Services</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]" value="1099/W-2
                      Services"><label class="mb-0 form-check-label nowrap"> 1099/W-2 Services</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]" value="Payroll
                      Services"><label class="mb-0 form-check-label nowrap"> Payroll Services</label></div>
                  </div>
                  <div class="col px-1">
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="business setup"><label class="mb-0 form-check-label nowrap"> Business Setup</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="donations"><label class="mb-0 form-check-label nowrap"> Donations</label></div>
                    <div class="d-flex gap-2"><input type="checkbox" class="form-check" name="services[]"
                        value="volunteering"><label class="mb-0 form-check-label nowrap"> Volunteering</label></div>
                  </div>
                  <div id="services-error"></div>
                </div>
              </fieldset>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-light col-lg-12 sub-button-set">Submit</button>
              <div id="response-message" class="mt-1"></div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="send-images">
            <img src="assets/img/contact-page-img.png" class="img-fluid" alt="error">
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/script.js"></script>
  </body>

</html>