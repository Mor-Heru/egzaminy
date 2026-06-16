let name=document.getElementById("name");
let surname=document.getElementById("surname");
let email=document.getElementById("email");
let serv=document.getElementById("serv");
let output=document.getElementById("output");
function wyslij(){
    let klient=name.value+" "+surname.value;
    let usluga=serv.value
    output.innerHTML=klient+"<br/>"+email.value+"<br/>Usługa: "+usluga.toLowerCase();
}