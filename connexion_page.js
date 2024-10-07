const registerLogin = document.querySelectorAll("#register_login");
const connexion = document.querySelector(".connexion ");
const register = document.querySelector(".register ");



registerLogin.forEach((link) => {
   
    link.addEventListener("click", ()=> {

        connexion.classList.toggle("show");
        register.classList.toggle("hide");
        
    })
    
    // link.classList.toggle()
})

const addFocus = document.querySelectorAll('.add-focus');
const leftBox = document.querySelector('.left-box');

// Changer le background quand l'input est focus
addFocus.forEach((input) =>{
    
    input.addEventListener('focus', () => {
        leftBox.classList.add("focus");
    });
    
    // Changer le background quand l'input perd le focus, mais seulement s'il n'est pas valide
    input.addEventListener('blur', () => {
        if (!input.checkValidity()) {
            leftBox.classList.remove("focus");
        }
    });
    
    // Maintenir le background si l'input est valide
    input.addEventListener('input', () => {
        if (input.checkValidity()) {
            leftBox.classList.add("focus");
        } else {
            leftBox.classList.remove("focus");
        }
    });
});




