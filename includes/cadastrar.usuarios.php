<nav class="nav nav-pills nav-justified"><a class="nav-item nav-link active">Cadastrar novo Usuário</a><br></nav><br>  
<div class="d-flex justify-content-end"><a href="dashboard.imoveis.php"><button type="button" class="badge badge-pill badge-warning">Voltar</button></a>
        <a href=""><button type="submit" class="badge badge-pill badge-warning">Cadastrar</button></a></div>

<div class="d-flex justify-content-center">
    <form method="post">
        <div class="form-row">
      
            <div class="form-group col-md-8">
                <label>Nome completo:</label>
                <input type="text" class="form-control" name="nome">
            </div>             
        
            <div class="form-group col-md-6">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
        
            <div class="form-group col-md-5">
                <label>Senha:</label>
                <input type="password" class="form-control" name="password">
            </div><br><br>

            <div class="form-group col-md-2"><br>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                    <input type="radio" name="ativo" checked> Ativo
                    </label>

                    <label class="btn btn-secondary">
                    <input type="radio" name="inativo"> Inativo
                    </label>                   
                </div><p>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                    <input type="radio" name="administrador" checked> Administrador
                    </label>

                    <label class="btn btn-secondary">
                    <input type="radio" name="cliente"> Cliente
                    </label>                   
                </div>   
            </div>                           
    </form><br>       
</div>
