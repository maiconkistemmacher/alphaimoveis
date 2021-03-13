<?php

namespace App\Db;

use \PDO;


    /**
    * Sessão responsável pelo Login da área restrita 
    */
                $servidor = "localhost";
                $usuario = "root";
                $senha = "root";
                $dbname = "database";
                
                //Cria a conexao
                $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
                
                if(!$conn){
                	die("Falha na conexao: " . mysqli_connect_error());
                }else{
                	//echo "Conexao realizada com sucesso";                    
                    }
                


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
    const PASS = 'root';


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
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
          $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
          $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }


    /**
     * Método responsável por executar queries dentro do banco de dados
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query,$params =[]){
        try{
         $statement = $this->connection->prepare($query);
         $statement->execute($params);
         return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }


    /**
     * Método responsável por inserir dados no banco
     * @param array $values [ field => value ]
     * @return integer ID inserido
     */
    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds  = array_pad([],count($fields),'?');
        
        //MONTA A QUERY
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
        
        //EXECUTA O INSERT
        $this->execute($query,array_values($values));

        //RETORNA O ID INSERIDO
        return $this->connection->lastInsertId();
        }

    /**
     * Método responsável por executar uma consulta no banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return PDOStatement 
     */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.$where : '';
        $where = strlen($order) ? 'ORDER BY '.$order : '';
        $where = strlen($limit) ? 'LIMIT '.$limit : '';

        //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;

        //EXECUTA A QUERY
        return $this->execute($query);



               
       
    } 
}