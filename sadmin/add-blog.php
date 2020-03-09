<?php
include('topbar.php');

?>
    <a href="add-blog.php" class="blgbtn"><i class="fas fa-plus"></i>Add Blog</a>
    <a href="manage-blog.php" class="blgbtn"><i class="far fa-edit"></i>Manage Blog</a><br>
    <div style="margin: 40px 0 0 40px; color:green;">
    <?php if($_GET){
                        if ($_GET['blogadd']=="yes") {
                           echo "Blog Elave Edildi";
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
    <form action="islem.php" class="bloggn" method="post">
        <label for="">Blog Bashligi</label>
        <input type="text" name="blog_tittle" placeholder="Bashliq Girin">
        <label for="">Yazar</label>
        <select id="topic" name="blog_owner">
            <option value="">Sabit Alizade</option>
            <option value="">Unknown</option>
        </select>
        <label for="">Blog shekili</label>
        <input type="file" name="basliq">
        <label for="">Blog Yazisi</label>
        <textarea name="blog_text" id="editor"></textarea>
        <input type="submit" name="addblog" value="Yukle" class="btn">
    </form>
     </div>
    </div>

</div>
</body>

</html>
<!-- end document-->
