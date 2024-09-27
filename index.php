<?php
require_once 'exerc.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
      
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #8B0000;
        text-align: center;
    }

    p {
        line-height: 1.6;
        margin: 10px 0;
    }

    .destaque {
        font-weight: bold;
        color: #d2691e; 
        font-size: 1.2em;
    }
</style>

    </style>
</head>
<body>
<div class="container">
<h1>Vinhos</h1>
<p><?= $detalheVinho ?></p>
<p class="destaque"><?= $ofertaVinho ?></p>
</div>
</body>
</html>