function footerReveal(){
    const footer = document.querySelector("footer");

    document.addEventListener("scroll", ()=>{
        
        if(window.scrollY + window.innerHeight >= document.body.scrollHeight){
            footer.classList.add("reveal");

        }else{
            footer.classList.remove("reveal")
        }
    })
}
footerReveal()