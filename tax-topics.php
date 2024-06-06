<?php
$page = 'tax-topics';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tax-topics</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/stylesheet.css?v=1">
    </head>

    <body>
        <?php include 'header.php'; ?>
        <main class="add-bg-new">
            <div class="contact-heading">
                <h1>Tax Topics</h1>
                <p>Select your interests</p>
            </div>
            <div class="container mt-5">
                <form action="articles.php" novalidate method="post" id="tax-form">
                    <div class="row" id="card-container">
                    </div>
                    <div class="set-icon d-flex justify-content-end">
                        <button type="submit" class="mr-2 bg-transparent border-0"><i
                                class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="./assets/script.js"></script>
    </body>

</html>