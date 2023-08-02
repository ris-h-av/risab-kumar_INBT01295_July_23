<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>About us</h3>
        <p><a href="home.php">Home</a> / About</p>
    </div>

    <section class="about">

        <div class="flex">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>Why choose us?</h3>
                <p> Knowledgeable Bibliophiles at Your Service: Our passionate team of
                    book enthusiasts is here to guide you through our extensive selection.</p>
                <p> Uncover Exclusive Editions: Unlock the door to a world of exclusive editions,
                    rare finds, and limited releases.
                    We work tirelessly to source special copies and signed books,
                    turning your collection into a treasure trove of literary wonders
                </p>
                <a href="contact.php" class="white-btn">Contact us</a>
            </div>

        </div>
    </section>

    <section class="reviews">
        <h1 class="title">Client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                    extensive array of genres and titles is effortless, thanks to the intuitive interface.
                    It's evident that the team behind the site has a genuine passion for literature, as the
                    curation is top-notch. </p>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chris Evans</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                extensive array of genres and titles is effortless, thanks to the intuitive interface.
                It's evident that the team behind the site has a genuine passion for literature, as the
                curation is top-notch. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Alizabeth</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                extensive array of genres and titles is effortless, thanks to the intuitive interface.
                It's evident that the team behind the site has a genuine passion for literature, as the
                curation is top-notch. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Robert</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                extensive array of genres and titles is effortless, thanks to the intuitive interface.
                It's evident that the team behind the site has a genuine passion for literature, as the
                curation is top-notch. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Madmax</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                extensive array of genres and titles is effortless, thanks to the intuitive interface.
                It's evident that the team behind the site has a genuine passion for literature, as the
                curation is top-notch. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>DJ Alok</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>First and foremost, the website's layout is a reader's haven. Navigating through the
                extensive array of genres and titles is effortless, thanks to the intuitive interface.
                It's evident that the team behind the site has a genuine passion for literature, as the
                curation is top-notch. </p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Miko</h3>
        </div>
        </div>

    </section>

    <!-- authors -->

    <section class="authors">
        <h1 class="title">Great authors</h1>

        <div class="box-container">
            <div class="box">
                <img src="images/author-1.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>John Deo</h3>
            </div>
            <div class="box">
                <img src="images/author-2.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Maria</h3>
            </div>
            <div class="box">
                <img src="images/author-3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Leo</h3>
            </div>
            <div class="box">
                <img src="images/author-4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sally</h3>
            </div>
            <div class="box">
                <img src="images/author-5.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Colleen</h3>
            </div>
            <div class="box">
                <img src="images/author-6.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Martha</h3>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="./js/script.js"></script>
</body>

</html>