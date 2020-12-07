<?php
$classe = $_GET['class'];
$metodo = $_GET['acao'];

$classe .= 'fazenda';

require_once 'controller/c_'.$classe.'.php';

$obj = new $classe();
$obj->$metodo();
?>