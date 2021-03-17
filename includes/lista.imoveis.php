<?php
    $resultados = '';
    foreach($imoveis as $imovel){
        $resultados .= '<tr>
                            <td>'.$imovel->id.'</td>
                            <td>'.$imovel->endereco.'</td>                        
                            <td>'.($imovel->ativo == 's' ? 'Ativo' : 'Inativo').'</td>                            
                            <td>'.date('d/m/Y à\s H:i:s',strtotime($imovel->data)).'</td>
                            <td>
                             <a href="editar.imoveis.php?id='.$imovel->id.'"><button type="button" class="badge badge-pill badge-warning">Editar</button></a>
                             <a href="excluir.imoveis.php?id='.$imovel->id.'"><button type="button" class="badge badge-pill badge-danger">Excluir</button></a></td>                        
                        </tr>';  
    }
?>

<nav class="nav nav-pills nav-fill"><a class="nav-item nav-link active" style="color:white;">Imóveis Cadastrados</a><br></nav>    
          
<div class="row">               
    <div class="col-md-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Endereço</th>                
                    <th>Situação</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>                                                       
                </tr>
            </thead>
            <tbody><?=$resultados?>
                
            </tbody>

        </table>
    </div>
    
</div><div class="d-flex justify-content">
    <a href="cadastrar.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Cadastrar Imóvel</button></a></div><br>

