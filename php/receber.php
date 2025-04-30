<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosterns</title>
    <link href="../CSS/CSS.Css" rel="stylesheet" type="text/css" />
    <link href="../IMG/Logo.png" rel="icon">
</head>
<body>
    <nav>
    <img src="../IMG/Logo.png" width="60" height="60" align="left">
        <h3><ul>
            <li><a href="../index.html">Início</a></li>
            <li><a href="../HTML/Sobre.html" >Sobre</a></li>
            <li><a href="../HTML/service.html">serviço</a></li>
            <li><a href="../HTML/Novidade.html">Novidades</a></li>
            <li><a href="../HTML/Contato.html" class="active">Contato</a></li> </h3>
    </nav>
    <main>
    <div class="containerS">
    <?php
    $nome = $_POST["n1"];
    $telefone = $_POST["t1"];
    $email = $_POST["e1"];
    echo("<h1>$nome suas informaçoes foram enviadas!</h1>");
    echo("<h2>Telefone informado: $telefone</h2>");
    echo("<h2>E-mail informado: $email</h2>");
    ?>      
    </div>
        
    </main>
    
    <footer class="footer2">
        <p>Rostens CNPJ:49.572.649/0001-85 </p> 
                
    </footer>
</body>
</html>