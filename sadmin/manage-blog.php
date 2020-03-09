<?php
include('topbar.php');
?>
<style>
     .manage-table{
     width: 500px;
     margin: 40px 20px;
     display: flex;
     flex-direction: column;  
     align-items: center;  
     box-sizing: border-box; 
     }
     
</style>
<div style="box-sizing:border-box; min-height: calc(100vh - 140px); ">
<a href="add-blog.php" class="blgbtn"><i class="fas fa-plus"></i>Add Blog</a>
    <a href="manage-blog.php" class="blgbtn"><i class="far fa-edit"></i>Manage Blog</a><br>
<div class="manage-table" >

 <div style="margin: 40px 0 40px 40px; color:green;">
    <?php 
    if(isset($_GET['delete'])){
                        if ($_GET['delete']=="yes") {
                           echo "Blog silindi";
                        }else if($_GET['delete']=="no"){
                            echo "Ugursuz emeliyat";
                        }
                  } 
                  ?>
</div>

<style type="text/css">
.tg-wrap{width: 100%; }
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-hmp3{background-color:#D2E4FC;text-align:left;vertical-align:top}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-mb3i{background-color:#D2E4FC;text-align:right;vertical-align:top}
.tg .tg-lqy6{text-align:right;vertical-align:top; max-width:720px }
.tg .tg-0lax{text-align:left;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}</style>
<div class="tg-wrap"><table class="tg">
  <tr>
    <th class="tg-baqh" colspan="6">Blogs</th>
  </tr>
  <tr>
    <td class="tg-hmp3">No</td>
    <td class="tg-hmp3">Başlıq</td>
    <td class="tg-hmp3">Yazar</td>
    <td class="tg-hmp3">Blog Yazısı</td>
    <td class="tg-hmp3">Edit</td>
    <td class="tg-hmp3">Delete</td>
  </tr>
 
  <?php
include ("../sadmin/samin/baglan.php");
$menusorgu = mysqli_query($baglan,"SELECT * FROM blog");

 while ($blogcek = mysqli_fetch_assoc($menusorgu)) {
   
 ?>

<tr>
    <td class="tg-0lax"><?php echo $blogcek['blog_id']; ?></td>
    <td class="tg-0lax"><?php echo $blogcek['blog_tittle']; ?></td>
    <td class="tg-lqy6"><?php echo $blogcek['blog_owner']; ?></td>
    <td class="tg-lqy6"><?php echo $blogcek['blog_text']; ?></td>
    <form action="edit.php" method="post">
         <input type="hidden" name="edit_blog" value="<?php echo $blogcek['blog_id']; ?>">
    <td class="tg-lqy6"><button style="border:none; outline:0; cursor:pointer; " type="submit" name="edit"><i style="font-size: 20px; color:green;" class="far fa-edit"></i></button> </td>
   </form>
   <form action="islem.php" method="post">
         <input type="hidden" name="delete_blog" value="<?php echo $blogcek['blog_id']; ?>">
         <td class="tg-lqy6"><button style="border:none; outline:0; cursor:pointer; " type="submit" name="delete"><i style="font-size: 20px; color:red;" class="far fa-trash-alt"></i></button>  </tr>
   </form>



<?php }?>
 
 
</table></div>
</div>
 </div>
 </div>

</div>
</body>

</html>