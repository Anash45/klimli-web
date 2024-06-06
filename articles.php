<?php
$page = 'articles';
if (isset($_POST['groups'])) {
    // Specify the path to the JSON file
    $jsonFilePath = './assets/KlimliTaxLibrary.json';

    // Read the contents of the JSON file
    $jsonData = file_get_contents($jsonFilePath);

    // Decode the JSON data into a PHP array
    $articles = json_decode($jsonData, true);

    // Check if the decoding was successful
    if ($articles === null) {
        echo "Error decoding JSON data.";
        exit;
    }

    // Get the groups from the $_POST array
    $groups = isset($_POST['groups']) ? $_POST['groups'] : [];

    // Initialize an array to hold the results
    $results = [];

    // Iterate over each group
    foreach ($groups as $group) {
        // Initialize counters and arrays for this group
        $count = 0;
        $groupArticles = [];

        // Iterate over the articles
        foreach ($articles as $article) {
            // Check if the article belongs to the current group
            if (isset($article['group']) && $article['group'] == $group) {
                $count++;
                $groupArticles[] = $article;
            }
        }

        // Store the results for this group
        $results[] = [
            'group' => $group,
            'count' => $count,
            'articles' => $groupArticles
        ];
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
                <h1 class="font-weight-bold">Articles</h1>
            </div>
            <div class="container mt-5">
                <div class="groups">
                    <?php foreach ($results as $result): ?>
                        <div class="group">
                            <h2 class="group-title"><?php echo ucfirst($result['group']); ?>
                                (<?php echo $result['count']; ?>)</h2>
                            <div class="articles">
                                <?php
                                foreach ($result['articles'] as $article):
                                    $rating = '';
                                    for ($i = 0; $i < $article['rating']; $i++) {
                                        $rating .= '&dollar;';
                                    }
                                    ?>
                                    <a href="article-details.php?articleID=<?php echo $article['id']; ?>" class="article">
                                        <span class="rating"><?php echo $rating; ?></span>
                                        <img src="./assets/img/<?php echo $article['group']; ?>.png" alt="Group"
                                            class="group-icon">
                                        <h3 class="article-title"><?php echo $article['name']; ?></h3>
                                        <!-- <h5 class="article-category"><?php echo $article['category']; ?></h5> -->
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
        <?php
        include 'footer.php';
        ?>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.articles').slick({
                    autoplay: true,
                    autoplaySpeed: 2000, // Adjust the speed as needed
                    arrows: true, // Display arrows for navigation
                    dots: true, // Display dots for navigation
                    slidesToShow: 3, // Number of slides to show per row
                    slidesToScroll: 1, // Number of slides to scroll at a time
                    responsive: [
                        {
                            breakpoint: 1024, // Screen width at which settings below apply
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 768, // Screen width at which settings below apply
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 480, // Screen width at which settings below apply
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });

            });
        </script>
    </body>

</html>