<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <style>
      body{
          background: #131419;
          
      }
      *{
          margin: 0;
          padding: 0;
      }
      .formdiv{
        margin: 150px auto 0;
        width: 400px;
        background: #131419;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 40px;
        box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05), 
                    5px 5px 10px rgba(0, 0, 0, 0.5);
      }
      .formdiv .tittle{
          margin-top:50px ;
      }
      .formdiv .tittle h1{
        color: white;
        font-family: sans-serif;
      }
      .formdiv form{
        width: 100%;
        padding: 20px 30px;
      }
      .formdiv form .form-group  {
       position: relative;
        height: 25px;       
        margin: 20px 75px;    
      }
      .formdiv form .form-group i{
          position: absolute;
          top: 0;
          left: 0;
         margin-left: 10px;
          line-height: 35px;
      }
      .formdiv form .form-group input{
          height: 35px;
          width: 250px;
          border: none; 
          box-sizing: border-box;        
         padding-left: 35px;
         border-radius: 10px;
         outline: 0;
      }
      .formdiv form .submit{
          height: 35px;
          width: 250px;
          border-radius: 10px;
          margin: 20px 75px;  
          outline: 0; 
          border: none;
          background: rgb(0, 100, 0);
          color: white;
      }
</style>
</head>

<body>
  
                    <div class="formdiv">
                        <div class="tittle">
                            <h1>Admin Giriş</h1>
                        </div>
                    <div class="mes" style="color:red">
                <?php 
                if($_GET){
                        if ($_GET['login']=="no") {
                           echo "Istifadeci adi ve ya parol sehvdir";
                        }
                                           }
                ?>
                </div>
                            <form action="islem.php" method="POST">
                                
                                <div class="form-group"> 
                                                                       
                                    <i class="fas fa-user-alt"></i>
                                    <input class="admin_kadi" type="text" name="admin_kadi" placeholder="İstifadəçi">
                                </div>
                                <div class="form-group">
                                   <i class="fas fa-key"></i>
                                    <input class="sifre" type="password" name="admin_sifre" placeholder="Şifrə">
                                </div>
                            
                                <input class="submit" name="loggin" type="submit" value="Giriş">
                            
                            </form>
                           
                        </div>
                   

</body>

</html>
<!-- end document-->