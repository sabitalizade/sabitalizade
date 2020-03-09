 <?php
 define('guvenlik',true);
 include('./header.php');
 if (isset($_GET['page'])){
  $page=$_GET['page'];
  switch ($page) {
  case 'main':
   include('./blog.php');
    break;
 case 'about':
      include('./about.php');
       break;
       case 'contact':
      include('./contact.php');
       break;
       case 'more':
        include('./readmore.php');
         break;
  default:
    include('./blog.php');
    break;
  }
 }else{
   include('blog.php');
 }
 
  
   include('./footer.php');
   ?>