<?php
require('db.php');
require('function.php');
session_start();

if(isset($_POST['addpost'])){
   $ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
   $pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
   $name=getName($db,$_SESSION['email']);
   $id=getUserId($db,$name);
   echo $id;
   echo $name;
   $query="INSERT INTO posts (title,content,user_id) VALUES('$ptitle','$pcontent',1)";
$run=mysqli_query($db,$query);
if($run){
    echo "yesss";
    //header('location:../index.php');
}
$post_id=mysqli_insert_id($db);
echo '<PRE>';
$image_name=$_FILES['post_image']['name'];
$img_tmp=$_FILES['post_image']['tmp_name'];
print_r($image_name);
print_r($img_tmp);

foreach($image_name as $index=>$img){
    if(move_uploaded_file($img_tmp[$index],"../images/$img")){
        $query="INSERT INTO images (post_id,image) VALUES($post_id,'$img')";
$run=mysqli_query($db,$query); 
    }
}
 echo "Done",$post_id;

}
?>