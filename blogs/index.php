<?php
require('includes/db.php');
require('includes/function.php');

//session_start();

if(isset($_SESSION['email'])){
  if(isset($_GET['page'])){
    $page=$_GET['page'];
  }else{
    $page=1;
  }
  $post_per_page=4;
  $result=($page-1)*$post_per_page;
}
else{
  echo '<script>alert("Please Login First to read Blogs!!")</script>';
  header("location:../login.php");
}

// $result = 0
// $result = 4;
// $result = 8
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Blog</title>
</head>
<body>
    <?php include_once('includes/navbar.php');?>

    
    <div class="container m-auto mt-3 row">
        <div class="col-8"  style="margin-top:50px;">

        <?php
       $postQuery="SELECT * FROM posts ORDER BY id DESC LIMIT $result,$post_per_page";
       $runPQ=mysqli_query($db,$postQuery);
       while($post=mysqli_fetch_assoc($runPQ)){
         ?>
<div class="card mb-3" style="max-width: 800px;">
<a href="post.php?id=<?=$post['id']?>" style="text-decoration:none;color:black">
            <div class="row g-0">
              <div class="col-md-5" style="background-image: url('images/<?=getPostThumb($db,$post['id'])?>');background-size: cover">
                <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title"><?=$post['title']?></h5>
                  
                  <p class="card-text text-truncate"><?=$post['content']?></p>
                  <p class="card-text"><small class="text-muted">Posted on <?=date('F jS, Y',strtotime($post['created_at']))?></small></p>
                </div>
              </div>
            </div>
</a>
          </div>
         <?php
       }
       ?>
    </div>
    </div>

    <?php
$q="SELECT * FROM posts";
$r=mysqli_query($db,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);

?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
if($page>1){
  $switch="";
}else{
  $switch="disabled";
}
if($page<$total_pages){
  $nswitch="";
}else{
  $nswitch="disabled";
}
        ?>
          <li class="page-item <?=$switch?>">
            <a class="page-link" href="?page=<?=$page-1?>", tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
for($opage=1;$opage<=$total_pages;$opage++){
  ?>
          <li class="page-item"><a class="page-link" href="?page=<?=$opage?>"><?=$opage?></a></li>

  <?php
}
          ?>
          
          <li class="page-item <?=$nswitch?>">
            <a class="page-link" href="?page=<?=$page+1?>">Next</a>
          </li>
        </ul>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>


<!--
  Fatal error: Uncaught TypeError: mysqli_fetch_assoc(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\DontTrashIt\Don-t-Trash-IT-main\blogs\includes\function.php:6 Stack trace: #0 C:\xampp\htdocs\DontTrashIt\Don-t-Trash-IT-main\blo