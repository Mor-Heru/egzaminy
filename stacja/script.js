const paliwo=document.getElementById("paliwo");
const ilosc=document.getElementById("ilosc");
const output=document.getElementById("output");
function oblicz(){
    let cena=0;
    if(paliwo.value==1){
        cena=4*ilosc.value;
    }
    else{
        cena=3.5*ilosc.value;
    }
    output.innerText="koszt paliwa: "+cena+" zł";
}