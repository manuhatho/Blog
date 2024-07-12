

function menu() {
  const blend = document.querySelector(".blend");
  const menu = document.querySelector(".menu");
  const menu2 = document.querySelector(".menu2");
  const nav2 = document.querySelector(".nav2");
  const body = document.querySelector("body");
  
 
  
  menu.addEventListener("click", () => {
      menu.classList.toggle("active");
      nav2.classList.toggle("active");
      blend.classList.toggle("active");
      body.classList.toggle("active");
      
      
    });
    menu2.addEventListener("click", () => {
      menu2.classList.toggle("active");
      menu.classList.toggle("active");
      nav2.classList.remove("active");
      blend.classList.remove("active");
      body.classList.remove("active");

        
    });
    
    blend.addEventListener("click", ()=>{
      menu2.classList.toggle("active");
      menu.classList.toggle("active");
      nav2.classList.remove("active");
      blend.classList.remove("active");
      body.classList.remove("active");
  
    })
    
}
menu()



const angleDown1 = document.getElementById("angleDown1");
const angleDown2 = document.getElementById("angleDown2");
const angleDown3 = document.getElementById("angleDown3");
const Nav2submenu1 = document.querySelector(".Nav2submenu1");
const Nav2submenu2= document.querySelector(".Nav2submenu2");
const Nav2submenu1Drop = document.querySelector(".Nav2submenu1-1");
const Nav2submenu2Drop = document.querySelector(".Nav2submenu1-2");


angleDown1.addEventListener("click", () => {
   angleDown1.classList.toggle("active");
   angleDown2.classList.toggle("active");
   angleDown3.classList.toggle("active");
   Nav2submenu1.classList.toggle("active");
   Nav2submenu2.classList.toggle("active");
   angleDown2.classList.remove("active2");
   angleDown3.classList.remove("active3");
    Nav2submenu1Drop.classList.remove("active2");
    Nav2submenu2Drop.classList.remove("active3");
   

   
  });

angleDown2.addEventListener("click", () => {
   angleDown2.classList.toggle("active2");
   Nav2submenu1Drop.classList.toggle("active2");
   


   
   
  });

angleDown3.addEventListener("click", () => {
   angleDown3.classList.toggle("active3");
   Nav2submenu2Drop.classList.toggle("active3");

   
   
  });


  blend.addEventListener("click", ()=>{
    menu2.classList.toggle("active");
    menu.classList.toggle("active");
    nav2.classList.remove("active");
    blend.classList.remove("active");
    body.classList.remove("active");

  })


 






