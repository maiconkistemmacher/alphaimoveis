<nav class="nav nav-pills nav-justified"><a class="nav-item nav-link active" style="color:white;">Excluir Imóvel</a></nav><br>
    
<div class="d-flex justify-content-center">

    <form method="post">

        <div class="form-group">
            <p>Deseja realmente excluir o imóvel número <strong><?=$obImovel->id?></strong>?</p>
        </div>      
            
        <div class="d-flex justify-content">
            <a href="dashboard.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Cancelar</button></a>
            <button type="submit" name="excluir" class="badge badge-pill badge-danger"><?=BUTTON?></button>
        </div>
    </form>
</div>
