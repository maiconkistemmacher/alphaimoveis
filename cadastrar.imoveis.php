<?php
    session_start();

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Imovel;

//DEBUGGER
// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

//VALIDAÇÃO DO POST
if(isset($_POST['endereco'],$_POST['banheiros'],$_POST['quartos'],$_POST['valor'],$_POST['tamanho'],$_POST['descricao'])){

    $pImovel = new Imovel;
    $pImovel->endereco     = $_POST['endereco'];
    $pImovel->banheiros    = $_POST['banheiros'];
    $pImovel->quartos      = $_POST['quartos'];
    $pImovel->valor        = $_POST['valor'];
    $pImovel->tamanho      = $_POST['tamanho'];
    $pImovel->descricao    = $_POST['descricao'];
    $pImovel->enviar();

    header('location: index.php?status=sucess');
    exit;
}

require __DIR__ . '/includes/header.dashboard.php';
require __DIR__ . '/includes/cadastrar.imoveis.php';
require __DIR__ . '/includes/footer.dashboard.php';

