<?php
$fazendas = $_REQUEST['fazendas'];
?>;
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Implementando MVC</title>
 </head>
 <body>
 <table>
 <tr>
 <th>ID</th>
 <th>Cliente</th>
 </tr>
 <?php foreach ($fazendas as $fazenda): ?>
 <tr>
 <td><?php echo $fazenda->getId(); ?></td>
 <td><?php echo $fazenda->getNome(); ?></td>
 </tr>
 <?php endforeach; ?>
 </table>
 </body>
</html>