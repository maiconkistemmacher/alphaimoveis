<?php

namespace App\Db;

use \PDO;

class Database{

    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = 'localhost';


    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'database';


    /**
     * Usuário do banco de dados
     * @var string
     */
    const USER = 'root';

     
    /**
     * Senha do banco de dados
     * @var string
     */
    const PASS = '';


     /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;


     /**
     * Instância de conexão com o banco de dados
     * @var PDO
     */
    private $connection; 


     /**
     * Define a tabela, instância e conexão
     * @param string $table
     */
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }


    /**
     * Método responsável por criar uma conexão com  o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

}