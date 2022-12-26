<?php
require_once "connection.php";

$email = $password = $confirm_password = $name = $contact = "";

$email_err = $password_err = $confirm_password_err = $name_err = $contact_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty(trim($_POST["email"]))){
        $email_err = "Email Cannot be empty";
    }
    elseif(empty(trim($_POST["name"]))){
        $name_err = "Name cannot be empty";
    }
    else{
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_email); 

            $param_email = trim($_POST['email']);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    //email already taken
                    $email_err = "Email already registered";
                }
                else{
                    $email = trim($_POST['email']);
                    $name = trim($_POST['name']);
                    $contact = trim($_POST['contact']);
                }
            }
            else{
                echo "Something Went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);

    //check password
    if(empty(trim($_POST['password']))){
        $password_err = "Password cannot be empty";
    }
    elseif(strlen(trim($_POST['password'])) < 8){
        $password_err = "Password cannot be less than 8";
    }
    else{
        $password = trim($_POST['password']);
    }

    //check for confirm password
    if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
        $password_err = "Passwords should match";
    }
    
    // If there were no errors, go ahead and insert into the database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql = "INSERT INTO users (name, email, password, contact) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt)
        {
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_password, $param_contact);
            // Set these parameters
            $param_name = trim($_POST['name']);
            $param_email = trim($_POST['email']);
            $param_password = trim($_POST['password']);
            $param_contact = trim($_POST['contact']);
            // Try to execute the query
            if (mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            }
            else{
                echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close();
}
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_home/Signup.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Don't Trash It</title>
</head>
<body>
<?php
    
    include_once('navbar/nav_login.php');
    ?>
    <form action="" method="POST" style="margin-top:70px;">
        <div class="Heading">
            <h1 id="MainHead">Signup</h1>
        </div><br><br>
        <!--Entry starts-->
        <div id="entry">
            <label class="labels">Name</label> <br><br>
            <input type="text" name="name" placeholder="Enter your Full Name" class="box"><br><br>

            <label class="labels">Email</label> <br><br>
            <input type="email" name="email" placeholder="Enter email address" class="box"><br><br>
            
            <label class="labels">Password</label> <br><br>
            <input type="text" name="password" placeholder="Enter the password" class="box"><br><br>

            <label class="labels">Confirm Password</label> <br><br>
            <input type="text" name="confirm_password" placeholder="Enter the password again" class="box"><br><br>

            <label class="labels">Contact</label> <br><br>
            <input type="text" name="contact" placeholder="Enter your contact number" class="box"><br><br>

            <div class="signup" ><a href="login.php">Already Have An Account</a></div></br>

            <input type="submit" class="button1" value="Signup"> <br> <br>
        </div>
    </form>
</body>
</html>