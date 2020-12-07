<?php
require_once 'model/m_fazenda.php';

class FazendaController {

 public function listar() {
 $fazenda = new fazenda();
 $fazendas = $fazenda->listAll();

 $_REQUEST['fazendas'] = $fazendas;

 require_once 'view/v_fazenda.php';
 }
}

?>