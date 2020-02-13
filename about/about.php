<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>sabitalizade.com</title>
     <link rel="icon" href="../img/logobg.jpg"/>
     <link rel="apple-touch-icon" href="../img/logobg.jpg"/> 
     <link rel="stylesheet" href="about.css">
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
                  <a href="../home/index.php"><img src="../img/logobg.jpg" alt="Sabit Alizade"> <p>SabitAlizade</p> </a>
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
                        <li><a href="about.php">About<div class="animeline"></div></a></li>
                        <li><a href="../contact/contact.php">Contact<div class="animeline"></div></a></li>

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

    <div class="aboutmain">
      
      <div class="gif_foto"> <a href="../about/about.php"> <img src="../img/profileimg.jpg" alt="Sabit Alizade"></a> <div class="namebotton">Sabit Alizade</div></div>
      <div class="infome"> 
         <p>   Ben aslında Ekonomi okuyan ve bunun üstüne ise master yapsamda bu işin aslında benim için olmadığını anladım
      ve ilgimi çeken alanın yazılım olduğuna karar verdim ve bir çok dil öyrenme çapasından sonra frontend yazılımcısı ola bileceyime karar verdim.
      Gerçek ben 1 şubat 1996 yılında bir köyde dünyaya geldim ve uzun bir süre orada yaşadım (20 yıl kadarcık).
      Daha sonrasında 2013 yılında Naxçıvan Devlet Üniversitesinde Ekonomi bölümünde okudum. 
      bu Üniversitenin hiç bir fayda sağlamadığını görüp mastr okumaya karar verdim.
      Master okurken ben öyrendiklerimle yapacağım iş çok sevimsiz durduğu için sevdiyim bir iş yapmak istedimş
      Teknolojiyle çok fazla ilgilendiyim için bu yönde ilerlemek istedim ve yazılımcılık üniversite okumadan olurmu diye araştırdım.
      Bir videoda "olunurmu olunur ama çok çalışırsan" sözünü duyunca olurum ben dedim ve master boyunca öyrenmeye karar verdim.
      Öyrene bileceyim dilleri araştırdım ama ne programlamak istediyimden emin deyildim. C++, C örenmeye başladım ama sevmedim.
      Hep görsel bişeyler olsun istiyordum bir kod yazınca ortaya birşeyler çıksın.
       Araştırmalarım sonunda Amerikada yaşayan bir yazılımcının frontend yazılımcısıolduğunu söylemesinden ve bu hakda bilgi vermesinden sonra
       HTML ve CSS öyrenmeye başladım ve bir kaç ay içinde ilerleme kayd etdiyimi gördüm ve bunu çok sevdim. 
       Artık site yapa bilecek kadar öyrendikden sonra CSS-in beni yorduğunu fark etdim tabikide nasl daha rahat kod yazarı diye araştırdım.
       SASS(Scss) diye birşey olduğunu öyrendim ve 1 gün içinde SASS(Scss) öyrendim.
       Daha sonra işin zor kısmı JavaScript-e başladım zor oldu aylarımı aldı ama başardım.
        Şimdi her gün yeni bir şeyler öyrenmeye çalışıyorum. </p>
       <center><div>İnanırsan Yaparsın!!!</div></center> 

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