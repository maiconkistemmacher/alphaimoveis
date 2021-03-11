<?php

namespace App\Entity;

class Contato{

/**
 * Idetificador único da mensagem
 * @var integer
 */
public $id;

/**
 * Nome do contato
 * @var string
 */
public $nome;

/**
 * Sobrenome do contato
 * @var string
 */
public $sobrenome;

/**
 * Email do contato
 * @var string
 */
public $email;

/**
 * Assunto da mensagem
 * @var string
 */
public $assunto;

/**
 * Mensagem 
 * @var string
 */
public $mensagem;

/**
 * Data de envio da mensagem
 * @var string
 */
public $data;

/**
 * Método responsável por enviar uma nova mensagem para o banco
 * @return string
 */
public function enviar (){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //ENVIAR A MENSAGEM PARA O BANCO

    //ATRIBUIR O ID DA MENSAGEM NA INSTÂNCIA

    //RETORNAR SUCESSO
    







}






}