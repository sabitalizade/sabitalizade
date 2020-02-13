<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>sabitalizade.com</title>
     <link rel="icon" href="../img/logobg.jpg"/>
     <link rel="apple-touch-icon" href="../img/logobg.jpg"/> 
     <link rel="stylesheet" href="contact.css">
     <link rel="stylesheet" href="../fontawesome-free-5.11.2-web/css/all.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="../reset.css">
    <script src="../jquery.js"></script>
</head>
<body>
     <div class="continer">
          <div class="header">
  <div class="alltype">
            <div class="logo">
                  <a href="../index.php"><img src="../img/logobg.jpg" alt="Sabit Alizade"> <p>SabitAlizade</p> </a>
                </div>
                <div class="burger">
                  <div class="line1"></div>
                  <div class="line2"></div>
                  <div class="line3"></div>
                </div>
</div>
<div class="nexttype">
                <div class="search">
                  <form >
                    <input type="text" placeholder="Search..">
                    <button><i class="fa fa-search"></i></button>
                  </form>
                </div>
               
                <div class="menu">
                  <ul>
                        <li><a href="../home/index.php">Home<div class="animeline"></div></a></li>
                        <li><a href="../about/about.php">About<div class="animeline"></div></a></li>
                        <li><a href="contact.php">Contact<div class="animeline"></div></a></li>

                  </ul>
                </div>
                <div class="social">
              <ul>
                <li class="face"> <a href="https://facebook.com/sabitalizada/"><i class="fab fa-facebook-f"></i></a></li>
                <li class="insta"> <a href="https://instagram.com/sabitalizade/"><i class="fab fa-instagram"></i></a></li>
                <li class="linkedin"> <a href="https://linkedin.com/mwlite/me"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="stack"> <a href="https://stackoverflow.com/users/12539942/sabitalizade?tab=profile"><i class="fab fa-stack-overflow"></i></a></li>
                <li class="twitter"> <a href="https://twitter.com/sabit_alizade"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
</div>
          </div>                
    </div>
    <div class="infopart">
      <div class="sale">
        <p>Şəxsi saytların, blog sehifelerin hazırlanması, zövqə uyğun dizaynlar.</p>
        <p>Əlavə məlumat üçün Aşağıdakı Əlaqə vasitələrindən biri ilə əlaqə saxlaya bilərsiniz.</p>
        <p>Bizi seçmək sizə uğur və müvəffəqiyət gətirər!!</p>
      </div>
      <div class="contactinfo">
        <p><i class="fab .fa-phone"></i>(+994)50-687-67-38</p>
        <p>sabitalizade@mail.ru</p>
      </div>
    </div>
    <div class="footer">
        <div class="copyright">Copyrigth © 2019-2020 Sabit Alizade</div>
      </div>
    <script>
    const navslide= ()=>{
     const burger = document.querySelector('.burger');
     const nav= document.querySelector('.nexttype'),
     bodyh=document.querySelector('body');

     burger.addEventListener('click',()=>{
nav.classList.toggle('nav-active');
burger.classList.toggle('toggle');
if(nav.classList.contains('nav-active')){
   bodyh.style.overflow='hidden';
}else{
   bodyh.style.overflow='auto';
 
}
   });
};
navslide();
    </script>
</body>
</html>