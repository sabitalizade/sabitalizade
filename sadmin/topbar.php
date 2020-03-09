<?php

ob_start();
session_start();

if (!isset($_SESSION['admin_kadi'])) {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Title Page-->
    <title>SAaddmin</title>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<style>
     *{
          margin: 0;
          padding: 0;
     }
     .sidebar{
          width: 300px;          
          background: #131419;
          
     }
     .sidebar .title{
          display: flex;
          padding-left: 20px;
          box-sizing: border-box;
          width: 100%;
          height: 100px;
          color: white;
          align-items: center;
          background: rgba(62, 70, 110, 0.2);
     }
     .sidebar .title h3 i{
          margin-right: 10px;
     }
     .sidebar .main a{
          display: block;
          text-decoration: none;
          font-size: 20px;
          padding-left: 20px;
          box-sizing: border-box;
          border-bottom: 1px solid rgb(109, 93, 93);
          width: 100%;
          height: 55px;
          line-height: 55px;
          color: white;
          align-items: center;
          transition: 0.8s;
     }
     .sidebar .main a:hover{
          background: rgba(62, 70, 110, 0.1);
     }
     .sidebar .main a i{
          margin-right: 10px;
     }

    .main-content{
        width: 100%;
    }
     .topbar{
         margin-bottom: 40px;
          width: 100%;
          height:100px;
          background: #131419;              
     }
     .topbar .icon{
         display: flex;
          height: 60px;
          padding: 0 15px;         
          color: white;
         line-height: 100px;
          float: right;
     }
     .topbar .icon i{
          margin: 0 5px;
          font-size: 25px
     }
     .topbar .icon a{
         text-decoration: none;
         font-size: 30px;
         margin-left: 50px;
         color: green;
     }
        .bloggn{
            padding: 30px 60px;
            display: flex;
            flex-direction: column;
        }
        .bloggn label{
            padding: 55px 0 5px 5px;
        }
        .bloggn .btn{
            margin-top: 15px;
            width: 150px;
            background: rgb(0, 15, 83);
            color: white;
        }
        .blgbtn{
            margin: 40px;
            padding: 10px 20px;
            background:  rgb(0, 15, 83);
            color: white;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: 0.8s;
            box-sizing: box-border;
            text-decoration: none;
        }
        .blgbtn:hover{
          background:  rgba(0, 15, 83,0.8);
        }
        .blgbtn i{
            margin-right: 5px;
        }
        .addnewblog .bloggn input[type="text"]{
            width: 500px;
            height: 30px;
            border-radius: 5px;
            padding-left: 10px;
        }
        .addnewblog .bloggn input[type="file"]{
            background: rgb(0, 15, 83);
           color: white;
            border-radius: 5px;
        }
        .addnewblog .bloggn #topic{
            border-radius: 5px; 
            width: 500px;
            height: 50px;
        }
</style>
</head>

<body  style="box-sizing: border-box;">
     
<div class="container" style="display: flex">
 
   
    <div class="sidebar">
     <div class="title">
          <h3><i class="fas fa-user-cog"></i>Sabit Alizade <br>
           Admin Panel V 1.0
        </h3>
     </div>
     <div class="main">
     <a href="./index.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
          <a href="./manage-blog.php"><i class="fas fa-tasks"></i>Blog Manage</a>
          <a href="./manage-admin.php"><i class="fas fa-user-cog"></i>Admin Manage</a>
     </div>
    </div>
    <div class="main-content"  >
        <div class="topbar">

    <div class="icon">
     <h1><i class="fas fa-user-cog"></i>Admin<i class="fas fa-sort-down"></i></h1>
     <a href="cixis.php"><i class="fas fa-sign-out-alt"></i>Çıxış</a>
    </div>
  
   </div>