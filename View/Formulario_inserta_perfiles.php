<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Registrarse</title>
        
    </head>

    <?php 
//header
$title='Blog Aye';
require_once ('../View/layout/header.php');

?>
    
    <body>
    <div class="container">
        <form action="../Controller/insertar_registros_perfiles.php" method="get" class="mt-4">
            <h2>REGISTRO</h2>
            <h4>Bienvenido! Completa tus datos para formar parte del Blog</h4>
            <p class="mt-3">
              <label>Usuario: 
                <input type="text" name="usu">
              </label>
              <br>
              <label>Contraseña: 
                <input type="text" name="con">
              </label>
            </p>
            <p>Perfil: 
              <label for="perfil"></label>
              <select name="perfil" id="perfil" class="form-select" aria-label="Default select example">              
                <option value="1">administrador</option>
                <option value="2">usuario</option>
              </select>
            </p>
            <p>
              <input type="submit" class="btn btn-info text-white" name="enviando" value="Registro">
            </p>
        
        </form>
        </div>
    </body>
    
</html>