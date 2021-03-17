<nav class="nav nav-pills nav-justified"><a class="nav-item nav-link active" style="color:white;"><?=TITLE?></a></nav><p>
    
<div class="d-flex justify-content-end">
    <form method="post">
        <div class="form-row">
      
            <div class="form-group col-md-10">
                <label>Endereço do Imóvel</label>
                <input type="text" class="form-control" name="endereco" value="<?=$obImovel->endereco?>">
            </div>
        </div>     
        <div class="form-row">
            <div class="form-group col-md-1">
                <label>Quartos</label>
                <select id="inputQuartos" class="form-control" name="quartos">
                    <option selected><?=$obImovel->quartos?></option>        
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label>Banheiros</label>
                <select id="inputBanheiros" class="form-control" name="banheiros" value="<?=$obImovel->banheiros?>">        
                    <option selected><?=$obImovel->banheiros?></option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>    
            <div class="form-group col-md-1">
                <label>Tamanho</label>
                <input type="text" class="form-control" name="tamanho" value="<?=$obImovel->tamanho?>">
            </div>
            <div class="form-group col-md-2">
                <label>Valor</label>                                
                <input type="text" class="form-control" name="valor" value="<?=$obImovel->valor?>">                
            </div>
            <div class="mb-1">
                <label for="formFileMultiple" class="form-label">Fotos do Imóvel</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div><br> 
        </div><p>
        <div class="form-row">
            <div class="container">            
                    <label>Situação:</label>&nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ativo" value="s" checked>
                            <label class="form-check-label"> Ativo
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ativo" value="n" <?=$obImovel->ativo == 'n' ? 'checked' : ''?>> Inativo
                        </label>
                        </div><br><p>          
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-10">
                <label>Descrição do Imóvel</label>
                <textarea class="form-control" name="descricao" rows="5"><?=$obImovel->descricao?></textarea>
            </div>
        </div>
        <div class="d-flex justify-content">
            <a href="dashboard.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Voltar</button></a>
            <button type="submit" class="badge badge-pill badge-warning"><?=BUTTON?></button>
        </div>
    </form>
</div>
