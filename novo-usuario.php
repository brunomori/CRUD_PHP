<?php 
include"index.php"
?>
<Form action="salvar-usuario.php" method="POST">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Data Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
    </div>
</Form>