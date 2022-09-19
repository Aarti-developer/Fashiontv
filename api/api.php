<?php
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$id = date('U');
$servername = "localhost";
$username = "indiafashiontv_expo_master";
$password = "A?^CeJLoG%(,";
$dbname = "indiafashiontv_expo_data";


$con = new mysqli("localhost", $username , $password, $dbname);



if (mysqli_connect_errno()) {
    echo "Connection Error: " . mysqli_connect_errno();
} 
else {
    if(isset($_POST["expo_submit"])){
        if($_POST["expo_submit"] = "Delhi Expo"){
            $name =  mysqli_real_escape_string($con,$_POST["name"]);
            $email =  mysqli_real_escape_string($con,$_POST["email"]);
            $mobile =  mysqli_real_escape_string($con,$_POST["mobile"]);
            $interested_vertical =  mysqli_real_escape_string($con,$_POST["vertical"]);
            $campaign_source =  mysqli_real_escape_string($con,$_POST["campaign_source"]);
            $source_location =  mysqli_real_escape_string($con,$_POST["source_location"]);
            $query = "INSERT INTO `delhi_enquiries`(`id`, `campaign_source`, `source_location`, `name`, `email`, `contact`, `interested_vertical`, `created_on`) VALUES ('".$id."','".$campaign_source."','".$source_location."','".$name."','".$email."','".$mobile."','".$interested_vertical."','".$date."')";
            if ($con->query($query) == TRUE) {
                $message = "Successfully Submitted.";
                header("location:/expo/delhi");
                // header("location:".$url);
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
    if(isset($_POST["newsletter_submit"])){
        $email =  mysqli_real_escape_string($con,$_POST['nemail']);
        $url = $_POST['url'];
        // echo $url;
        $query = "INSERT INTO `newsletter` (`id`, `email`, `created_on`) VALUES ('".$id."','".$email."','".$date."')";
        if (mysqli_connect_errno()) {
            echo "Connection Error: " . mysqli_connect_errno();
        } 
        else {
            if ($con->query($query) == TRUE) {
                // echo "Data";
                header("location:".$url);
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }



    if(isset($_POST["enquiry_submit"])){
        $name =  mysqli_real_escape_string($con,$_POST["name"]);
        $email =  mysqli_real_escape_string($con,$_POST["email"]);
        $mobile =  mysqli_real_escape_string($con,$_POST["mobile"]);
        $state =  mysqli_real_escape_string($con,$_POST["state"]);
        $city =  mysqli_real_escape_string($con,$_POST["city"]);
        $investment_capacity =  mysqli_real_escape_string($con,$_POST["investment_capacity"]);
        $message =  mysqli_real_escape_string($con,$_POST["message"]);
        $url = $_POST['url'];
        $query = "INSERT INTO `enquiries` (`name`, `email`, `contact`, `state`, `city`, `investment_capacity`, `message`, `created_on`) VALUES ('".$name."','".$email."','".$mobile."','".$state."','".$city."','".$investment_capacity."','".$message."','".$date."')";
        if ($con->query($query) == TRUE) {
            $message = "Successfully Submitted.";
            header("location:/enquire-now");
            // header("location:".$url);
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    $con->close();    
    
}


?>
