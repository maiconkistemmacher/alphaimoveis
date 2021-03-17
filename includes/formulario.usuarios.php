<nav class="nav nav-pills nav-justified"><a class="nav-item nav-link active">Cadastrar novo Usuário</a><br></nav><br> 

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
                </div>                                       
        </div>
        <div class="container">            
                <label>Situação:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="situacao_id" checked>
                        <label class="form-check-label">
                            Ativo
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="situacao_id">
                        <label class="form-check-label">
                            Inativo
                        </label>
                    </div>           
        </div> 
        <div class="container">
                <label>Nível de acesso:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="niveis_acesso_id" checked>
                        <label class="form-check-label">
                            Administrador
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="niveis_acesso_id">
                        <label class="form-check-label"">
                            Cliente
                        </label>
                    </div>
        </div><br>    
                    
        <div class="d-flex justify-content">
                <a href="dashboard.usuarios.php"><button type="button" class="badge badge-pill badge-warning">Voltar</button></a>
                <button type="submit" class="badge badge-pill badge-warning">Cadastrar</button> 
            </div>                                     
    </form>       
</div>
