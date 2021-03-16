<?php
    $resultados = '';
    foreach($imoveis as $imovel){
        $resultados .= '<tr>
                            <td>'.$imovel->id.'</td>
                            <td>'.$imovel->endereco.'</td>                        
                            <td>'.$imovel->valor.'</td>
                            <td>'.$imovel->tamanho.'</td>
                            <td>'.date('d/m/Y à\s H:i:s',strtotime($imovel->data)).'</td>
                            <td>
                             <a href="editar.imoveis.php?id='.$imovel->id.'"><button type="button" class="badge badge-pill badge-warning">Editar</button></a>
                             <a href="excluir.imoveis.php?id='.$imovel->id.'"><button type="button" class="badge badge-pill badge-danger">Excluir</button></a></td>                        
                        </tr>';  
    }
?>

<nav class="nav nav-pills nav-fill"><a class="nav-item nav-link active">Imóveis Cadastrados</a><br></nav><br>

<div class="d-flex justify-content-end">
    <a href="cadastrar.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Cadastrar Imóvel</button></a></div><br>    
          
<div class="row">               
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Endereço</th>                
                    <th>Valor</th>
                    <th>Tamanho</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>                                                       
                </tr>
            </thead>
            <tbody><?=$resultados?>
                <!-- <tr>
                    <td>1</td>
                    <td>Residencial Cinco - Alphaville</td>
                    <td>R$3.4000,000</td>
                    <td>420 m2</td>                
                    <td> 
                        <div class="d-flex justify-content-end">                                              
                        <a href=""><button type="button" class="badge badge-pill badge-warning">Editar</button></a>
                        <a href=""><button type="button" class="badge badge-pill badge-warning">Excluir</button></a></div>
                    </td>
                </tr>                        -->
            </tbody>

        </table>
    </div>
</div>

