<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: logout.php");
    exit;
}
require_once "connection.php";

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email + password";
    }
    else{
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT sno, email, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    $param_email = $email;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $email, $password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["email"] = $email;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: logout.php");
                            
                    }

                }

    }
}    


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_home/login.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Don't Trash It</title>
</head>
<body>
    <?php
    
    include_once('navbar/nav_login.php');
    ?>
    <form method="POST" style="width:30%;">
        <div class="Heading">
            <h1 id="MainHead">Login</h1>
        </div><br><br>
        <!--Entry starts-->
        <div id="entry">
            <label class="labels">Email</label> <br><br>
            <input type="email" name="email" placeholder="Enter email address" class="box"><br><br>
            
            <label class="labels">Password</label> <br><br>
            <input type="password" name="password" placeholder="Enter your password" class="box"><br><br>

            <div class="signup" ><a href="signup.php">Do Not Have an Account?</a></div></br>

            <input type="submit" class="button1" value="Login"> <br> <br>
            <div class="signup" ><a href="index.php">Go back</a></div></br>
        </div>
    </form>
</body>
</html> 