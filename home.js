function scroll() {
  const hero = document.querySelector(".hero");
  const blendB = document.querySelector(".blendB");
  const angleDown = document.querySelector(".fa-angles-down");


  document.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
      hero.classList.add("active");
      hero.classList.add("height");
      blendB.classList.add("height");
      hero.classList.add("initial");
      angleDown.classList.add("visibility");
 
    }

    let lastScroll = window.scrollY;

    window.addEventListener("scroll", () => {
      console.log("je scrolle");
      const header = document.querySelector("header");
      let currentScroll = window.scrollY;
      if (currentScroll < lastScroll && currentScroll === 0) {
        hero.classList.remove("active");
        hero.classList.remove("initial");
        hero.classList.remove("height");
        blendB.classList.remove("height");
        angleDown.classList.remove("visibility");

      }
      lastScroll = currentScroll;
    });

    main.addEventListener("mouseover", () => {
      console.log("je scrolle");
    });
  });
}
scroll();
