<?php

include ("topbar.php");


//$con=new PDO(dsn:" mysql:host:localhost;dbname:sabitalizade;")


?>
 <form action="islem.php" class="bloggn" method="POST">
        <label for="">Blog Bashligi </label>
        <input type="text" name="blog_tittle" value="hgkbh">
        <label for="">Yazar</label>
        <select id="topic" name="blog_owner">
            <option value="">jn</option>
            <option value="">Unknown</option>
        </select>
        <label for="">Blog shekili</label>
        <input type="file" name="basliq">
        <label for="">Blog Yazisi</label>
        <textarea name="blog_text" id="editor" >hhhhhhhhhhhhhhhhhhhhhhhhhhh</textarea>
    
        <input type="text" name="blog_id" value="97">
      <style>
          .cnc{
              display: inline-block;   padding:10px; margin-top: 15px;  width: 50px; color: #fff; background: red;              border-radius: 5px;              text-decoration: none;
          }
      </style>
<a href="manage-blog.php" class="cnc">Cancel</a>
        <input type="submit" name="editblog" value="Duzelt" class="btn">
    </form>