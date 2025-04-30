<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rostens</title>
    <link href="../CSS/CSS.Css" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav>
        <h3><ul>
            <li><a href="index.html" >Início</a></li>
            <li><a href="Sobre.html">Sobre</a></li>
            <li><a href="service.html" class="active">serviço</a></li>
            <li><a href="Novidade.html">Novidades</a></li>
            <li><a href="Contato.html">Contato</a></li> </h3>
    </nav>
    <main>
        <div class="containerNO">
<?php
 require_once("database.class.php");

 $con = new Database();
 $link = $con->getconexao();

 $smtm = $link->prepare("SELECT * FROM serviços");
 $smtm->execute();

 $data = $smtm->fetch(1);

 print_r($data);
?>
        </div>
        
        <center>
            <div class="containerC">
            <h2>Calcular Diarias</h2>

            <label for="num1">Valor:</label>
            <input type="number" id="num1"><br><br>
          
            <label for="num2">Diarias</label>
            <input type="number" id="num2"><br><br>
          
            <button onclick="multiplicar()">Multiplicar</button>
          
            <h3>Resultado: <span id="resultado">-</span></h3>
          
            <script>
              function multiplicar() {
                const num1 = parseFloat(document.getElementById("num1").value);
                const num2 = parseFloat(document.getElementById("num2").value);
                const resultado = num1 * num2;
          
                document.getElementById("resultado").textContent = resultado;
              }
            </script>        
            </div>
        </center>
        
    </main>
    
    <footer>
        <p>&copy;Rostens 123213444254 </p> 
                
    </footer>
    
</body>
</html>