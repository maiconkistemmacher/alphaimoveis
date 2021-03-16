<nav class="nav nav-pills nav-justified"><a class="nav-item nav-link active">Cadastrar novo Imóvel</a><br></nav><br>
    
<div class="d-flex justify-content-end">
    <form method="post">
        <div class="form-row">
      
            <div class="form-group col-md-10">
                <label>Endereço do Imóvel</label>
                <input type="text" class="form-control" name="endereco">
            </div>
        </div>     
        <div class="form-row">
            <div class="form-group col-md-1">
                <label>Quartos</label>
                <select id="inputQuartos" class="form-control" name="quartos">
                    <option selected>3</option>        
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label>Banheiros</label>
                <select id="inputBanheiros" class="form-control" name="banheiros">        
                    <option selected>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>    
            <div class="form-group col-md-1">
                <label>Tamanho</label>
                <input type="text" class="form-control" name="tamanho">
            </div>
            <div class="form-group col-md-2">
                <label>Valor</label>                                
                <input type="text" class="form-control" name="valor">                
            </div>
            <div class="mb-1">
                <label for="formFileMultiple" class="form-label">Fotos do Imóvel</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div> 
        </div>
        <div class="form-row">
        <div class="form-group col-md-10">
                <label>Descrição do Imóvel</label>
                <textarea class="form-control" name="descricao" rows="5"></textarea>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <a href="dashboard.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Voltar</button></a>
            <button type="submit" class="badge badge-pill badge-warning">Cadastrar</button>
        </div>
    </form>
</div>
