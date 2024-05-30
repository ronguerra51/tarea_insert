<?php

    require '../../modelos/Cliente.php';
    
    $_GET['cli_id'] = filter_var( base64_decode($_GET['cli_id']), FILTER_SANITIZE_NUMBER_INT);
    $cliente = new Cliente();

    $ClienteRegistrado = $Cliente->buscarPorId($_GET['cli_id']);
    var_dump($ClienteRegistrado);
?>

<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">Formulario de modificación de Clientes</h1>
<div class="row justify-content-center">
    <form action="../../controladores/clientes/modificar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        
        <input type="hidden" name="cli_id" id="cli_id" value="<?= $ClienteRegistrado['cli_id']?>">
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nombre">Nombre</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" required value="<?= $ClienteRegistrado['cli_nombre'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_apellido">APELLIDO</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required value="<?= $ClienteRegistrado['cli_apellido'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nit">NIT</label>
                <input type="number" name="cli_nit" id="cli_nit" class="form-control" required value="<?= $ClienteRegistrado['cli_nit'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_telefono">TELEFONO</label>
                <input type="number" name="cli_telefono" id="cli_telefono" class="form-control" required value="<?= $ClienteRegistrado['cli_telefono'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-warning w-100">Modificar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/clientes/buscar.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>