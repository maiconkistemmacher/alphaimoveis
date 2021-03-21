<?php
    session_start();
    
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Imovel;

$imoveis = Imovel::getImoveis();


require __DIR__ . '/includes/header.dashboard.php';
require __DIR__ . '/includes/lista.imoveis.php';
require __DIR__ . '/includes/footer.dashboard.php';


