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
    <link rel="stylesheet" href="/assets/css/landing.css">
</head>

<body>

    <a href="javascript:void(0)" id="scroll" style="display: none;"><span></span>
        <span class="d-none">Scroll To Top</span>
    </a>


    <!-- header -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <!-- header -->
    <!-- Main -->
    <main>
        <!--<section class="introimage-section">-->
        <!--    <div class="introimage-img">-->
        <!--        <img src="/assets/img/verticals.png" alt="Image">-->
        <!--    </div>-->
        <!--</section>-->
        <section class="enquiry-form-sec" id="enquiry-now">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="/assets/img/logo/fashiontv.png" alt="Image">
                    <h1>Contact Now</h1>
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="enquiry-form text-center">
                            <form action="/api/api.php" method="post" id="enquiryForm">
                                <div class="form-enquire">
                                    <input type="text" name="name" id="" placeholder="Your Name" required autocomplete="off" />
                                </div>
                                <div class="form-enquire">
                                    <input type="email" name="email" id="" placeholder="Your Email Id" required autocomplete="off" />
                                </div>
                                <div class="form-enquire">
                                    <input type="number" name="mobile" maxlength="10" minlength="10" min="0" placeholder="Your Phone No." required autocomplete="off" />
                                </div>
                                <!-- <div class="form-enquire">
                                    <select class="select-cls" name="state" id="stateSelect" required autocomplete="off">
                                        <option selected="true" disabled="">Select State</option>
                                    </select>
                                </div>
                                <div class="form-enquire">
                                    <select class="select-cls" name="city" id="citySelect" required disabled autocomplete="off">
                                        <option selected="true" disabled="">Select City</option>
                                    </select>
                                </div> -->
                                <div class="form-enquire">
                                    <select class="select-cls" name="vertical" required>
                                        <option selected disabled value=""> Select A Vertical </option>
                                        <?php
                                        $verticals = array(
                                            0 => "Niteclub", 
                                            1 => "Brewery" ,
                                            2 => "Cafe",
                                            3 => "FHouse",
                                            4 => "Spa",
                                            5 => "Bar",
                                            6 => "Gym",
                                            7 => "School of Performing Arts",
                                            8 => "Salon Academy",
                                            9 => "Salon",
                                            10 => "City Partner",
                                            11 => "Aesthetic",
                                            12 => "Nail Spa",
                                            13 => "Lounge",
                                            14 => "Wine n' Dine",
                                            15 => "Pageants",
                                            16 => "Pool Party",
                                            17 => "Fashion Week",
                                        );
                                        foreach ($verticals as $vertical) {?>
                                            <option value="<?php echo $vertical;?>"> <?php echo $vertical;?> </option>
                                        <?php }?>
                                    </select>
                                    <input type="hidden" name="campaign_source" value="Expo">
                                    <input type="hidden" name="source_location" value="Delhi">
                                </div>
                                <!-- <textarea name="message" type="text" placeholder="Message"></textarea> -->
                                <button type="submit" name="expo_submit" value="Delhi Expo" class="enq-btn-one">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main -->
    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->


    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
    <script>
        $.validator.addMethod("letters", function(value, element) {
            return this.optional(element) || value == value.match(/^[a-zA-Z'\s]*$/);
        });
        $("#enquiryForm").validate({
            rules: {
                name: {
                    letters: true
                }
            },

            messages: {
                name: "Only letters and spaces are allowed",
            }
        });
    </script>
    <style>
        input.error,select.error{
            box-shadow: 0 0 0 0.25rem rgba(255, 0, 0, 0.5);
        }
        label.error{
            color: red;
        }
    </style>
</body>

</html>