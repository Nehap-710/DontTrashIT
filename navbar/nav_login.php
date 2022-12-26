<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    :root {
    --primary-color: rgba(13, 110, 139, 0.75);
    --overlay-color: rgba(24, 39, 51 , 0.85);
    --menu-speed: 0.75s;
  }

  a{
      cursor: pointer;
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: 'Oswald', sans-serif;
  }

  .logo{
      color: white;
      padding-left: 100px;
      padding-top: 5px;
      font-size: 35px;
  }

  .login{
    margin-left: 1137px;
    margin-top:10px;
    padding-right: 20px;
  }  

  .login a{
    color: white;
    font-size: 20px;
  }
  /* MENU STYLES */
  .menu-wrap {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1;
    width: 1560px;
    display: flex;
    flex-direction: row;
    background-color: rgba(24, 39, 51 , 0.4);;
  }
  
  .menu-wrap .toggler {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    cursor: pointer;
    width: 50px;
    height: 50px;
    opacity: 0;
  }
  
  .menu-wrap .hamburger {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 60px;
    height: 60px;
    padding: 1rem;
    
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  /* Hamburger Line */
  .menu-wrap .hamburger > div {
    position: relative;
    flex: none;
    width: 100%;
    height: 2px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s ease;
  }
  
  /* Hamburger Lines - Top & Bottom */
  .menu-wrap .hamburger > div::before,
  .menu-wrap .hamburger > div::after {
    content: '';
    position: absolute;
    z-index: 1;
    top: -10px;
    width: 100%;
    height: 2px;
    background: inherit;
  }
  
  /* Moves Line Down */
  .menu-wrap .hamburger > div::after {
    top: 10px;
  }
  
  /* Toggler Animation */
  .menu-wrap .toggler:checked + .hamburger > div {
    transform: rotate(135deg);
  }
  
  /* Turns Lines Into X */
  .menu-wrap .toggler:checked + .hamburger > div:before,
  .menu-wrap .toggler:checked + .hamburger > div:after {
    top: 0;
    transform: rotate(90deg);
  }
  
  /* Rotate On Hover When Checked */
  .menu-wrap .toggler:checked:hover + .hamburger > div {
    transform: rotate(225deg);
  }
  
  /* Show Menu */
  .menu-wrap .toggler:checked ~ .menu {
    visibility: visible;
  }
  
  .menu-wrap .toggler:checked ~ .menu > div {
    transform: scale(1);
    transition-duration: var(--menu-speed);
  }
  
  .menu-wrap .toggler:checked ~ .menu > div > div {
    opacity: 1;
    transition:  opacity 0.4s ease 0.4s;
  }
  
  .menu-wrap .menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    visibility: hidden;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .menu-wrap .menu > div {
    background: var(--overlay-color);
    border-radius: 50%;
    width: 200vw;
    height: 200vw;
    display: flex;
    flex: none;
    align-items: center;
    justify-content: center;
    transform: scale(0);
    transition: all 0.4s ease;
  }
  
  .menu-wrap .menu > div > div {
    text-align: center;
    max-width: 90vw;
    max-height: 100vh;
    opacity: 0;
    transition: opacity 0.4s ease;
  }
  
  .menu-wrap .menu > div > div > ul > li {
    list-style: none;
    color: #fff;
    font-size: 1.5rem;
    padding: 1rem;
  }
  
  .menu-wrap .menu > div > div > ul > li > a {
    color: inherit;
    text-decoration: none;
    transition: color 0.4s ease;
  }
    </style>
    
</head>
<body>
    <!--result-intro-->
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
          <div>
            <div>
              <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./index.php#facts">Facts about plastic</a></li>
                <li><a href="#blogs">Blogs</a></li>
                <li><a href="footprint.php">Footprint Calculator</a></li>
                <li><a href="./index.php#challenges">Daily challenges</a></li>
                <li><a href="./index.php#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="logo">Don't Trash IT</div>
        <div class="login" ><a href="./index.php">Go back</a></div>
      </div>
</body>
</html>