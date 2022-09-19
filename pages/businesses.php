<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
    $title = $site_name . " - World's largest Fashion & Lifestyle Media Brand in India";
    $meta["title"] = $title;
    $meta["description"] = "Welcome to a whole different realm where fashion, glamour, and an opulent way of life embellishes the world. FashionTV has nurtured fashion into a global phenomenon. A space that inspires and adorns fashion enthusiasts with the power of media.";
    $meta["keywords"] = "fashiontv, fashiontv india, ftvindia, ftv.ind.in, fashiontv.in, fashion tv india";
    ?>
    <title><?php echo $title ?></title>
    <meta name="title" content="<?php echo $meta["title"]; ?>" />
    <meta name="description" content="<?php echo $meta["description"]; ?>" />
    <meta name="keywords" content="<?php echo $meta["keywords"]; ?>" />
</head>

<body>

    <a href="javascript:void(0)" id="scroll" style="display: none;"><span></span>
        <span class="d-none">Scroll To Top</span>
    </a>

    <!-- header -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <!-- header -->

    <!-- main -->
    <main>
        <!-- Static video -->
        <div class="static_video-sec">
            <div class="static_video-wrapper">
                <div class="player_wrapper">
                    <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/m-poster.jpg">
                       
                        <source src="/assets/videos/FTV_main_V2.mp4" type="video/mp4">
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>
            </div>
        </div>
        <!-- section main -->
        <section class="section__main py-0">
            <div class="main-banner-video">
                <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/media.png">
                    <source src="/assets/videos/ftv-bussiness.mp4" type="video/mp4">
                    Sorry, your browser doesn't support embedded videos.
                </video>
                <p class="fashiontv-para fvbanner">
                    World's largest Fashion &amp; Lifestyle Media Brand
                    <br>
                    196 Countries | 2+ Billion Viewers
                </p>
            </div>
        </section>



        <!-- <section class="section__main">
            <div class="container-fluid p-0">
                <div class="row g-0 justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                        <div class="main-banner-video">
                            <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster-mob.jpg">
                                <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/fashiontv-main/Formainpage.webm" type="video/webm">
                                <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/fashiontv-main/Formainpage.mp4" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                        </div>
                        <div class="main-banner">
                            <img src="/assets/img/main-logo.svg" class="img-fluid w-100" alt="FashionTV">
                            <h1 class="fashiontv-title">FashionTV</h1>
                        </div>
                    </div>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                        <p class="fashiontv-para fvbanner">
                            World's largest Fashion &amp; Lifestyle Media Brand
                            <br>
                            196 Countries | 2+ Billion Viewers
                        </p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- section main -->
        <!-- section verticals -->
        <section class="section__verticals">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="verticals-listing">
                            <ul class="list-unstyled">
                                <li class="verticals-list active">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/franchise/FRANCHISE.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/franchise/FRANCHISE.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>
                                        <a href="#fnb" class="title">Franchise</a>
                                    </div>
                                </li>
                                <li class="verticals-list">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/l-poster1.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/license/LICENSE.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/license/LICENSE.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>

                                        <a href="#realEstate" class="title">License</a>
                                    </div>
                                </li>
                                <li class="verticals-list">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/e-poster.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/events/EVENTS.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/events/EVENTS.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>

                                        <a href="#niteEvents" class="title">events</a>
                                    </div>
                                </li>
                                <li class="verticals-list">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/m-poster.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/media/MEDIA.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/media/MEDIA.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>

                                        <a href="#channels" class="title">Media</a>
                                    </div>
                                </li>
                                <li class="verticals-list">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/c-poster.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/concept/CONCEPT.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/concept/CONCEPT.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>

                                        <a href="#casino" class="title">Concepts</a>
                                    </div>
                                </li>
                                <li class="verticals-list">
                                    <div>
                                        <video class="w-100 mob_n-display" muted="" autoplay="" loop="" poster="/assets/img/poster/city-poster.jpg">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/city-partner/test.webm" type="video/webm">
                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/verticals/city-partner/test.mp4" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>

                                        <a href="#CP" class="title">City Partner</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0 mt-5">
                        <div class="para-wrapper">
                            <p class="para">
                                Welcome to a whole different realm where fashion, glamour, and an opulent way of life
                                embellishes the world. FashionTV has nurtured fashion into a global phenomenon. A space
                                that inspires and adorns fashion enthusiasts with the power of media.
                            </p>
                            <p class="para">
                                Moreover, to further the brand’s purpose, FashionTV is now collaborating with aspiring
                                entrepreneurs to launch multiple franchise businesses in beauty, cosmetics, apparel,
                                sports, luxury automobiles, etc., to achieve mutual business goals.
                            </p>
                            <p class="para">
                                Apart from franchising business, we have ventured into multiple business segments like-
                                Licensing, Events, Media, Concepts, and City Partnership, creating optimum opportunities
                                for the new talent in the country.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section verticals -->

        <!-- section franchise -->
        <section class="section__franchise">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="franchise-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- F&B -->
                                <div id="fnb" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="franchise-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/cafe-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVCAFE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVCAFE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/bar-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVBAR.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVBAR.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/lounge-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVLOUNGE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVLOUNGE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/nite-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVNITECLUB.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVNITECLUB.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/brewery-poster.png">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVBREWERY.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVBREWERY.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/wine-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVWINENDINE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/fnb/FTVWINENDINE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/franchise.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/franchise.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/franchise.png" class="img-fluid" alt="Franchise">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvfranchise.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>FRANCHISE:</Strong> We have some promising plans in the
                                                    pipeline for the future of FashionTV. Over the years, FashionTV,
                                                    being the giant multinational organization that it is, has launched
                                                    a plethora of businesses in various industry sectors to achieve the
                                                    unimaginable and reach greater heights. FashionTV has climbed its
                                                    way up the financial ladder with one of the most idiosyncratic
                                                    business models, the FTV FRANCHISE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- F&B -->

                                <!-- Health & Beauty -->
                                <div id="hnb" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="franchise-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/salon-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVSALON.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVSALON.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FASHIONTV.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FASHIONTV.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/blowdry-bar-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVBLOWDRYBAR.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVBLOWDRYBAR.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/beauty_store-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVBEAUTYSTORE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVBEAUTYSTORE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/aesthetics-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVAESTHETICS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/hnb/FTVAESTHETICS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/franchise.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/franchise.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/franchise.png" class="img-fluid" alt="Franchise">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvfranchise.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>FRANCHISE:</Strong> We have some promising plans in the
                                                    pipeline for the future of FashionTV. Over the years, FashionTV,
                                                    being the giant multinational organization that it is, has launched
                                                    a plethora of businesses in various industry sectors to achieve the
                                                    unimaginable and reach greater heights. FashionTV has climbed its
                                                    way up the financial ladder with one of the most idiosyncratic
                                                    business models, the FTV FRANCHISE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Health & Beauty -->

                                <!-- Knowledge & Education -->
                                <div id="kne" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="franchise-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/som-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOM.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOM.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/e-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOFD.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOFD.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/sog-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOG.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVSOG.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fitness_academy-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVFITNESSACADEMY.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/kne/FTVFITNESSACADEMY.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/franchise.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/franchise.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/franchise.png" class="img-fluid" alt="Franchise">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvfranchise.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>FRANCHISE:</Strong> We have some promising plans in the
                                                    pipeline for the future of FashionTV. Over the years, FashionTV,
                                                    being the giant multinational organization that it is, has launched
                                                    a plethora of businesses in various industry sectors to achieve the
                                                    unimaginable and reach greater heights. FashionTV has climbed its
                                                    way up the financial ladder with one of the most idiosyncratic
                                                    business models, the FTV FRANCHISE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Knowledge & Education -->

                                <!-- Retail -->
                                <div id="retail" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="franchise-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/made_to_measure-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVMADETOMEASURE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVMADETOMEASURE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/multid_store-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVMULTIDESIGNSTORE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVMULTIDESIGNSTORE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/home_decor-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVHOMEDECOR.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVHOMEDECOR.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/jewellery-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVJEWELLERYSTORE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVJEWELLERYSTORE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/accessories-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVACCESSORIESSTORE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVACCESSORIESSTORE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fashion_store-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVFASHIONSTORE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/retail/FTVFASHIONSTORE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/franchise.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/franchise.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/franchise.png" class="img-fluid" alt="Franchise">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvfranchise.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>FRANCHISE:</Strong> We have some promising plans in the
                                                    pipeline for the future of FashionTV. Over the years, FashionTV,
                                                    being the giant multinational organization that it is, has launched
                                                    a plethora of businesses in various industry sectors to achieve the
                                                    unimaginable and reach greater heights. FashionTV has climbed its
                                                    way up the financial ladder with one of the most idiosyncratic
                                                    business models, the FTV FRANCHISE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Retail -->

                                <!-- miscellaneous -->
                                <div id="misc" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="franchise-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/models-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/misc/FTVMODELS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/misc/FTVMODELS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/misc/FASHIONTV.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/franchise/misc/FASHIONTV.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/franchise.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/franchise.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/franchise.png" class="img-fluid" alt="Franchise">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvfranchise.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>FRANCHISE:</Strong> We have some promising plans in the
                                                    pipeline for the future of FashionTV. Over the years, FashionTV,
                                                    being the giant multinational organization that it is, has launched
                                                    a plethora of businesses in various industry sectors to achieve the
                                                    unimaginable and reach greater heights. FashionTV has climbed its
                                                    way up the financial ladder with one of the most idiosyncratic
                                                    business models, the FTV FRANCHISE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- miscellaneous -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#fnb">F &amp; B</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#hnb">Health &amp; Beauty</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kne">Knowledge &amp;
                                            Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#retail">Retail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#misc">Miscellaneous</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section franchise -->

        <!-- section license -->
        <section class="section__license">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="license-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- Real Estate -->
                                <div id="realEstate" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/residences-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVRESIDENCE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVRESIDENCE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/beach_resort-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVBEACHRESORTS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVBEACHRESORTS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/furnished-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVFURNISHEDAPARTMENTS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/realEstate/FTVFURNISHEDAPARTMENTS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Real Estate -->

                                <!-- Fashion Accessories -->
                                <div id="fashionAccessories" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/accessories-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionAccessories/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionAccessories/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/accessories-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionAccessories/FTVBAGS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionAccessories/FTVBAGS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="LICENSE">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fashion Accessories -->

                                <!-- Beverages -->
                                <div id="beverages" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/water-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVWATER.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVWATER.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/energy_drink-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVENERGYDRINKS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVENERGYDRINKS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/cafe-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVCOFFEE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/beverages/FTVCOFFEE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Beverages -->

                                <!-- Alcohol -->
                                <div id="alcohol" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/vodka-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVVODKA.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVVODKA.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/whiskey-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVWHISKEY.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVWHISKEY.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/champagne.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVCHAMPAGNE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVCHAMPAGNE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/wine-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVWINE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVWINE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/prossecco-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVPROSECCO.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/alcohol/FTVPROSECCO.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Alcohol -->

                                <!-- Personal Care -->
                                <div id="personalCare" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/perfume-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/personalCare/FTVPERFUMES.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/personalCare/FTVPERFUMES.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/models-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/personalCare/FTVCOSMETICS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/personalCare/FTVCOSMETICS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal Care -->

                                <!-- White Goods -->
                                <div id="whiteGoods" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/furnished-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVFURNITURE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVFURNITURE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/salon-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVSALONEQUIPMENT.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVSALONEQUIPMENT.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/gym-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVGYMEQUIPMENT.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVGYMEQUIPMENT.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/stationery-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVSTATIONERY.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/whiteGoods/FTVSTATIONERY.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- White Goods -->

                                <!-- Fashion Wear -->
                                <div id="fashionWear" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="license-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fashion-expo-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVAPPARELS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVAPPARELS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVUNDERGARMENTS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVUNDERGARMENTS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/lingerie-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVLINGERIE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVLINGERIE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/athleisure-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVATHLEISURE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/license/fashionWear/FTVATHLEISURE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/license.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/license.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/license.png" class="img-fluid" alt="License">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvlicense.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>LICENSE:</Strong> Introducing the FTV License, priceless by
                                                    nature, with a price just for your licensing aspirations. Gain
                                                    immense credibility and brand value by leveraging the name of
                                                    ’FashionTV’ for your utilities/ services as a licensee. Get an edge
                                                    over your competitors and enter the market with FTV’s trademark,
                                                    along with strong industry linkages and global presence.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fashion Wear -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#realEstate">
                                            Real Estate
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#fashionAccessories">
                                            Fashion Accessories
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#beverages">
                                            Beverages
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alcohol">Alcohol</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#personalCare">
                                            Personal Care
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#whiteGoods">
                                            White Goods
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#fashionWear">
                                            Fashion Wear
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section franchise -->

        <!-- section events -->
        <section class="section__events">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="events-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- Nite Events -->
                                <div id="niteEvents" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="event-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/musical-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVMUSICFESTIVAL.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVMUSICFESTIVAL.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/models-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVCARNIVAL.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVCARNIVAL.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/champagne.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVCHAMPAGNENITES.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVCHAMPAGNENITES.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/dj-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVDJ.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVDJ.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/nite-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVPARTY.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/niteEvents/FTVPARTY.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/event.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/event.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/event.png" class="img-fluid" alt="Event">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvevent.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>EVENTS:</Strong> FashionTV gives you a chance to be a part
                                                    of an unforgettable journey and become the orchestrator of sheer
                                                    luxury, exuberance, and exhilarating experiences, curated
                                                    exclusively to pamper the masses. If you have an innately
                                                    entrepreneurial mind, exceptional management, and organizational
                                                    skills, along with a powerful drive to succeed, FashionTV is your
                                                    go-to place to dip your toes in the Events Industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nite Events -->

                                <!-- Fashion Events -->
                                <div id="fashionEvents" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="event-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fashion_week-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVFASHIONWEEK.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVFASHIONWEEK.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fashion-expo-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVFASHIONEXPO.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVFASHIONEXPO.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/pageants-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVPAGEANTS.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/fashionEvents/FTVPAGEANTS.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/event.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/event.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/event.png" class="img-fluid" alt="Event">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvevent.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>EVENTS:</Strong> FashionTV gives you a chance to be a part
                                                    of an unforgettable journey and become the orchestrator of sheer
                                                    luxury, exuberance, and exhilarating experiences, curated
                                                    exclusively to pamper the masses. If you have an innately
                                                    entrepreneurial mind, exceptional management, and organizational
                                                    skills, along with a powerful drive to succeed, FashionTV is your
                                                    go-to place to dip your toes in the Events Industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fashion Events -->

                                <!-- Events Hunt -->
                                <div id="eventsHunt" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="event-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/eventsHunt/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/eventsHunt/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/beach_resort-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/eventsHunt/FTVBEACHBODIES.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/eventsHunt/FTVBEACHBODIES.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/event.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/event.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/event.png" class="img-fluid" alt="Event">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvevent.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>EVENTS:</Strong> FashionTV gives you a chance to be a part
                                                    of an unforgettable journey and become the orchestrator of sheer
                                                    luxury, exuberance, and exhilarating experiences, curated
                                                    exclusively to pamper the masses. If you have an innately
                                                    entrepreneurial mind, exceptional management, and organizational
                                                    skills, along with a powerful drive to succeed, FashionTV is your
                                                    go-to place to dip your toes in the Events Industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Events Hunt -->

                                <!-- Award Nites -->
                                <div id="awardNites" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="event-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/events/awardNites/FASHIONTV.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/event.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/event.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/event.png" class="img-fluid" alt="Event">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvevent.in/" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>EVENTS:</Strong> FashionTV gives you a chance to be a part
                                                    of an unforgettable journey and become the orchestrator of sheer
                                                    luxury, exuberance, and exhilarating experiences, curated
                                                    exclusively to pamper the masses. If you have an innately
                                                    entrepreneurial mind, exceptional management, and organizational
                                                    skills, along with a powerful drive to succeed, FashionTV is your
                                                    go-to place to dip your toes in the Events Industry.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Award Nites -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#niteEvents">
                                            Nite Events
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#fashionEvents">
                                            Fashion Events
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#eventsHunt">
                                            Events Hunt
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#awardNites">Award Nites</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section event -->

        <!-- section media -->
        <section class="section__media">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="media-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- Channels -->
                                <div id="channels" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="media-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/midnite-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/midnightSecrets/midnight-secrets.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/midnightSecrets/midnight-secrets.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-men-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fMen/fmen.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fMen/fmen.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/m-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/hairMakeup/hair-and-makeup.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/hairMakeup/hair-and-makeup.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/l-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/loriginal/loriginal.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/loriginal/loriginal.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/photoshoot-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/photoshoots/photoshoot.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/photoshoots/photoshoot.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/Fashion-TV-Champagne-Club.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashionFilms/fashion-films.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashionFilms/fashion-films.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fashion_week-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashionWeek/fashion-week.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashionWeek/fashion-week.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/pageants-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashiontvGlobal/global.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/fashiontvGlobal/global.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/fitness_academy-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/modelFitness/model-fitness.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/modelFitness/model-fitness.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/top_models-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/topModels/top-models.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/topModels/top-models.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/models-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/ftvParis/ftv-paris.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/ftvParis/ftv-paris.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/m-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/bridalFashion/bridal-fashion.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/media/bridalFashion/bridal-fashion.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/channels.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/channels.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/channels.png" class="img-fluid" alt="Media">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvmedia.in" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>MEDIA:</Strong> From the front row of exclusive fashion
                                                    ramps to the trendy highlights of the entire fashion ecosystem,
                                                    explore FTV’s 12 thematic channels.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Channels -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container" style="display: none;">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#channels">
                                            Midnight Secrets
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section media -->

        <!-- section concept -->
        <section class="section__concept">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="concept-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- Casino -->
                                <div id="casino" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="concept-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/jewellery-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/casino/FTVCASINO.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/casino/FTVCASINO.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/coworks-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/awards-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/casino/FTVCASINO.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/casino/FTVCASINO.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/concept.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/concept.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/concept.png" class="img-fluid" alt="Concept">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvconcept.in" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>CONCEPT:</Strong> FashionTV has always been one to seize
                                                    smart business opportunities, and we aim to keep broadening our
                                                    horizon and spreading our wings across the globe. Our goal is to
                                                    grow and expand the FTV Family with various ingenious and profitable
                                                    ventures by nurturing, guiding, and supporting each one of them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Casino -->

                                <!-- Co-Working Space -->
                                <!-- <div id="coWorkingSpace" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="concept-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm"
                                                                type="video/webm">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm"
                                                                type="video/webm">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm"
                                                                type="video/webm">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm"
                                                                type="video/webm">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.webm"
                                                                type="video/webm">
                                                            <source
                                                                src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/coWorkingSpace/CoWorkingSpace.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/concept.webp"
                                                            type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/concept.png"
                                                            type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/concept.png"
                                                            class="img-fluid" alt="Concept">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="javascript:void(0)" class="common-link"
                                                        title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>CONCEPT:</Strong> FashionTV has always been one to seize
                                                    smart business opportunities, and we aim to keep broadening our
                                                    horizon and spreading our wings across the globe. Our goal is to
                                                    grow and expand the FTV Family with various ingenious and profitable
                                                    ventures by nurturing, guiding, and supporting each one of them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Co-Working Space -->

                                <!-- Auto Mod -->
                                <!-- <div id="autoMod" class="tab-pane">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="concept-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/concept/autoMod/FTVAUTOMOD.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/concept.webp"
                                                            type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/concept.png"
                                                            type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/concept.png"
                                                            class="img-fluid" alt="Concept">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div
                                                class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="javascript:void(0)" class="common-link"
                                                        title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>CONCEPT:</Strong> FashionTV has always been one to seize
                                                    smart business opportunities, and we aim to keep broadening our
                                                    horizon and spreading our wings across the globe. Our goal is to
                                                    grow and expand the FTV Family with various ingenious and profitable
                                                    ventures by nurturing, guiding, and supporting each one of them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Auto Mod -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container" style="display: none;">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#casino">
                                            Casino
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#coWorkingSpace">
                                            Co-Working Space
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#autoMod">
                                            Auto Mod
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section concept -->

        <!-- section cityPartner -->
        <section class="section__cityPartner">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="cityPartner-wrapper">

                            <!-- Tab panes -->
                            <div class="tab-content custom-tab">

                                <!-- City Partner -->
                                <div id="CP" class="tab-pane active">
                                    <div class="container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12 p-0">
                                                <div class="cp-carousel common-carousel owl-carousel owl-theme">
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/f-poster1.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVFRANCHISE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVFRANCHISE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/city-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVLICENSE.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVLICENSE.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/m-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVMEDIA.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVMEDIA.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster/c-poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div>
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.webm" type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.mp4" type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                    <!-- <div class="item">
                                                        <video class="w-100" muted="" autoplay="" loop=""
                                                            poster="/assets/img/poster.jpg">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.webm"
                                                                type="video/webm">
                                                            <source src="https://frn.s3.ftvassets.in/media/videos/fashiontv-master/city-partner/FTVCONCEPT.mp4"
                                                                type="video/mp4">
                                                            Sorry, your browser doesn't support embedded videos.
                                                        </video>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
                                                <div class="vertical-logo">
                                                    <picture>
                                                        <source srcset="/assets/img/verticals/logo/city-partner.webp" type="image/webp">
                                                        <source srcset="/assets/img/verticals/logo/city-partner.png" type="image/jpeg">
                                                        <img src="/assets/img/verticals/logo/city-partner.png" class="img-fluid" alt="City Partner">
                                                    </picture>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-sm-12 offset-sm-0">
                                                <div>
                                                    <a href="https://ftvcitypartner.in" class="common-link" title="CLICK HERE TO VISIT OUR WEBSITE" target="_blank">
                                                        <span>
                                                            <i class="fas fa-chevron-circle-left"></i>
                                                        </span>
                                                        Click here to visit our website
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pt-5">
                                                <p class="para">
                                                    <Strong>CITY PARTNER:</Strong> Investment by an individual with
                                                    FashionTV is a unique profit-sharing investment opportunity that
                                                    works in a complex network of stakeholders and brand equity; both
                                                    public & private. A one-time investment leading to a long-term
                                                    partnership with Business Expansion rights of our vast range of
                                                    Business Verticals mentioned above:
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- City Partner -->

                            </div>
                            <!-- Tab panes -->

                            <!-- Nav tabs -->
                            <div class="container" style="display: none;">
                                <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#CP">
                                            City Partner
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav tabs -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section cityPartner -->

    </main>
    <!-- main -->

    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->

    <script src="/assets/js/custom.js"></script>

</body>

</html>