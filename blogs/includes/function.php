<?php

function getUserName($db,$id){
    $query="SELECT * FROM users WHERE sno=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];
}

function getImagesByPost($db,$post_id){
    $query="SELECT * FROM images WHERE post_id=$post_id";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
    
}

function getComments($db,$post_id){
    $query="SELECT * FROM comments WHERE post_id=$post_id ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

function getName($db,$email){
    $query="SELECT * FROM users WHERE email='$email'";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];
}

function getUserId($db,$name){
    $query = "SELECT * FROM users WHERE name='$name'";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['sno'];
}

function getAdminInfo($db,$email){
    $query="SELECT * FROM admin WHERE email='$email'";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}

function getPostThumb($db,$id){
    $query="SELECT * FROM images WHERE post_id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['image'];
}

function getAllPost($db){
    $query="SELECT * FROM posts ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

?>