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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>


    <a href="javascript:void(0)" id="scroll" style="display: none;"><span></span>
        <span class="d-none">Scroll To Top</span>
    </a>

    <!-- header -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <!-- header -->


    <main class="main-bg">
        <div class="static_video-sec">
            <div class="static_video-wrapper">
                <div class="player_wrapper">
                    <video class="w-100" muted="" autoplay="" loop="" poster="/assets/img/live-bg.jpg">

                        <source src="/assets/videos/FTV_main_V2.mp4" type="video/mp4">
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>
            </div>
        </div>
        <section class="fashiontv1-section">
            <div class="fashiontv1-video ">
                <video muted autoplay loop poster="/assets/img/e-poster.jpg">
                    <source src="/assets/videos/Fashion Tv Intro.mp4">
                </video>
                <!-- <div class="branding">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.07 333.77" data-aos="fade-down" data-aos-duration="3000">
                        <defs>
                            <style>
                                .cls-1 {
                                    opacity: 0.3;
                                }

                                .cls-2,
                                .cls-5 {
                                    fill: none;
                                    stroke: #ddfc5f;
                                    stroke-miterlimit: 10;
                                }

                                .cls-2 {
                                    stroke-width: 0.83px;
                                }

                                .cls-3 {
                                    opacity: 0.2;
                                }

                                .cls-4 {
                                    opacity: 0.5;
                                }

                                .cls-5 {
                                    stroke-width: 2px;
                                }
                            </style>
                        </defs>
                        <title>f-yellow</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g class="cls-1">
                                    <path class="cls-2" d="M114.05,146.43H76.83V124.06c0-31.86-3.61-92.73,30-101.5,5.06-1.3,12.33-1.3,17.39,1.29-2,11.18-7.64,25.39,6.83,31.78,23,10,36.12-19.14,12.34-36.64-10.14-7.62-30-7.78-42.29-5a75.93,75.93,0,0,0-22,9.25C40.09,47.77,41.1,107.33,41.1,147.2H5.75l-.06,0,.22,9.89h34.8V271.44l.66,46.37L5.91,318l-.22,10.38H114.05V322l0-4.19H76.83V157.13H114Zm61.82-11.05A15.87,15.87,0,1,1,160,151.24,15.87,15.87,0,0,1,175.87,135.38Z" />
                                </g>
                                <g class="cls-3">
                                    <path class="cls-2" d="M108.78,151.43H71.56V129.06c0-31.86-3.61-92.73,30-101.5,5.07-1.3,12.34-1.3,17.4,1.3-2,11.17-7.64,25.39,6.83,31.78,23,10,36.12-19.14,12.34-36.65-10.14-7.62-30-7.78-42.29-5a75.91,75.91,0,0,0-22,9.24c-38.94,24.57-37.93,84.12-37.93,124H.48l-.06.05.22,9.89h34.8v114.3l.66,46.38L.64,323,.42,333.35H108.78V327l0-4.18H71.56V162.14h37.19Zm61.82-11.05a15.87,15.87,0,1,1-15.87,15.87A15.87,15.87,0,0,1,170.6,140.38Z" />
                                </g>
                                <g class="cls-4">
                                    <path class="cls-2" d="M119.21,140.27H82V117.9c0-31.86-3.61-92.73,30-101.5,5.07-1.3,12.34-1.3,17.4,1.3-2,11.17-7.64,25.38,6.83,31.77,23,10,36.12-19.13,12.33-36.64-10.13-7.62-29.95-7.78-42.28-5a75.52,75.52,0,0,0-22,9.24C45.25,41.62,46.26,101.17,46.26,141H10.9l-.05,0,.22,9.89h34.8V265.28l.66,46.37-35.46.17-.22,10.37H119.21v-6.32l0-4.19H82V151h37.19ZM181,129.22a15.87,15.87,0,1,1-15.87,15.87A15.86,15.86,0,0,1,181,129.22Z" />
                                </g>
                                <path class="cls-5" d="M124.38,135.1H87.16V112.72c0-31.85-3.6-92.73,30-101.5,5.06-1.29,12.33-1.29,17.4,1.3-2,11.18-7.65,25.39,6.82,31.78,23,10,36.12-19.14,12.34-36.64-10.13-7.62-30-7.79-42.29-5a76,76,0,0,0-22,9.24C50.42,36.44,51.43,96,51.43,135.86H16.08l0,0,.22,9.89H51V260.11l.66,46.37-35.45.16L16,317H124.38V310.7l0-4.19H87.16V145.8h37.19ZM186.2,124a15.87,15.87,0,1,1-15.87,15.87A15.88,15.88,0,0,1,186.2,124Z" />
                            </g>
                        </g>
                    </svg>
                </div> -->
                <div class="fashiontv1-heading">
                    <h2>FashionTV</h2>
                    <p>Lifestyle Throught &nbsp; &nbsp;Opulence</p>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="pagelinks-section">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pagelinks-main">
                            <ul class="pagelinks-main_ul">
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#FashionTV-Introduction">Introduction </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#Philosophy">Philosophy </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#USP">USP </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#key-facts">Key&nbsp;Facts </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#Milestones">Milestones </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#12-channels">12&nbsp;Channels </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#New-Media">New&nbsp;Media </button>
                                </li>
                                <li class="pagelinks-main_ul_li">
                                    <button class="pagelinks-main_ul_li_a" aria-controls="#Future">Future </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <div class="kk-background">
            <section class="kk2-intro-section" id="FashionTV-Introduction">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-10 col-sm-12">
                            <div class="kk2-content">
                                <h1 data-aos="fade-up">Introduction</h1>
                                <p data-aos="fade-up"> Welcome to a whole different <span>realm where fashion, glamour, and an opulent</span> way of life embellishes the world. FashionTV has nurtured fashion into a global phenomenon. A space that <span>inspires and adorns fashion enthusiasts with the power of media</span>. Moreover, to further the brand’s purpose, FashionTV is now collaborating with aspiring entrepreneurs to launch multiple businesses in various fields by franchising, licensing, events, media, concepts and city partnership. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--  -->


            <section class="myphilosophy-section" id="Philosophy" style="background: #0000008a;">
                <div class="container">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-lg-7 col-md-8 col-sm-12">
                            <div class="myphilosophy-content">
                                <h1 data-aos="fade-up">Philosophy</h1>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span>Vision</span>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Through a vast and complex network of investors, FashionTV possesses a vision to make its mark in the nation serving mutual benefits to the brand along with its affiliates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span>Mission</span>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>In alliance with our affiliates we aspire to spread our wings across the globe through invention, inspiration and initiative.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span>Aim</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>FashionTV always aims to thrive and grow using FTV’s one-of-a-kind business model by offering countless remarkable opportunities to our partners.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!--  -->
        <section class="keyfact-section" data-aos="fade-up">
            <!-- <div class="keyfacts-branding">
                <img src="/assets/img/ftv.svg" data-aos="fade-down" data-aos-duration="3000" alt="fashiontv">
            </div> -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-11 col-sm-12">
                        <div class="keyfact-slider">
                            <!-- Swiper -->
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="keyfact-slider-content" id="key-facts">
                                            <h1>Key Facts</h1>
                                            <ul>
                                                <li>FashionTV is the first fashion channel in the world with <span>2 billion viewers in 193+ countries.</span></li>
                                                <li>It broadcasts the latest news and information about fashion, <span>luxury, and lifestyle to over 100 million households </span> and over <span> 10 million public places across five continents</span>. </li>
                                                <li>FashionTV is the <span>fourth most distributed channel</span> in the world with 250 cable satellites, 500 million households, and 10 million public TV sets in public places. </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="keyfact-slider-content" id="Milestones">
                                            <h1>MILESTONES</h1>
                                            <ul>
                                                <li>FTV is the most distributed channel in public places and is the <span>gatekeeper in the world of fashion and glamour.</span></li>
                                                <li>FTV delivers the latest trends to <span>interesting target groups via live TV</span> and travels faster than other Fashion mediums. FTV allows brands to <span> build an image</span> through a focused approach to fashion and lifestyle.</li>
                                                <li>FTV allows turning any communication focused on a <span>"fashion & lifestyle statement"</span> and therefore <span>aids in character image building.</span>
                                                </li>
                                                <li>Today, Fashion TV is a name to <span>reckon with globally</span>. However, as the saying goes, Rome was not built in a day. Business tycoon Michel Adam Lisowski, the owner of Eden Group, had a <span>love and penchant for fashion,</span> and it was this passion that drove him to build a brand that found its roots in the year 1997. </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="keyfact-slider-content" id="New-Media">
                                            <h1>NEW MEDIA</h1>
                                            <ul>
                                                <li>
                                                    FTV is a leader and <span>dominant force</span> in the new media world with <span> highly viral</span> and <span>expansive digital</span> reach through its Youtube channels, a specially designed website (FashionTV.COM), Its Facebook page (more than 4 million fans) and many more social and video platforms.

                                                </li>
                                                <li>It has developed a very strong <span>distribution network with an 11.86% market share in Asia</span> and the pacific; the <span> largest Asian operators</span> have Fashion TV in their <span>standard package.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

        <section class="usp-section" data-aos="fade-up" id="USP">
            <div class="branding">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628.65 1066.64" data-aos="fade-down" data-aos-duration="3000">
                    <defs>
                        <style>
                            .cls-1 {
                                opacity: 0.55;
                            }

                            .cls-2 {
                                fill: none;
                                stroke: #ffd428;
                                stroke-miterlimit: 10;
                                stroke-width: 1.68px;
                            }
                        </style>
                    </defs>
                    <title>f-stroke</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <g class="cls-1">
                                <path class="cls-2" d="M366,452.74H240.59v-75.4c0-107.35-12.16-312.49,100.94-342,17.07-4.37,41.56-4.37,58.63,4.37-6.82,37.66-25.76,85.56,23,107.09,77.42,33.62,121.71-64.49,41.57-123.48C430.6-2.4,363.8-2.95,322.23,6.34A255.57,255.57,0,0,0,248,37.48C116.78,120.27,120.17,321,120.17,455.32H1l-.18.16.74,33.33H118.87V874l2.23,156.27-119.5.54-.74,35H366v-21.31l.06-14.1H240.59V488.81H365.91Zm208.31-37.25A53.48,53.48,0,1,1,520.85,469,53.47,53.47,0,0,1,574.33,415.49Z" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center gy-5">
                    <div class="col-lg-10 col-md-11 col-sm-12">
                        <div class="usp-content">
                            <h1> <span>UNIQUE</span> Selling Point</h1>
                            <p>FashionTV is an exclusive fashion and lifestyle media entity boasting an idiosyncratic business model with a unique selling point.</p>
                            <ul>
                                <li data-aos="fade-up">Massive Profits</li>
                                <li data-aos="fade-up">360 degree support</li>
                                <li data-aos="fade-up">Brand Equity Leverage</li>
                                <li data-aos="fade-up">Strong Linkages</li>
                                <li data-aos="fade-up">Global Presence</li>
                                <li data-aos="fade-up">Exhilarating Events</li>
                                <li data-aos="fade-up">Ubiquitous Promotions</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="channels-intro" id="12-channels">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="channels-content text-center">
                            <h1 data-aos="fade-up"> Channels</h1>
                            <p data-aos="fade-up">FashionTV’s worldwide network presents fashion in <span> new and imaginative ways</span> every day!
                                From the front row of the <span>biggest fashion shows and runways</span> and the highlights of all the best fashion stories from around the world to the ravishingly hot models, FashionTV brings them to you first!
                                The FTV+ platform presents <span>12 stunning thematic channels</span> such as <span>Fashion Week, Swimwear, Models, Designers, Bridal, Hair and Makeup, Fashion men,</span> etc.
                                FashionTV broadcasts a variety of <span>exclusive content</span> on these channels and can be availed through satellite TV networks dedicated to lifestyle and fashion.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

        <section class="channels-slider" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="channels-slider-content">
                            <div class="swiper mySwiper3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/midnight-secrets.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/midnight-secrets.mp4" type="video/mp4">

                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Midnight Secrets</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fmen.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fmen.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>F-Men</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/hair-and-makeup.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/hair-and-makeup.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Hair and Makeup</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/loriginal.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/loriginal.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>FashionTV L’Original</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/photoshoot.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/photoshoot.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Photoshoots</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fashion-films.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fashion-films.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Fashion Films</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fashion-week.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/fashion-week.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Fashion Weeks</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/global.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/global.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>FashionTV Global</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/model-fitness.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/model-fitness.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Model Fitness</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/top-models.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/top-models.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Top Models</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/ftv-paris.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/ftv-paris.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>FTV Paris</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ch-slider">
                                            <div class="ch-slider-video">
                                                <video muted autoplay loop poster="/assets/img/poster.jpg">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/bridal-fashion.webm" type="video/webm">
                                                    <source src="https://frn.s3.ftvassets.in/media/videos/channels/bridal-fashion.mp4" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                            </div>
                                            <div class="ch-slider-heading">
                                                <h1>Bridal Fashion </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

        <section class="ravp-section">
            <!-- <div class="ravp-branding">
                <img src="../assets/media/images/f.svg" data-aos="fade-down" data-aos-duration="3000" alt="fashiontv">
            </div> -->
            <!-- <div class="ravpbranding">
                <svg xmlns="http://www.w3.org/2000/svg" data-aos="fade-down" data-aos-duration="3000" viewBox="0 0 628.65 1066.64">
                    <defs>
                        <style>
                            .cls-1 {
                                opacity: 0.55;
                            }

                            .cls-2 {
                                fill: none;
                                stroke: #ffd428;
                                stroke-miterlimit: 10;
                                stroke-width: 1.68px;
                            }
                        </style>
                    </defs>
                    <title>f-stroke</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                            <g class="cls-1">
                                <path class="cls-2" d="M366,452.74H240.59v-75.4c0-107.35-12.16-312.49,100.94-342,17.07-4.37,41.56-4.37,58.63,4.37-6.82,37.66-25.76,85.56,23,107.09,77.42,33.62,121.71-64.49,41.57-123.48C430.6-2.4,363.8-2.95,322.23,6.34A255.57,255.57,0,0,0,248,37.48C116.78,120.27,120.17,321,120.17,455.32H1l-.18.16.74,33.33H118.87V874l2.23,156.27-119.5.54-.74,35H366v-21.31l.06-14.1H240.59V488.81H365.91Zm208.31-37.25A53.48,53.48,0,1,1,520.85,469,53.47,53.47,0,0,1,574.33,415.49Z" />
                            </g>
                        </g>
                    </g>
                </svg>
            </div> -->
            <div class="container">
                <div class="row align-items-center gy-3">
                    <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-12">
                        <div class="ravp-tabs" data-aos="fade-up">
                            <span class="tabs__toggle is-active">
                                <h3>REACH </h3>
                            </span>
                            <span class="tabs__toggle">
                                <h3>Audience </h3>
                            </span>
                            <span class="tabs__toggle">
                                <h3>Viewership </h3>
                            </span>
                            <span class="tabs__toggle">
                                <h3>Partner Brands</h3>
                            </span>

                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="ravp-content" data-aos="fade-up">
                            <div class="tabs-content is-active">
                                <p>A networking giant, FashionTV is <span>transmitted to satellites in SD</span>, HD, and 3D,<span> 530+ TV platforms</span>, mobiles, <span>IPTV</span>, smart TVs, and smartphones.</p>
                            </div>
                            <div class="tabs-content">
                                <p>The FTV audience has a <span>high standard</span> when it comes to their taste in fashion. They swear by the <span> world’s leading designers</span> and <span>dress to impress.</span> </p>

                            </div>
                            <div class="tabs-content">
                                <p>FashionTV has a niche audience whose viewers consist of celebrities, models, and <span>designers with excellent preferences</span> and whose fashion choices and purchases are heavily influenced by FashionTV.
                                    Keeping up with <span> millennials and the age of digitalisation, our outreach has been staggering</span> and FashionTV has made its mark on every social media platform.</p>
                            </div>
                            <div class="tabs-content">
                                <p>FashionTV has always been synonymous with fashion, luxury, and <span>beauty aesthetics</span>. We keep <span>collaborating with</span> popular and premium brands around the world ranging from categories like <span>cosmetics, accessories, and exotics cars to premium apparel</span>. FashionTV has collaborated with the <span>industry's behemoths</span> and will continue <span>besieging opportunities after opportunities</span> for other businesses to beam.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->

        <section class="features-section" id="Future">
            <!-- <div class="features2-video">
                <video muted autoplay loop poster="/assets/img/bg-2.png">
                    <source src="/assets/videos/Winter fashion week.mp4" type="video/mp4">
                </video>
            </div> -->
            <div class="container">
                <!-- <div class="container features2-container"> -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="features-content">
                            <h1 data-aos="fade-up">FUTURE</h1>
                            <ul data-aos="fade-up">
                                <li>Fashion TV is <span>setting its sight</span> on the different fashion markets of the world. </li>
                                <li>Being a leader in everything fashion-related, Fashion TV sees itself <span>playing an integral role in developing the fashion scene</span> in countries <span>that propagate the medium.</span></li>
                                <li>India has a huge fashion market and <span>designers rubbing shoulders</span> with the best there is <span>to offer internationally.</span> </li>
                                <li>Similarly, Indian Models have also stamped their <span>mark with pride and dash</span> on the global fashion scene. </li>
                                <li>There is a huge <span>gap between the aspirants and the celebrated talent</span> of this nation and Fashion TV has taken the initiative to <span>eliminate and be the bridge</span> and provide the world with <span>remarkable talents</span>.</li>
                                <li>We at FashionTV, have some <span>promising plans in the pipeline for the coming future. </span></li>
                                <li>Being the <span>flag bearer of the global fashion</span> world for over <span>2 decades, FashionTV will be playing a vital role in developing the fashion industry in India.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/js/custom.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            autoHeight: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
        });

        var swiper = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
            breakpoints: {
                600: {

                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
    <script>
        const contents = document.querySelectorAll(".tabs-content");
        const tabs = document.querySelectorAll(".tabs__toggle");

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", () => {
                contents.forEach((content) => {
                    content.classList.remove("is-active");
                });
                tabs.forEach((tab) => {
                    tab.classList.remove("is-active");
                });
                contents[index].classList.add("is-active");
                tabs[index].classList.add("is-active");
            });
        });
    </script>
</body>

</html>