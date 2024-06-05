<?php
$page = 'home';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klimli-the-tax-wizard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/stylesheet.css">
  </head>

  <body>
    <?php include 'header.php'; ?>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="background-image">
              <div class="text-container">
                <p class="adjust-main-paragraph">Get Professional Tax Services</p>
                <h1>TAX PROFESSIONALS<br> READY TO ASSIST</h1>
                <a href="contact.php" class="btn btn-light adjust-getintch-btn">Get in touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-3 mb-3 pt-5">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-center">
              <img src="assets/img/main-page-img2.png" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6 mt-5">
            <div class="text-lg-start text-center">
              <p class="change-p-color home-subtitle">EMPOWERING YOUR BUSINESS WITH EXPERTISE AND EFFICIENCY</p>
              <h2 class="fw-bold home-title">Welcome to KLIMLI</h2>
              <p class="home-desc">Welcome to Klimli! We are a non-profit tax service based in Jersey City, NJ. We serve the needs of
                axpayers around the world and look forward to helping you!<br> <br> Enrolled agent status is the highest
                credential the IRS awards. Individuals who obtain this elite status must adhere to ethical standards.
              </p>
            </div>
          </div>
        </div>
        <div class="row mt-5 mb-5 pt-5">
          <div class="col-lg-3 col-md-4 col-sm-6 py-2">
            <div>
              <h3>Accounting & Bookkeeping Services</h3>
              <p>Expert accounting & bookkeeping solutions for streamlined financial management</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 py-2">
            <div>
              <h3>Accounting & Bookkeeping Services</h3>
              <p>Expert accounting & bookkeeping solutions for streamlined financial management</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 py-2">
            <div>
              <h3> Payroll Services</h3>
              <p>Automate your payroll for less. Smooth transition.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 py-2">
            <div>
              <h3> Tax Strategies that win!</h3>
              <p>Klimli works with you and suggests near-term tactical, and planning-based strategies for you.</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
    include 'footer.php';
    ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>