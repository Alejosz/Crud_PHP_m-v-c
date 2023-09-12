<?php
include('../model/carro.php');
$carro=new carro($_POST['id'], $_POST['placa'], $_POST['marca'], $_POST['color']);

if(isset($_POST['guardar'])){
    $carro->guardarCarro();
}
if(isset($_POST['actualizar'])){
    $carro->actualizarCarro();
}
if(isset($_POST['eliminar'])){
    $carro->eliminarCarro();
}

?>