
var cont = 0
tabNum = document.getElementById("numJoga")
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var cartela = JSON.parse(this.responseText)
    for (var i = 2; i < 27; i++) {
      document.getElementsByTagName('div')[i].innerHTML = cartela[i-2]
    }
  }
}
xhttp.open("GET", "./php/cartela.php", true);
xhttp.send();
var xhttpNUM = new XMLHttpRequest();
xhttpNUM.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    numJog = JSON.parse(this.responseText)
  }
}

xhttpNUM.open("GET", "./php/gerador.php", true);
xhttpNUM.send();
function teste() {
  for (var i = 2; i < 27; i++) {
    console.log(document.getElementsByTagName('div')[i].innerHTML+" "+numJog[cont]);
    if (document.getElementsByTagName('div')[i].innerHTML==numJog[cont]) {
      document.getElementsByTagName('div')[i].innerHTML = "X"
      document.getElementsByTagName('div')[i].style.color = "white"
    }
  }
}
function check(){
  contX = 0
  for (var i = 2; i < 27; i++) {
    if (document.getElementsByTagName('div')[i].innerHTML=="X") {
      contX++
    }
  }
}

function numAlet() {
  if (cont<75) {
    tabNum.innerHTML = "<div>"+numJog[cont]+"</div>"+tabNum.innerHTML
    teste()
    cont++
    document.getElementById("numeros").innerHTML = cont+"/75"
    check()
    if (contX == 25) {
      window.alert(" PARABÉNS, VOCÊ GANHOU! ")
      window.location.reload()
    }
  }
  else {
    window.alert( " VOCÊ PERDEU! " )
    window.location.reload()
  }

}

function sumir(){
  some = 0
  some++
  if(some == 1){
    document.getElementById("blocoRegras").innerHTML = ""
  }
}
