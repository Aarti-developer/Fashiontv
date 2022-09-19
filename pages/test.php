<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>

    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> --> <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";  ?>

</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        botton
    </button> -->

    <!-- Modal -->
    <div class="modal mymodal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <!-- <button type="button" class="btn-close close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <!-- <h1></h1> -->
                    <p>Date: <input type="text" id="datepicker"></p>


                    <div class="modal-enquireBtn text-center">
                        <button id="result" onclick="calcValue();">Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_footer.php"; ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
        let openmodal = document.getElementById("staticBackdrop");
        let result = document.getElementById("result");
        $(document).ready(function() {
            // debugger
            openmodal.style.display = "block";
            
            function calcValue() {
                var dob = new Date(userinput);
                let userinput = document.getElementById("datepicker").value;
                if (userinput == null || userinput == '') {
                    document.getElementById("message").innerHTML = "**Choose a date please!";
                    return false;
                } else {

                    //calculate month difference from current date in time
                    var month_diff = Date.now() - dob.getTime();

                    //convert the calculated difference in date format
                    var age_dt = new Date(month_diff);

                    //extract year from date    
                    var year = age_dt.getUTCFullYear();

                    //now calculate the age of the user
                    var age = Math.abs(year - 1970);

                    //display the calculated age
                    alert(age);
                }

            }
        });
    </script>
</body>

</html>