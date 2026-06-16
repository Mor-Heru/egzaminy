const plik=document.getElementById("file");
const liczba=document.getElementById("number");
const papier=document.getElementById("papier");
const wynik=document.getElementById("wynik");

function koszyk(){
    let div=document.createElement("div");
    wynik.appendChild(div);
    let img=document.createElement("img");
    img.src=plik.value;
    div.appendChild(img);
    let p1=document.createElement("p");
    p1.innerText="Liczba kopii: "+liczba.value;
    let p2=document.createElement("p");
    if(papier.value=="blyszczacy"){
        p2.innerText="Cena: "+liczba.value*1.5;
    }
    else{
        p2.innerText="Cena: "+liczba.value*2;
    }
    div.appendChild(p1);
    div.appendChild(p2);
    div.style.marginBottom="10px";
    div.style.height="80px";
    img.style.height="80px"

}