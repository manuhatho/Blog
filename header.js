function scroll() {
  const header = document.querySelector("header");
  let previewPosition = 0;
  document.addEventListener("scroll", () => {
    console.log("scroll");

    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > previewPosition) {
      header.style.top = "-100px";

    } else {
      header.style.top = "0";
      
    }

    previewPosition = scrollTop;
  });
}
scroll();

function menu() {
  const blend = document.querySelector(".blend");
  const menu = document.querySelector(".menu");
  const menu2 = document.querySelector(".menu2");
  const nav2 = document.querySelector(".nav2");
  const body = document.querySelector("body");
  const header = document.querySelector("header");

  menu.addEventListener("click", () => {
    menu.classList.toggle("active");
    nav2.classList.toggle("active");
    blend.classList.toggle("active");
    body.classList.toggle("active");
    header.classList.add("active");

    //   const menuBtn = document.querySelector(".menu");
    // menuBtn.addEventListener("click", () => {
    //     document.removeEventListener("scroll", scroll);
    // });
  });
  menu2.addEventListener("click", () => {
    menu2.classList.toggle("active");
    menu.classList.toggle("active");
    nav2.classList.remove("active");
    blend.classList.remove("active");
    body.classList.remove("active");
    header.classList.remove("active");
  });

  blend.addEventListener("click", () => {
    menu2.classList.toggle("active");
    menu.classList.toggle("active");
    nav2.classList.remove("active");
    blend.classList.remove("active");
    body.classList.remove("active");
    header.classList.remove("active");
  });
}
menu();

function openList() {


    const Nav2submenu1 = document.querySelectorAll(".Nav2submenu1");
    console.log(Nav2submenu1);
 
    // const Nav2submenu1Drop = document.querySelector(".Nav2submenu1-1");
    // const Nav2submenu2Drop = document.querySelector(".Nav2submenu1-2");
    // const Nav2submenu3Drop = document.querySelector(".Nav2submenu1-3");
    const angleDown1 = document.getElementById("angleDown1");
    // const angleDown2 = document.getElementById("angleDown2");
    // const angleDown3 = document.getElementById("angleDown3");
    // const angleDown4 = document.getElementById("angleDown4");

    angleDown1.addEventListener("click", () => {
    
      // angleDown2.classList.toggle("visible");
      // angleDown3.classList.toggle("visible");
      // angleDown4.classList.toggle("visible");
    
   
      Nav2submenu1.forEach((submenu) => {

        console.log(submenu);
        

        if (submenu.classList.contains("expanded")) {
          submenu.style.height = `${submenu.scrollHeight}px`;
          setTimeout(() => {
            submenu.style.height = "0";
          }, 1);
          submenu.classList.remove("expanded");
        } else {
          submenu.style.height = `${submenu.scrollHeight}px`;
          submenu.classList.add("expanded");
          setTimeout(() => {
            submenu.style.height = "auto";
          }, 300);
        }

      });
    
    });
}

openList();

function closeAngle1() {

  const Nav2submenu1 = document.querySelector(".Nav2submenu1");
  const Nav2submenu2 = document.querySelector(".Nav2submenu2");
  const Nav2submenu1Drop = document.querySelector(".Nav2submenu1-1");
  const Nav2submenu2Drop = document.querySelector(".Nav2submenu1-2");
  const Nav2submenu3Drop = document.querySelector(".Nav2submenu1-3");
  const angleDown2 = document.getElementById("angleDown2");
  const angleDown3 = document.getElementById("angleDown3");
  const angleDown4 = document.getElementById("angleDown4");

    if ( angleDown2.classList.contains("visible") && angleDown3.classList.contains("visible") ){
      angleDown2.classList.remove("rotate");
      angleDown3.classList.remove("rotate");
      angleDown4.classList.remove("rotate");
     
    
    }

    if (Nav2submenu1Drop.classList.contains("expanded") || Nav2submenu2Drop.classList.contains("expanded") || Nav2submenu3Drop.classList.contains("expanded")){
      
     
      Nav2submenu1Drop.style.height = `${Nav2submenu1Drop.scrollHeight}px`;
      setTimeout(() => {
        Nav2submenu1Drop.style.height = "0";
        
      }, 1);
      Nav2submenu1Drop.classList.remove("expanded")
    
   
      Nav2submenu2Drop.style.height = `${Nav2submenu2Drop.scrollHeight}px`;
      setTimeout(() => {
        Nav2submenu2Drop.style.height = "0";
      }, 1);
      Nav2submenu2Drop.classList.remove("expanded");


      Nav2submenu3Drop.style.height = `${Nav2submenu3Drop.scrollHeight}px`;
      setTimeout(() => {
        Nav2submenu3Drop.style.height = "0";
      }, 1);
      Nav2submenu3Drop.classList.remove("expanded");
      
     
    } 
   
  
}

closeAngle1();

document.getElementById("angleDown1").addEventListener("click", closeAngle1)


