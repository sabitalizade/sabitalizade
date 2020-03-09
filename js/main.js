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
//document.querySelector('body').style.overflow='hidden';
   });
};
navslide();
  
   const backtotop=document.querySelector('#top-btn');
   window.addEventListener('scroll', scroling);
   function scroling(){
      if(window.pageYOffset>400){
         if(!backtotop.classList.contains('btn-enterance')){              
         backtotop.classList.add('btn-enterance');
         backtotop.classList.remove('btn-exit');
         backtotop.style.display="block";
      }
       
      }else{
         if(backtotop.classList.contains('btn-enterance')){
              backtotop.classList.add('btn-exit');
              backtotop.classList.remove('btn-enterance');
              setTimeout(function delaydisplay() {
                 backtotop.style.display="none"; 
              }, 250);
             }
        
      }
   };
   backtotop.addEventListener('click',()=>{
      window.scrollTo(0,0);
   })