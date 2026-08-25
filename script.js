let btn_surpresa = document.getElementById("surpresa");

btn_surpresa.addEventListener("click", () => {
btn_surpresa.innerHTML = "teste";
btn_surpresa.style.backgroundColor = "red";
});

let jumbo = document.querySelector("#jumbo");

btn_surpresa.addEventListener("click", () => {
    jumbo.src = "img/images.jpg";
   // jumbo.setAttribute("src", "img/images.jpg");   outra forma de fazer a mesma coisa
})
   // fazer aparecer e sumir elementos

let header = document.querySelector("header")
let controle = false;
btn_surpresa.addEventListener("click", () => {
    if (controle) {
        header.style.display = "none";
        controle = true;
    } else {
        header.style.display = "flsex";
        controle = alse;
    }
    header.style.display = "none";

})

let cards = document.querySelectorAll(".card");
for (const item of cards) {
    item.addEventListener("mouseover", () => {
        item.style.backgroundColor = "red";
    });
    item.addEventListener("mouseout", () => {
        item.style.backgroundColor = "white";
    })
    
    let
        .class-surpresa {
            display: none; /* Escondido por padrão */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }