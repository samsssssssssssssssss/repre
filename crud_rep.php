<?php
require ("../../conexion/conexion.php");
$Consulta = "SELECT * FROM `snv_representantes`";
$Resuldo = $pdo->query($Consulta);
if (!$Resuldo){
    die ("Error al consultar datos");
}
$pdo = null;
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NUEVO REPRESENTANTE</title>
        <link href="../../Libs/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="../../Libs/bootstrap-5.3.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="../../Libs/jquery.min.js"></script>
        <script src="../../Libs/ajax.js"></script>
        
    </head>
    <body onload="buscar_rep('');">
        <div class="alert alert-light">
            <h2 class="text-primary">Gestion de representantes</h2>
            <button type="button" class="btn btn-success" onclick="location.href = 'vista_rep.html'">Nueva</button>
            <button type="button" class="btn btn-success" onclick="reporteprovincias();">Reporte</button>
        </div>
        <div class="container alert alert-info col-5">
            <h3>Buscar</h3>
            <div class="row">
                <label class="col-2">REPRESENTANTE</label>
                <input type="text" class="form-control col-4" id="txt_buscar" name="txt_buscar" onkeyup="buscar_rep(this.value);">
                
            </div>
        </div>
        <table id="tabla" name="tabla" class="table table-bordered">
            <thead class='bg-primary text-light text-center'>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($item=$Resuldo->fetch(PDO::FETCH_ASSOC)):?>
                <tr>
                    <td><?=$item["rep_id"] ?></td>
                    <td><?=$item["rep_nombre"] ?></td>
                    <td><?=$item["rep_apellido"] ?></td>
                  
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
    </body>
</html>