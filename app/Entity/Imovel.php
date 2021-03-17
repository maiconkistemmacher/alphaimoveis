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
     * Tamanho do imóvel, m2  
     * @var string
     */
    public $tamanho;

    /**
     * Descrição do imóvel
     * @var string
     */
    public $descricao;

    /**
     * Referência as imagens do imóvel
     * @var string
     */
    public $imagens;

    /**
     * Define se o imóvel está ativo ou inativo
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de cadastro do imóvel
     * @var string
     */
    public $data;

    /**
     * Método responsável por cadastrar um novo imóvel no banco
     * @return boolean
     */
    public function cadastrar (){
        //DEFINIR A DATA
        $this->data = date('Y-m-d H:i:s');

        //INSERIR IMÓVEL NO BANCO
        $obDatabase = new Database ('imoveis');        

        $this->id = $obDatabase->insert([
                                            'endereco'  => $this->endereco,
                                            'quartos'   => $this->quartos,
                                            'banheiros' => $this->banheiros,
                                            'tamanho'   => $this->tamanho,
                                            'valor'     => $this->valor,
                                            'imagens'   => $this->imagens,
                                            'ativo'     => $this->ativo,
                                            'descricao' => $this->descricao,                                                                                                                       
                                            'data'      => $this->data                                            
                                        ]);                                                      
        //RETORNA SUCESSO
        return true;
        }

    /**
    * Método responsável por atualizar o imóvel no banco
    * @return boolean
    */
    public function atualizar(){
        return (new Database('imoveis'))->update('id = '.$this->id,[
                                            'endereco'  => $this->endereco,
                                            'quartos'   => $this->quartos,
                                            'banheiros' => $this->banheiros,
                                            'tamanho'   => $this->tamanho,
                                            'valor'     => $this->valor,
                                            'imagens'   => $this->imagens,
                                            'ativo'     => $this->ativo,
                                            'descricao' => $this->descricao,                                                                                                                       
                                            'data'      => $this->data
                                        ]);
        }

    /**
    * Método responsável por excluir o imóvel do banco
    * @return boolean
    */
    public function excluir(){
        return (new Database('imoveis'))->delete('id = '.$this->id);
        }

    /**
     * Método responsável por obter os imóveis do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getImoveis($where = null, $order = null, $limit = null){
        return (new Database('imoveis'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
        }


    /**
     * Método responsável por buscar um imóvel com base em seu ID
     * @param integer $id
     * @return Imovel
     */
    public static function getImovel($id){
        return (new Database('imoveis'))->select('id = '.$id)
                                        ->fetchObject(self::class);

    }
}
