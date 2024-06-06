<?php
$page = 'articles';
if (isset($_GET['articleID'])) {
    // Specify the path to the JSON file
    $jsonFilePath = './assets/KlimliTaxLibrary.json';

    // Read the contents of the JSON file
    $jsonData = file_get_contents($jsonFilePath);

    // Decode the JSON data into a PHP array
    $articles = json_decode($jsonData, true);

    // Check if the decoding was successful
    if ($articles === null) {
        $show = "<div class='alert alert-danger'>Error decoding JSON data.</div>";
    }

    // Get the article ID from the GET parameters
    $articleID = isset($_GET['articleID']) ? intval($_GET['articleID']) : null;

    // Check if the article ID is provided and valid
    if ($articleID === null) {
        $show = "<div class='alert alert-danger'>Article ID is not provided.</div>";
    }

    // Initialize a variable to hold the article details
    $articleDetails = null;

    // Search for the article with the matching ID
    foreach ($articles as $article) {
        if ($article['id'] === $articleID) {
            $articleDetails = $article;
            break;
        }
    }

    // Check if the article was found
    if ($articleDetails === null) {
        $show = "<div class='alert alert-danger'>Article not found.</div>";
        exit;
    }
} else {
    header('location:tax-topics.php');
}

// Output the results
// echo json_encode($results);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tax-topics</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Slick CSS -->
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Slick Theme (optional) -->
        <link rel="stylesheet" type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/stylesheet.css?v=1">
    </head>

    <body>
        <?php include 'header.php'; ?>
        <main class="add-bg-new">
            <div class="contact-heading">
                <h1 class="font-weight-bold">Article Details</h1>
            </div>
            <div class="container mt-5">
                <?php
                if ($articleDetails !== null) {
                    ?>
                    <div class="card col-lg-6 col-sm-10 shadow mx-auto">
                        <div class="card-body">
                            <h2 class="text-center font-weight-bold"><?php echo htmlspecialchars($articleDetails['name']); ?></h2>
                            <?php
                            $rating = '';
                            for ($i = 0; $i < $articleDetails['rating']; $i++) {
                                $rating .= '&dollar;';
                            }
                            ?>
                            <p><strong>Rating:</strong> <span class="font-weight-bold text-success"><?php echo $rating; ?></span></p>
                            <p><strong>Description:</strong>
                                <?php echo nl2br(htmlspecialchars($articleDetails['description'])); ?></p>
                            <p><strong>Citations:</strong> <a class="text-primary"
                                    href="<?php echo htmlspecialchars($articleDetails['citations']); ?>"
                                    target="_blank"><?php echo htmlspecialchars($articleDetails['citations']); ?></a></p>
                            <p><strong>Category:</strong> <?php echo htmlspecialchars($articleDetails['category']); ?></p>
                            <p><strong>Group:</strong> <?php echo htmlspecialchars($articleDetails['group']); ?></p>
                            <p><strong>Tax Form:</strong> <?php echo htmlspecialchars($articleDetails['taxform']); ?></p>
                            <p><strong>Tax Line:</strong> <?php echo htmlspecialchars($articleDetails['taxline']); ?></p>
                            <?php if (!empty($articleDetails['condition'])): ?>
                                <p><strong>Condition:</strong> <?php echo htmlspecialchars($articleDetails['condition']); ?></p>
                            <?php endif; ?>
                            <?php if (!empty($articleDetails['amount'])): ?>
                                <p><strong>Amount:</strong> <?php echo htmlspecialchars($articleDetails['amount']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                } else {
                    echo $show;
                }
                ?>
            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>