<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title='Blog Aye';?>
    <title><?php echo $title; ?></title>
</head>
<body>

<?php

require_once ('../View/layout/header.php');

?>
    
<div class="container">
<h1>Blog</h1><br>

<?php
//saludo usuarios
if(isset($_COOKIE["nombre_usuario"])){
    echo "<h2>Hola Usuario: " . $_COOKIE["nombre_usuario"] . " ! Disfrutra del Blog</h2>";    
}else{
    echo "<h2>Hola!, Disfruta del Blog</h2>";
} 

?>

<hr>
    
<?php

include("../Model/manejo_objetos.php");
include("../Model/paginacion.php");


try{
    $conexion=new PDO('mysql:host=localhost; dbname=dbblog', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Manejo_Objetos=new Manejo_Objetos($conexion);

    $tabla_blog=$Manejo_Objetos->getContenidoPorFecha();

    if(empty($tabla_blog)){
        echo "Aún no hay entradas de blog.";
    }else{
        foreach($tabla_blog as $valor){
            echo "<h3>" . $valor->getTitulo() . "</h3>";
            echo "<h4>" . $valor->getFecha() . "</h4>";
            echo "<div style='width: 400px;'>";
            echo $valor->getComentario() . "</div>";
            if($valor->getImagen()!=""){
                echo "<img src='../imagenes/";
                echo $valor->getImagen() . "' width='300px' height='200px'/>";
            }

            echo "<hr>";
        }
    }

}catch(Exception $err){
    die("Error: " . $err->getMessage());    
}


?>

<br>
<nav aria-label="Page navigation example">
  <ul class="pagination">

<?php
//------------paginacion----------------

$ant = $pagina - 1;
$sig = $pagina + 1;

if($pagina > 1){ //Colocar anterior si la página es mayor a 1
    echo "<li class='page-item'><a class='page-link' href='?pagina=$ant'> Anterior </a></li>";
}


for($i=1; $i<=$total_paginas; $i++){
    echo "<li class='page-item'><a class='page-link' href='?pagina=" . $i . "'>" . $i . " </a></li>"; //Mandamos el valor de i a la misma página
}



 if ($pagina < $total_paginas) { //Colocar siguiente siempre y cuando la página sea menor a l número total de páginas
    echo "<li class='page-item'><a class='page-link' href='?pagina=$sig'> Siguiente </a></li>";
 }

        
?>
    </ul>
</nav>
<br>

<?php

//enlaces ususarios


if(isset($_COOKIE["nombre_usuario"])){
        echo "<button type='button' class='btn btn-info text-white'><a href='Formulario.php'>Agregar nueva entrada al blog</a></button><br>";        
    }

        // if(!isset($_COOKIE["nombre_usuario"])){
        //     echo "<a href='../View/Formulario_inserta_perfiles.php'>Registrarse</a><br>";
        //     echo "<a href='../View/form_login.html'>Iniciar Sesión</a><br>";
        // }

        // if(isset($_COOKIE["nombre_usuario"])){
        //     echo "<a href='Formulario.php'>Agregar nueva entrada al blog</a><br>";
        //     echo "<a href='../Controller/cerrar_sesion.php'>Cerrar Sesión</a><br>";
        // }
    

?>

<br>
</div>
<br>

<?php
//footer
require_once('../View/layout/footer.php');

?>

</body>
</html>