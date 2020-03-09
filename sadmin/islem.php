<?php 
ob_start();
session_start();
include("./samin/baglan.php");

if (isset($_POST["loggin"])) {
     $admin_kadi=$_POST['admin_kadi'];
     $admin_sifre=$_POST['admin_sifre'];
     $adminsorgu = mysqli_query($baglan,"SELECT * FROM `admin` ");
    while ( $admincek = mysqli_fetch_assoc($adminsorgu)) {
      if ($_POST["admin_kadi"]==$admincek["admin_kadi"] and $_POST["admin_sifre"]==$admincek["admin_sifre"]) {
      $_SESSION["login"]=true;
      $_SESSION["admin_kadi"]=$admin_kadi;
        $_SESSION["admin_sifre"]=$admin_sifre;
        header("location:index.php");
     }else{
          header("location:login.php?login=no");  
     }
    }   
}


if (isset($_POST["addblog"])) {
     $basliq=$_POST['blog_tittle'];
     $yazi=$_POST['blog_text'];
     $topic=$_POST['blog_owner'];
     $blogadd = mysqli_query($baglan,"INSERT INTO blog (blog_tittle,blog_text,blog_owner)
      VALUES ('$basliq', '$yazi', '$topic')");
     if ($blogadd) {
          header('location:add-blog.php?blogadd=yes');
     }else{
          header('location:add-blog.php?blogadd=no');
     }
}
if (isset($_POST["editblog"])) {
     $id=$_POST['blog_id'];
     $basliq=$_POST['blog_tittle'];
     $yazi=$_POST['blog_text'];
     $topic=$_POST['blog_owner'];
     $editblog = mysqli_query($baglan,"UPDATE `blog` SET 
     `blog_id`=[$id],
     `blog_tittle`=[$basliq],
     
     `blog_text`=[$yazi],
     `blog_owner`=[$topic] WHERE $id");

     if ($editblog) {          
          header('location:edit.php?blogedit=yes');
     }else{
          header('location:edit.php?blogedit=no');
     }
}



if (isset($_POST["delete"])) {
     $id=$_POST['delete_blog'];
   
     $deleteblog = mysqli_query($baglan,"DELETE FROM `blog` WHERE blog_id=$id");

     if ($deleteblog) {
          header('location:manage-blog.php?delete=yes');
     }else{
          header('location:manage-blog.php?delete=no');
     }
}
?>