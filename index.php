<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Contato; 

//DEBUGGER
// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['assunto'],$_POST['mensagem'])){
    
    $pContato = new Contato;
    $pContato->nome         = $_POST['nome'];
    $pContato->sobrenome    = $_POST['sobrenome'];
    $pContato->email        = $_POST['email'];
    $pContato->assunto      = $_POST['assunto'];
    $pContato->mensagem     = $_POST['mensagem'];
    $pContato->enviar();
    

}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';

