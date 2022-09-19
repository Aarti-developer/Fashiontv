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
    <main class="careers-page main_tag">
        <!--  -->
        <div class="image-section">
            <img src="/assets/img/careers.jpg" alt="Image">
        </div>
        <div class="container">
            <h1 class="my-5">Careers</h1>
            <p>
                No revolution started with a single individual. Believe it or not it
                takes an entire team to unite and put their abilities together to
                generate greatness. Together we work hard, we laugh a lot, we brainstorm
                and ideate, we fraternize and create, we conduct meetings and celebrate
                national days together while using gazillions of post it notes and
                reload print cartridges every second day while giving the best fist
                bumps in Mumbai. We at FashionTV The World's Largest Fashion and
                Lifestyle Media Brand/House are looking for talented and passionate
                people to work with us. If you think you have what it takes to be a
                fragment of our constellation, a fragment that is integral to our
                functionality then we invite you to come work with us. <br />
                Our latest job updates can be found here, so stay tuned and get ready to
                be a part of the leaders of the Fashion Community.
            </p>
        </div>
        <!--  -->
    </main>
    <!-- main -->

    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->


    <script src="/assets/js/custom.js"></script>

</body>

</html>