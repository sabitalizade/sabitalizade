<?php
include ("./sadmin/samin/baglan.php");
$menusorgu = mysqli_query($baglan,"select * from blog");

//$blog_id=$blogcek["blog_id"];
?>
    <div class="blogpg">
        <div class="blogs">


<?php while ($blogcek = mysqli_fetch_assoc($menusorgu)) {
   
 ?>
          <div class="bgcont">
            <div class="bg_tittle">
              <img src="./img/logobg.jpg"   alt=""> 
              <h2> <?php echo $blogcek['blog_tittle']; ?></h2>
            </div>
              <p><?php echo $blogcek['blog_text']; ?></p>
                <a href="?page=more&id=<?php echo $blogcek['blog_id'];?>">Read more</a>
            </div>

<?php }?>

        </div>
  </div>