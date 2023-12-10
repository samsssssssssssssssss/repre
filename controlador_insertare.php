<link href="../../../Libs/sweetalert2-8.2.5/sweetalert.css" rel="stylesheet">
<script src="../../../Libs/jquery.min.js"></script>
<script src="../../../Libs/sweetalert2-8.2.5/sweetalert.min.js"></script>

<?php
require_once('modelorepre.php');

$obj = new clase_repre();
$result = $obj->_insertar($_POST['rep_nombre'], $_POST['rep_apellido'] );

if ($result) {
    echo '<script>jQuery(function(){swal({
        title:"Guardar representante", text:"Registro Guardado", type:"success", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/representante/crud_rep.php";});});</script>';
} else {
    echo '<script>jQuery(function(){swal({
        title:"Guardar representante", text:"Error al Guardar", type:"danger", confirmButtonText:"Aceptar"
    }, function(){location.href="http://localhost/school32/formularios/representante/crud_rep.php";});});</script>';
}
?>



