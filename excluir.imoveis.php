<?php
    session_start();

require __DIR__.'/vendor/autoload.php';

define('BUTTON', 'Excluir');



use \App\Entity\Imovel;

    //VALIDAÇÃO DO ID
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: dashboard.imoveis.php?status=error');
        exit;
    }

    //CONSULTA O IMÓVEL
        $obImovel = Imovel::getImovel($_GET['id']);

    //VALIDAÇÃO DO IMÓVEL
    if(!$obImovel instanceof Imovel){
        header('location: dashboard.imoveis.php?status=error');
        exit;
    }

    // echo "<pre>"; print_r($obImovel); echo "</pre>"; exit;

    // //VALIDAÇÃO DO POST
    if(isset($_POST['excluir'])){  
            
        $obImovel->excluir();

        header('location: dashboard.imoveis.php?status=sucess');
        exit; 
    }

require __DIR__ . '/includes/header.dashboard.php';
require __DIR__ . '/includes/excluir.imoveis.php';
require __DIR__ . '/includes/footer.dashboard.php';





 

