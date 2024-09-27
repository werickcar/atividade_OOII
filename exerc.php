<?php
require_once 'vinho.php';
 
$vinho = new Vinho("Pera manca ", "tinto", 300.00, 2005);
 
$detalheVinho = $vinho-> mostrarVinho();
$ofertaVinho = $vinho-> verificarPreco() ? "Oferta!" : "Preço normal!";
?>