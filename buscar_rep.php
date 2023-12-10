<?php
require_once("modelorepre.php");
$res= new clase_repre();
$registros = $res->_consultartodo($_POST['valor']);
echo "<thead class='bg-primary text-light text-center'>
         <tr>
             <th>ID</th>
             <th>nombre</th>
             <th>apellido</th>
             <th>Editar</th>
             <th>Eliminar</th>
         </tr>
      </thead>";

if ($registros) {
    $f = 1;
    while ($fila = $registros->fetch()) {
        echo "<tr>
        <td>".$f."</td>
                <td>".$fila['rep_id']."</td>
                <td>".$fila['rep_nombre']."</td>
                <td>".$fila['rep_apellido']."</td>
                <td><button class='btn btn-warning' onclick='editar_curso({$fila['rep_id']})'>Editar</button></td>
                <td><button class='btn btn-danger' onclick='eliminar_curso({$fila['rep_id']})'>Eliminar</button></td>
              </tr>";
        $f++;
    }
} else {
    echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
}
?>
