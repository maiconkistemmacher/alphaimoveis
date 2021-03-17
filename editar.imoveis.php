<?php
    session_start();

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar Imóvel');
define('BUTTON', 'Editar');

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

    // //VALIDAÇÃO DO POST
    if(isset($_POST['endereco'],$_POST['quartos'],$_POST['banheiros'],$_POST['tamanho'],$_POST['valor'],$_POST['ativo'],$_POST['descricao'])){    
        
        $obImovel->endereco     = $_POST['endereco'];
        $obImovel->quartos      = $_POST['quartos'];
        $obImovel->banheiros    = $_POST['banheiros'];
        $obImovel->tamanho      = $_POST['tamanho'];
        $obImovel->valor        = $_POST['valor'];
        $obImovel->ativo        = $_POST['ativo'];
        $obImovel->descricao    = $_POST['descricao'];        
        $obImovel->atualizar();

        header('location: dashboard.imoveis.php?status=sucess');
        exit; 
    }

require __DIR__ . '/includes/header.dashboard.php';
require __DIR__ . '/includes/formulario.imoveis.php';
require __DIR__ . '/includes/footer.dashboard.php';





 

