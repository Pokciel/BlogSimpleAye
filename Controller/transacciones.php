<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// include("../Model/objeto_blog.php"); //o utilizar include_once();
include("../Model/manejo_objetos.php");

try{
    $conexion=new PDO('mysql:host=localhost; dbname=dbblog', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_FILES['imagen']['error']){
        switch($_FILES['imagen']['error']){
            case 1: // Error exceso de tamaño de archivo para
                echo "El tamaño del archivo excede lo permitido por el servidor";
                break;

            case 2: // Error de tamaño archivo marcado desde form submit
                echo "El tamaño del archivo excede 2 MB";
                break;

            case 3: // Error corrupcion de archivo
                echo "El envío de archivo se interrumpió de forma inesperada. Por favor intente nuevamente.";
                break;

            case 4: // Error fichero vacio. Sin contenido
                echo "No se ha seleccionado o enviado ningún archivo.";
                break;
        }
    }else{
        echo "Entrada subida correctamente.<br>";

        if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
            $destino_ruta="../imagenes/";

            move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);
            echo "El archivo " . $_FILES['imagen']['name'] . " Se ha copiado en el directorio de imagenes";
        }else{
            echo "El archivo no se ha podido copiar al directorio de imagenes.";
        }
    }

    $Manejo_Objetos=new Manejo_Objetos($conexion);
    $blog=new Objeto_Blog();
    $blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']), ENT_QUOTES));

    $blog->setFecha(Date("Y-m-d H:i:s"));

    $blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']), ENT_QUOTES));

    $blog->setImagen($_FILES["imagen"]["name"]);

    $Manejo_Objetos->setContenido($blog);

    echo "<br> Entrada de blog agregada con éxito. <br>";

}catch(Exception $err){
    die("Error: " . $err->getMessage());    
}

?>

</body>
</html>