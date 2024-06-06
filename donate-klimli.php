<?php
$page = 'donate';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donate-page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/stylesheet.css?v=1">
    </head>

    <body>
        <?php include 'header.php'; ?>
        <div class="contact-heading">
            <h1>Donate to Klimli</h1>
            <p>Donations support 100% free individual tax filing</p>
        </div>
        <div class="container">
            <div class="main-div">
                <div class="row mt-4">
                    <div class="col-lg-6 text-center">
                        <img src="assets/img/donate-img1.png" alt="First Image" class="img-fluid mb-3">
                        <p class=" m-2 d-flex justify-content-center">Klimli has earned Candid’s highest level of
                            transparency putting our information on their website with our board, demographics, plans,
                            etc. </p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="assets/img/donate-img2.png" alt="Second Image" class="img-fluid mb-3">
                        <p class=" m-2 d-flex justify-content-center">Klimli also gives 1% from your donations to carbon
                            recapture.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between color-change-1 mt-3 m-0 mb-3">
                <div class="col-6">
                    <div class="payment-container">
                        <button class="btn color-change-1 font-weight-bold"><i class="fa-brands fa-apple"></i>
                            Pay</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="payment-container">
                        <button class="btn color-change-1 font-italic"><i><img src="assets/img/icon.png"
                                    height="15px"></i>
                            <span class="span1">Pay</span><span class="span2">Pal</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-between my-5 mx-sm-5 text-center adjust-to-center">
                <div class="col-lg-4 mb-4 bg-light p-3 donation-input-3">
                    <div class="donation-input">
                        <stripe-buy-button buy-button-id="buy_btn_1P5EWFHJj37IY4cJeRqTE4Nu"
                            publishable-key="pk_live_51OrqglHJj37IY4cJbXPYdLWVZYdMuiZ2tjhQuNOEJKtfWhV84ovvnuBxSW9GVQpdnMmF4V2LYLysjijqA1V76ffL001vfB2stL">
                        </stripe-buy-button>
                    </div>
                </div>
                <div class="col-lg-4 bg-light p-3 donation-input-3">
                    <form class="donation-input-2 p-3" action="https://www.paypal.com/donate" method="post"
                        target="_top">
                        <input type="hidden" name="hosted_button_id" value="EXQMKP5ZRM274" />
                        <button class="btn btn-warning font-weight-bold btn-block mb-3"
                            title="PayPal - The safer, easier way to pay online!" type="submit">Donate</button>
                        <div class="donation-icons text-center">
                            <img src="assets/img/visa.jpg" alt="Card Icon 1">
                            <img src="assets/img/download.png" alt="Card Icon 2">
                            <img src="assets/img/american-express.svg" alt="Card Icon 3">
                            <img src="assets/img/Discover.png" alt="Card Icon 4">
                            <img src="assets/img/mastero.png" alt="Card Icon 5">
                        </div>
                        <p class="text-center mt-4 font-weight-bold">Donations are made thru Paypal</p>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h3 class="text-center mb-3">Donation Received</h3>
                    <h5 class="text-center">Klimli appreciates your donation!</h5>
                    <div class="modal-body text-center m-3"> Thank you for your most generous donation! Klimli will use
                        this to grow and provide free tax filing to even more individuals! </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h3 class="text-center mb-3">Donation Cancelled</h3>
                    <h5 class="text-center">Klimli appreciates your consideration to donate.</h5>
                    <div class="modal-body text-center m-3"> Thank you for considering a donation to Klimli; while we
                        require donations to grow our efforts, we respect each person’s ability to donate. </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Stripe.js library -->
        <script async src="https://js.stripe.com/v3/buy-button.js"></script>
        <script>
            $(document).ready(function () {
                // Parse URL parameters
                const urlParams = new URLSearchParams(window.location.search);
                const donationStatus = urlParams.get('donation');

                // Show modals based on URL parameters
                if (donationStatus === 'success') {
                    $('#successModal').modal('show');
                } else if (donationStatus === 'error') {
                    $('#errorModal').modal('show');
                }
            })
        </script>
    </body>

</html>