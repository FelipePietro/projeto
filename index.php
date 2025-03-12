<?php

#Cabeçalho
include 'header.php';

// Verifica se o parâmetro 'link' está presente na URL
$page = isset($_GET['link']) ? $_GET['link'] : 'home';  // 'home' como valor padrão

switch ($page) {

    case 'home': include 'views/home.php'; break;
    case 'add': include 'views/add.php'; break;
    case 'remove': include 'views/remove.php'; break;
    default: include 'views/home.php'; 
    break;

}

#Rodapé
include 'footer.php';
