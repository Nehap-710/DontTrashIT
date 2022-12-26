<?php
require('db.php');
require('function.php');
if(isset($_POST['addcomment'])){
    // print_r($_POST);
$name=mysqli_real_escape_string($db,$_POST['name']);
$comment=mysqli_real_escape_string($db,$_POST['comment']);
$user_id=getUserId($db,$name);
$post_id=$_POST['post_id'];
$query="INSERT INTO comments(user_id,comment,post_id) VALUES('$user_id','$comment',$post_id)";
if(mysqli_query($db,$query)){
    header("location:../post.php?id=$post_id");
}else{
    echo "comment is not addedd !";
}

}
?>