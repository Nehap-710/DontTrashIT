<?php
session_start();
require_once "connection.php";
include_once("blogs/includes/function.php");

if(isset($_SESSION['email'])){
    $name = getName($conn,$_SESSION['email']);
    $id = getUserId($conn,$name);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<title>Your Foot Print Record</title>
<style>
    body{
  overflow-x: hidden;
  font-family: 'Oswald', sans-serif;
  background-color: #FFDAC1;
}
#result-intro{
  text-align: center;
  background-color: white;
}
#result-intro>h1{
  font-size: 48px;
  color:  rgba(24, 39, 51 , 0.85);
  text-decoration: underline;
  padding-top: 60px;
  text-decoration-color:rgb(228, 228, 74);
  padding-bottom: 20px;
}
table {
border-collapse: collapse;
width: 70%;
color: #588c7e;
font-family: 'Oswald', sans-serif;
font-size: 25px;
text-align: center;
margin-top:70px;
justify: center;
margin-left: 225px;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #CCE2CB}
</style>
</head>
<body>
<?php
    
    include_once('navbar/nav_cal_record.php');
    ?>
    <div id="result-intro">
        <h1>Plastic Calculator Result</h1>
    </div>
<table>
<tr>
<th>Date</th>
<th>Result</th>
</tr>
<?php
$query = "SELECT * FROM record WHERE user_id=$id";
$result = mysqli_query($conn,$query);

//get the number of rows;
$num = mysqli_num_rows($result);

if ($num > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . date('F jS, Y',strtotime($row['result_date'])). "</td><td>" .$row["result"]. "</td><td>";
}
echo "</table>";
} else { echo "You Don't Have Any record!! Please Use the Calculator"; }
$conn->close();
?>
</table>
</body>
</html>