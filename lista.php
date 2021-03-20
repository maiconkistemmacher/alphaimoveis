<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Imovel;

$imoveis = Imovel::getImoveis();

require __DIR__.'/includes/header.php';
require __DIR__.'/includes/lista.php';
require __DIR__.'/includes/footer.php';

