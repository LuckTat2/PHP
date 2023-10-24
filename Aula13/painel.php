
<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['email']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>

<title>Menu</title>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        #menu {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        #menu ul li {
            display: inline-block;
            margin-right: 10px;
        }
        
        #menu ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }
        
        #menu ul li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div id="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
</body>
</html>