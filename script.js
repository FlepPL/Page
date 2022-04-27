
var znak = ["!", "?", "@", "#", "$", "%", "^", "&", "*", "(", ")"];
var znakemail = ["!", "?", "@", "#", "$", "%", "^", "&", "*", "(", ")"];

function datacheck(){
  var imie = document.forms["rejestr"].name.value;
  var nazwisko = document.forms["rejestr"].lastname.value;
  var data = document.forms["rejestr"].date.value;
  var email = document.forms["rejestr"].email.value;
  var haslo = document.forms["rejestr"].password.value;
  var zgoda = document.forms["rejestr"].agreement.value;
  let sprawdzImie = 0;
  let sprawdznazwisko = 0;

  for (let i = 0; i < imie.length; i++){
      for (let j = 0; j < znak.length; j++){
         if(imie.charAt(i) == znak[j]){
            sprawdzImie = 1;
         }
      }
  } 

  for (let a = 0; a < nazwisko.length; a++){
    for (let b = 0; b < znak.length; b++){
       if(nazwisko.charAt(a) == znak[b]){
          sprawdznazwisko = 1;
       }
    }
  }  

  if(sprawdzImie == 1){
    document.getElementById("name").style.color = "red";
  }else{
    document.getElementById("name").style.color = "green";
  }

  if(sprawdznazwisko == 1){
    document.getElementById("lastname").style.color = "red";
  }else{
    document.getElementById("lastname").style.color = "green";
  }
}
function openNav(){
  document.getElementById("myNav").style.height = "100%";
}
function closeNav(){
   document.getElementById("myNav").style.height = "0%";
}
function closerodo(){
   document.getElementById("rodo").style.display = "none";
}

