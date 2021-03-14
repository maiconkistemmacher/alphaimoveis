<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Imovel{

    /**
     * Idetificador único do imóvel
     * @var integer
     */
    public $id;

    /**
     * Endereço do imóvel
     * @var string
     */
    public $endereco;

    /**
     * Quantidade de banheiros
     * @var integer
     */
    public $banheiros;

    /**
     * Quantidade de quartos
     * @var integer
     */
    public $quartos;

    /**
     * Valor do imóvel
     * @var string
     */
    public $valor;

    /**
     * Tamanho do imóvel em metros2  
     * @var string
     */
    public $tamanho;

    /**
     * Descrição do imóvel
     * @var string
     */
    public $descricao;

    /**
     * Método responsável por cadastrar um novo imóvel no banco
     * @return string
     */
    public function cadastrar (){
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR O IMÓVEL PARA O BANCO
        $pDatabase = new Database ('imoveis');
        $this->id = $pDatabase->insert([
                                            'endereco'  => $this->endereco,
                                            'banheiros' => $this->banheiros,
                                            'quartos'   => $this->quartos,
                                            'valor'     => $this->valor,      
                                            'tamanho'   => $this->tamanho,
                                            'descricao' => $this->descricao,
                                            'data'      => $this->data
                                        ]);      echo "<pre>"; print_r($contato); echo "</pre>"; exit;                                                
        //RETORNA SUCESSO
        return true;
        }

    /**
     * Método responsável por obter os imóveis do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getContato($where = null, $order = null, $limit = null){
        return (new Database('imoveis'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
        }
}