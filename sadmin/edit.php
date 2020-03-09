<?php

include ("topbar.php");
include ("./samin/baglan.php");


// if (isset($_POST['edit'])) {
//     $id=$_POST['edit_blog'];

//  }
$menusorgu = mysqli_query($baglan,"SELECT * FROM blog WHERE  blog_id= '".$_POST['edit_blog']."' " );
$blogcek = mysqli_fetch_assoc($menusorgu);

?>
<div style="margin: 40px 0 0 40px; color:green;">
    <?php if($_GET){
                        if ($_GET['blogedit']=="yes") {
                           echo "Blog Duzeldildi Edildi";
                        }else{
                            echo "Ugursuz emeliyat";
                        }
                                           } ?>
</div>
    <style>

        .btn{
            border:none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }
        .btn:hover{
            opacity: 0.8;
        }
    </style>
    <div class="addnewblog">
         
    <form action="islem.php" class="bloggn" method="POST">
        <label for="">Blog Bashligi </label>
        <input type="text" name="blog_tittle" value="<?php echo $blogcek['blog_tittle']; ?>">
        <label for="">Yazar</label>
        <select id="topic" name="blog_owner">
            <option value=""><?php echo $blogcek['blog_owner'];?></option>
            <option value="">Unknown</option>
        </select>
        <label for="">Blog shekili</label>
        <input type="file" name="basliq">
        <label for="">Blog Yazisi</label>
        <textarea name="blog_text" id="editor" ><?php echo $blogcek['blog_text'];?></textarea>
    
        <input type="text" name="blog_id" value="<?php echo $_POST['edit_blog']; ?>">
      <style>
          .cnc{
              display: inline-block;   padding:10px; margin-top: 15px;  width: 50px; color: #fff; background: red;              border-radius: 5px;              text-decoration: none;
          }
      </style>
<a href="manage-blog.php" class="cnc">Cancel</a>
        <input type="submit" name="editblog" value="Duzelt" class="btn">
    </form>
    
     </div>
    </div>

</div>
</body>

</html>