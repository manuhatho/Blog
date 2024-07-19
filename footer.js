function footerReveal(){
    const footer = document.querySelector("footer");

    document.addEventListener("scroll", ()=>{
        
        if(window.scrollY + window.innerHeight >= document.body.scrollHeight){
            footer.classList.add("reveal");

        }else{
            footer.classList.remove("reveal")
        }
    })
    // window.addEventListener('scroll', () => {
    //     const footer = document.querySelector('footer');
    //     const revealPoint = document.documentElement.scrollHeight - window.innerHeight - footer.offsetHeight;
        
    //     if (window.scrollY >= revealPoint) {
    //       footer.classList.add('reveal');
    //     } else {
    //       footer.classList.remove('reveal');
    //     }
    //   });
}
footerReveal()