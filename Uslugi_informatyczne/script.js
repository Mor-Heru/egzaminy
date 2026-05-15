let name=document.getElementById("name");
let surname=document.getElementById("surname");
let email=document.getElementById("email");
let text=document.getElementById("text");
let box=document.getElementById("box");
let output=document.getElementById("output");
function wyslij(){
    output.style.color="black";
    if(box.checked){
        let klient=name.value+" "+surname.value;
        output.style.color="black";
        output.innerHTML=klient.toUpperCase()+"<br/>"+"Treść Twojej sprawy: "+text.value+"<br/>Na podany e-mail zostanie wysłana oferta.";
    }
    else{
        output.innerText="Musisz zapoznać się z regulaminem";
        output.style.color="red";
    }

}