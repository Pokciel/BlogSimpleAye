<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title='Formulario';?>
    <title><?php echo $title; ?></title>    
</head>
<body>
    <?php 
    //header
       require_once ('../View/layout/header.php');
    //    require_once('../View/layout/header.php');
    
    ?>

<div class="container">

<h1 class="mt-3">INTRODUCE TUS DATOS</h1>

<form action="../Controller/login.php" method="post">

<table>
    <tr><td class="izq">
        Login: </td><td class="der"> <input type="text" name="login"></td></tr>
        <tr><td class="izq">Password: </td><td class="der"> <input type="password" name="password"></td></tr>
        <tr><td class="izq">Recordar en este equipo:</td><td class="der"><input type="checkbox" name="recordar" id="recordar"></td></tr>
        <tr><td colspan="2"> <input type="submit" class="btn btn-info text-white" name="enviar" value="LOGIN"></td></tr>
    
</table>
</form>
</div>
</body>
</html>