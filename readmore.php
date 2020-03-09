<?php
include('./sadmin/samin/baglan.php');
if(isset($_GET['id'])){
     $postid=$_GET['id'];
}
$menusorgu = mysqli_query($baglan,"SELECT * FROM blog Where blog_id=$postid");
$blogcek = mysqli_fetch_assoc($menusorgu);

?>
<link rel="stylesheet" href="./css/readmore.css">
<div class="container">
     <div class="blogmain">
          <div class="bloghead">
               <div class="space">
                   <img src="./img/profileimg.jpg" alt="">
               <div class="blogtitle"><?php echo $blogcek['blog_tittle']; ?></div> 
               </div>
               
               <div class="blogtime"><?php echo $blogcek['blog_time']; ?></div>

          </div>
          <div class="texthere">
          <?php echo $blogcek['blog_text']; ?>
          </div>
</div>
</div>
