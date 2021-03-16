<?php
    session_start();

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Imovel;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: dashboard.imoveis.php?status=error');
    exit;
}

    $obImovel = Imovel::getImovel($_GET['id']);
    echo "<pre>"; print_r($obImovel); "</pre>"; exit;


//DEBUGGER
// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

// // //VALIDAÇÃO DO POST
// if(isset($_POST['endereco'],$_POST['quartos'],$_POST['banheiros'],$_POST['tamanho'],$_POST['valor'],$_POST['descricao'])){    

//      $obImovel = new Imovel;
//      $obImovel->endereco     = $_POST['endereco'];
//      $obImovel->quartos      = $_POST['quartos'];
//      $obImovel->banheiros    = $_POST['banheiros'];
//      $obImovel->tamanho      = $_POST['tamanho'];
//      $obImovel->valor        = $_POST['valor'];
//      $obImovel->descricao    = $_POST['descricao'];     

//       $obImovel->cadastrar();

//        header('location: dashboard.imoveis.php?status=sucess');
//        exit; 
// }

require __DIR__ . '/includes/header.dashboard.php';
require __DIR__ . '/includes/formulario.imoveis.php';
require __DIR__ . '/includes/footer.dashboard.php';





 

