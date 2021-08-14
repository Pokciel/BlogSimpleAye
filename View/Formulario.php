<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php $title='Nueva Entrada';?>
<title><?php echo $title; ?></title>
<style>

h2{
	text-align:center;
}

table{
	width:50%;
	margin:auto;
	background-color: #2E9EA3;
	border:solid 2px #4AE7F0;
	padding:5px;
	
}

td{
	padding:5px 0;
}


</style>
</head>

<?php 
//header
require_once ('../View/layout/header.php');
?>

<body>
<h2>Nueva entrada</h2>
<form action="../Controller/transacciones.php" method="post" enctype="multipart/form-data" name="form1">
<table >
<tr>
  <td>Título: 
    <label for="campo_titulo"></label></td>
  <td><input type="text" name="campo_titulo" id="campo_titulo"></td>  
  </tr>
  <tr><td>Comentarios: 
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
    </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">  
    <input type="submit" name="btn_enviar" class="btn btn-info text-white" id="btn_enviar" value="Enviar"></td></tr>
  <tr><td colspan="2" align="center"><a href="mostrar_blog.php" class="btn btn-info text-white">Página de visualización del blog</a></td></tr>
  
  </table>
</form>
<p>&nbsp;</p>

</body>
</html>