<?php

//This script will handle login
session_start();
require_once "connection.php";

// check if the user is already logged in
if(isset($_SESSION['email']))
{
}
else{
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Plactic calculator</title>
    <link rel="stylesheet" href="css_home/calculator.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
  <?php
    
    include_once('navbar/nav_calculator.php');
    ?>
    <div class="container" style="margin-top:60px;">
      <header>Plastic calculator</header>
      <div class="progress-bar">
        <div class="step">
          <p>SNACKS</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>BEVERAGES</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>GROCERIES & COOKING</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>HEALTH & WELLNESS</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="result.php" method="POST">
          <div class="page slide-page">
            <div class="title">01 SNACKS</div>
            <div class="field">
              <h3>Which of the following snack items do you normally purchase?</h3>
              <div class="slidecontainer">
                <h3>Chocolate wrappers</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_1" name="snack_1">
                <div id="demo_1"></div>
              </div>
              <div class="slidecontainer">
                <h3>Chips wrappers</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_2" name="snack_2">
                <div id="demo_2"></div>
              </div>
              <div class="slidecontainer">
                <h3>Biscuit/cookie wrappers</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_3" name="snack_3">
                <div id="demo_3"></div>
              </div>
              <div class="slidecontainer">
                <h3>Ice cream packets</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_4" name="snack_4">
                <div id="demo_4"></div>
              </div>
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page slide-page">
            <div class="title">02 BEVERAGES</div>
            <div class="field">
              <h3>Which of the following beverages do you normally consume?</h3>
              <div class="slidecontainer">
                <h3>Soft drink bottles</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_5" name="snack_5">
                <div id="demo_5"></div>
              </div>
              <div class="slidecontainer">
                <h3>Bottled water</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_6" name="snack_6">
                <div id="demo_6"></div>
              </div>
              <div class="slidecontainer">
                <h3>Bottled juices</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_7" name="snack_7">
                <div id="demo_7"></div>
              </div>
              <div class="slidecontainer">
                <h3>Milk packets/cartons</h3>
                <input type="range" min="0" max="50" value="0" class="slider" id="snack_8" name="snack_8">
                <div id="demo_8"></div>
              </div>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page slide-page">
            <div class="title">03 GROCERIES & COOKING</div>
            <div class="field">
            <h3>How many plastic-packaged grocery or meal kit items do you purchase every week for your household?</h3>
            <div class="slidecontainer">
              <h3>Meat packaging/ Egg cartons</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_9" name="snack_9">
              <div id="demo_9"></div>
              </div>
            <div class="slidecontainer">
              <h3>Plastic food jars</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_10" name="snack_10">
              <div id="demo_10"></div>
            </div>
            <div class="slidecontainer">
              <h3>Yoghurt tubs</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_11" name="snack_11">
              <div id="demo_11"></div>
            </div>
            <div class="slidecontainer">
              <h3>Butter tubs</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_12" name="snack_12">
              <div id="demo_12"></div>
            </div>
            <div class="slidecontainer">
              <h3>Plastic grocery bags</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_13" name="snack_13">
              <div id="demo_13"></div>
            </div>
          </div>
          <div class="field btns">
            <button class="prev-2 prev">Previous</button>
            <button class="next-2 next">Next</button>
          </div>
          </div>

          <div class="page ">
            <div class="title">04 HEALTH & WELLNESS</div>
            <div class="field">
            <h3>How many plastic-packaged daily items did you use this week?</h3>
            <div class="slidecontainer">
              <h3>Detergent bottles</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_14" name="snack_14">
              <div id="demo_14"></div>
              </div>
            <div class="slidecontainer">
              <h3>Shampoo/lotion bottles</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_15" name="snack_15">
              <div id="demo_15"></div>
            </div>
            <div class="slidecontainer">
              <h3>Liquid hand soap bottles</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_16" name="snack_16">
              <div id="demo_16"></div>
            </div>
            <div class="slidecontainer">
              <h3>Plastic wraps</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_17" name="snack_17">
              <div id="demo_17"></div>
            </div>
            <div class="slidecontainer">
              <h3>Plastic combs</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_18" name="snack_18">
              <div id="demo_18"></div>
            </div>
            <div class="slidecontainer">
              <h3>Plastic straws/cutlery</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_19" name="snack_19">
              <div id="demo_19"></div>
            </div>
            <div class="slidecontainer">
              <h3>Plastic cotton buds</h3>
              <input type="range" min="0" max="50" value="0" class="slider" id="snack_20" name="snack_20">
              <div id="demo_20"></div>
            </div>
          </div>
          <div class="field btns">
            <button class="prev-3 prev">Previous</button>
            <input type="submit" class="submit" value="Submit">
            <!--<button class="submit">Submit</button>-->
          </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js_home/calculator2.js"></script>
    <script src="js_home/calculator3.js"></script>
    <script src="js_home/calculator1.js"></script>
  </body>
</html>
