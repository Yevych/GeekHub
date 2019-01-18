<?php
$data = require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InteractiveAgency</title>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="main" id="home">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light header-navbar">
                        <div class="logo">
                            <a class="navbar-brand" href="index.php">
                                <img src="<?php echo $data['siteLogo']; ?>" alt="logo">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-navbar__menu" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <?php
                                foreach ($data ['mainMenu'] as $menuItem) {
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link nav-item__link" href="<?php echo $menuItem['url']; ?>">
                                            <?php echo $menuItem['title']; ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="inner-content">
                    <?php
                    foreach ($data ['mainBanner'] as $bannerItem) {
                        ?>
                        <h1 class="inner-content__title"><?php echo $bannerItem['title']; ?></h1>
                        <p class="inner-content__subtitle"><?php echo $bannerItem['subTitle']; ?></p>
                        <a class="main-btn"
                           href="<?php echo $data['askBtn']['url']; ?>"><?php echo $data['askBtn']['buttonTitle']; ?></a>
                        <div class="mouse">
                            <img src="<?php echo $bannerItem['mouseIcon']; ?>" alt="mouse">
                            <span class="mouse__scroll"><?php echo $bannerItem['mouseScroll']; ?></span>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="offer" id="offer">
    <div class="container-fluid">
        <div class="row">
            <?php
            foreach ($data ['offer'] as $offerItem) {
                ?>
                <div class="col-md-12 col-lg-6 <?php echo $offerItem['class']; ?>">
                    <div class="offer-content">
                        <h2 class="offer__title"><?php echo $offerItem['title']; ?><span
                                    class="offer__title__accent"><?php echo $offerItem['spanTitle']; ?></span></h2>
                        <p class="offer__description"><?php echo $offerItem['subTitle']; ?></p>
                        <a class="main-btn"
                           href="<?php echo $data['askBtn']['url']; ?>"><?php echo $data['askBtn']['buttonTitle']; ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="what-we-do">
    <div class="container">
        <div class="section-header">
            <h2 class="text-center"><?php echo $data['weDo']['title']; ?></h2>
        </div>
        <div class="row justify-content-between">
            <?php
            foreach ($data ['weDo']['weDoList'] as $weDoItem) {
                ?>
                <div class="col-md-6 wrapper">
                    <div class="what-we-do__item d-flex">
                        <div class="what-we-do__icon">
                            <img src="<?php echo $weDoItem['img']; ?>" alt="web design">
                        </div>
                        <div class="what-we-do__content">
                            <h3 class="what-we-do__title"><?php echo $weDoItem['title']; ?></h3>
                            <p class="what-we-do__description"><?php echo $weDoItem['subTitle']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <a class="main-btn"
               href="<?php echo $data['askBtn']['url']; ?>"><?php echo $data['askBtn']['buttonTitle']; ?></a>
        </div>
    </div>
</section>
<section class="portfolio" id="portfolio">
    <div class="portfolio__slider d-flex">
        <?php
        foreach ($data ['portfolio'] as $portfolioItem) {
            ?>
            <div class="portfolio__slider__slide">
                <img src="<?php echo $portfolioItem['img']; ?>" alt="drone zone">
                <div class="portfolio__slider__slide__overlay text-center d-flex flex-column align-items-center justify-content-center">
                    <h3 class="portfolio__slider__slide__overlay__title"><?php echo $portfolioItem['title']; ?></h3>
                    <p class="portfolio__slider__slide__overlay__subtitle"><?php echo $portfolioItem['subTitle']; ?></p>
                    <a class="main-btn"
                       href="<?php echo $data['watchBtn']['url']; ?>"><?php echo $data['watchBtn']['buttonTitle']; ?></a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<section class="about" id="about">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="light"><?php echo $data['about']['title']; ?></h2>
            <p class="about__description"><?php echo $data['about']['subTitle']; ?></p>
        </div>
        <div class="row about-items">
            <?php
            foreach ($data ['about']['aboutList'] as $aboutItem) {
                ?>
                <div class="col-md-6 col-lg-3">
                    <div class="about-item text-center">
                        <img src="<?php echo $aboutItem['img']; ?>" alt="John Doe">
                        <h3 class="about-item__name"><?php echo $aboutItem['title']; ?></h3>
                        <p class="about__description"><?php echo $aboutItem['subTitle']; ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
            <a class="main-btn"
               href="<?php echo $data['watchBtn']['url']; ?>"><?php echo $data['watchBtn']['buttonTitle']; ?></a>
        </div>
    </div>
</section>
<div class="location-map" id="contact">
    <div class="map">
        <iframe src="<?php echo $data['srcmap']; ?>"
                allowfullscreen>
        </iframe>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-content">
                    <p><?php echo $data['footer']['title']; ?></p>
                    <p><?php echo $data['footer']['subTitle']; ?><a
                                href="<?php echo $data['footer']['linkUrl']; ?>"><?php echo $data['footer']['linkTitle']; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- slick-slider -->
<script src="assets/slick/slick.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/libs.js"></script>
</body>
</html>