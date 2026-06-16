const liczba=document.getElementById("liczba");
const output=document.getElementById("output");
function oblicz(){
    let x=parseInt(liczba.value);
    let wynik="";
    let a=0;
    while(true){
        if(x%2==0){
            wynik="0"+wynik;
        }
        else{
            wynik="1"+wynik;
        }
        a++;
        if(a==4){
            a=0;
            wynik=" "+wynik;
        }
        x=x>>1;
        if(x==0){
            break;
        }
    }
    output.innerHTML=wynik+"<sub>(2)</sub>";
}