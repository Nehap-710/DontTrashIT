<?php

//This script will handle login
session_start();
require_once "connection.php";
include_once("blogs/includes/function.php");

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    require_once "connection.php";

    //SNACKS LIST VARIABLE INITIALIZATION
    $choco_wrap_non = 0;
    $chips_wrap = 0;
    $cookie_wrap = 0;
    $icecream_packet = 0;
    $r1="";
   
    //BEVERAGES LIST VARIABLE INITIALIZATION
    $soft_drink = 0;
    $bottle_water = 0;
    $bottle_juice = 0;
    $milk_packet = 0;
    $meat_egg_packet_non = 0;
    $plastc_food = 0;
    $yogurt_tubs = 0;
    $butter_tubs = 0;
    $plastic_grocery_non = 0;
    $detegent_bottle = 0;
    $shampoo_bottle = 0;
    $liquid_hand = 0;
    $plastic_wraps_non = 0;
    $combs_non = 0;
    $straws_cutlery_non = 0;
    $cotton_buds_non = 0;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $choco_wrap_non = $_POST['snack_1'];
        $chips_wrap = $_POST['snack_2'];
        $cookie_wrap = $_POST['snack_3'];  
        $icecream_packet = $_POST['snack_4'];
        $soft_drink = $_POST['snack_5'];
        $bottle_water = $_POST['snack_6'];
        $bottle_juice = $_POST['snack_7'];
        $milk_packet = $_POST['snack_8'];
        $meat_egg_packet_non = $_POST['snack_9'];
        $plastc_food = $_POST['snack_10'];
        $yogurt_tubs = $_POST['snack_11'];
        $butter_tubs = $_POST['snack_12'];
        $plastic_grocery_non = $_POST['snack_13'];
        $detegent_bottle = $_POST['snack_14'];
        $shampoo_bottle = $_POST['snack_15'];
        $liquid_hand = $_POST['snack_16'];
        $plastic_wraps_non = $_POST['snack_17'];
        $combs_non = $_POST['snack_18'];
        $straws_cutlery_non = $_POST['snack_19'];
        $cotton_buds_non = $_POST['snack_20'];

        $non_rec = $choco_wrap_non + $meat_egg_packet_non + $plastic_grocery_non + $plastic_wraps_non + $combs_non + $straws_cutlery_non + $cotton_buds_non + 0;

        $rec = $chips_wrap + $cookie_wrap + $icecream_packet + $soft_drink + $bottle_water + $bottle_juice + $milk_packet + $plastc_food + $yogurt_tubs + $butter_tubs + $detegent_bottle + $shampoo_bottle + $liquid_hand + 0;

        //echo "Non Rec Total:",$non_rec;
        //echo "Rec Total:",$rec;
    
        if($non_rec > $rec){
            /////echo "Your plastic usage is high! Please take a look at some suggestions to reduce the usage";
            $s1 = "Your plastic usage is high! Please take a look at some suggestions to reduce the usage";
            $s6 = "You can try these to reduce your plastic usage";
            $r1 = "More than required Harmfull Plastic Usage";
            if($plastic_grocery_non != 0){
                //echo "Instead of using plastic bags use a cloth bag toh carry the groceries";
                $s2 = "Instead of using plastic bags use a cloth bag to carry the groceries";
            }
            if($plastic_wraps_non!=0){
               // echo "Please use aluminium foils instead of plastic ones";
               $s3 = "Please use aluminium foils instead of plastic ones";
            }
            if($combs_non!=0){
                //echo "Please use wodden comnbs";
                $s4 = "Please use wodden comnbs";
            }
            if($straws_cutlery_non!=0){
               // echo "Please use steel/wooden cutlery and straws instead of plastic ones";
               $s5 = "Please use steel/wooden cutlery and straws instead of plastic ones";
            }
        }
        else{
            $s1 = "YAY!! Your plastic usage is correct for environment, Look at some suggestion to maintain the same";
            $s2 = "Use cloth bags to carry the groceries";
            $s3 = "Use aluminium foils instead of plastic ones";
            $s4 = "Use wodden combs";
            $s5 = "Carry your cutlery such as steel straws and plates and save the environment!!"; 
            $s6 = "You can try these tips to maintain your plastic usage";
            $r1 = "Less Harmful Plastic Usage";
        }

        $uname = getName($conn,$_SESSION['email']);
        $id = getUserId($conn,$uname);
        $query = "INSERT INTO record (result,user_id) VALUES ('$r1',$id)";
        $run = mysqli_query($conn,$query);
        if($run){
            echo '<script>alert("Updatated into records successfully!!")</script>';
        }
        else{
            echo '<script>alert("!!Cannot update data into records!!")</script>';
        }

    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css_home/result.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Plastic Footprint result</title>
</head>
<body>
<?php
    
    include_once('navbar/nav_calculator.php');
    ?>

    <!--result-intro-->
    <div id="result-intro">
        <h1>Plastic Calculator Result</h1>
    </div>
    <div class="result">
        <h2><?php echo $s1;?></h2>
    </div>
    <div class="suggestions">
        <h2><?=$s6?></h2>
        <ul>
            <li><h3><?=$s2?></h3></li>
            <li><h3><?=$s3?></h3></li>
            <li><h3><?=$s4?></h3></li>
            <li><h3><?=$s5?></h3></li>
        </ul>
    </div>
</body>
</html>