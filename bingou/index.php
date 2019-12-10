<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
    <title>Bingo</title>
  </head>
  <body>
    <div id="titulo"> <h1>BINGO ELETRONICO</h1> </div>
    <div id="tabela">
        <div id="tab" class="x1"></div>
        <div id="tab" class="x2"></div>
        <div id="tab" class="x3"></div>
        <div id="tab" class="x4"></div>
        <div id="tab" class="x5"></div>
        <div id="tab" class="x6"></div>
        <div id="tab" class="x7"></div>
        <div id="tab" class="x8"></div>
        <div id="tab" class="x9"></div>
        <div id="tab" class="x10"></div>
        <div id="tab" class="x11"></div>
        <div id="tab" class="x12"></div>
        <div id="tab" class="x13"></div>
        <div id="tab" class="x14"></div>
        <div id="tab" class="x15"></div>
        <div id="tab" class="x16"></div>
        <div id="tab" class="x17"></div>
        <div id="tab" class="x18"></div>
        <div id="tab" class="x19"></div>
        <div id="tab" class="x20"></div>
        <div id="tab" class="x21"></div>
        <div id="tab" class="x22"></div>
        <div id="tab" class="x23"></div>
        <div id="tab" class="x24"></div>
        <div id="tab" class="x25"></div>
    </div>
    <button type="button" class="botao" onclick="numAlet();sumir()"> Jogar </button>
    <p id="numeros"></p>
    <div id="numJoga"></div>
    <div id="blocoRegras"><h2>Como jogar:</h2><h4>  Para começar o jogo, basta clicar no botão jogar que gera um número aleatório e será comparado automaticamente aos números
    da cartela acima. Para vencer o jogo, o jogador terá 75 tentativas para preencher toda a cartela, caso contrário o jogador perde!</h4></div>
    <script src="./scripts/script.js"></script>
  </body>
</html>
