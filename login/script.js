document.addEventListener("DOMContentLoaded",function(){

    const form = document.querySelector("form");

    form.addEventListener("submit",function(e) {
        e.preventDefault();

        const email = document.querySelector('input[type= "email"]').value;
        const password= document.querySelector('input[type="password"]').value;

        if(email === "contato@email.com" && password === "123456"){
            window.location.href="bemvindo.html";
        }else{
            alert("E-mail ou senha incorretos!")
        }
    })

})