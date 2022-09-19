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

    <main class="enquirynow-page main_padding">
        <section class="enquiry-form-sec" id="enquiry-now" >
            <div class="container">
                <div class="row justify-content-center">
                    <img src="/assets/img/fashiontv.svg" alt="fashiontv">
                    <h1>Enquire Now</h1>
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="enquiry-form text-center">
                            <form action="/api/_api.php" method="post" id="enquiryForm">
                                <div class="form-area">
                                    <div class="form-enquire">
                                        <input type="text" name="name" id="" placeholder="Your Name" required autocomplete="off"/>
                                    </div>
                                    <div class="form-enquire">
                                        <input type="text" name="mobile" id="" placeholder="Your Phone No." required autocomplete="off" maxlength="10" minlength="10" min="0" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required=""/>
                                    </div>
                                    <div class="form-enquire">
                                        <input type="email" name="email" id="" placeholder="Your Email Id" required autocomplete="off"/>
                                    </div>
                                    <div class="form-enquire">
                                        <select required autocomplete="off" name="state" id="stateSelect">
                                            <option selected="true" disabled="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="form-enquire">
                                        <select required autocomplete="off" name="city" id="citySelect">
                                            <option selected="true" disabled="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="form-enquire">
                                        <select class="select-cls" name="investment_capacity" autocomplete="off" disabled>
                                            <option selected disabled>Select Investment Capacity</option>
                                            <option value="50 Lacs Onwards">&#8377;50 Lacs+</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-enquire">                                         -->
                                        <textarea name="message" type="text" placeholder="Message"></textarea>
                                    <!-- </div> -->
                                </div>
                                <button type="submit" value="Submit" class="enq-btn-one" name="enquiry_submit">
                                    Submit
                                </button>
                            </form>
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
                            <script src="/assets/js/cities.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="gettoknow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 col-sm-12">
                        <div class="gettoknow-content">
                            <div class="get-heading">
                                <h5>Get To Know More</h5>
                            </div>
                            <div class="get-link">
                                <a href="#">Enquire Now</a>
                            </div>
                            <div class="get-link">
                                <a href="#">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    </main>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <!-- footer -->


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
        label.error{
            color:red;
        }
        input.error,select.error{
            box-shadow: 0 0 0 0.25rem rgba(255,0,0,0.5);
        }
    </style>
     <script src="/assets/js/cities.js"></script>

</body>

</html>