function hoverGallery(){

   
    const buttons = document.querySelectorAll("#btn");
 
   
    buttons.forEach((button,index)=>{
       button.addEventListener("mouseover",()=>{
            const galleryC = document.querySelectorAll(".galleryContent");
            const indexGallery = galleryC[index];
            indexGallery.classList.add("boxShadow");
        
       })
       button.addEventListener("mouseout",()=>{
        const galleryC = document.querySelectorAll(".galleryContent");
        const indexGallery = galleryC[index];
           
            indexGallery.classList.remove("boxShadow");
        
       })


        
       
        
    })
}
hoverGallery()