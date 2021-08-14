<?php

try{
    $conexion=new PDO('mysql:host=localhost; dbname=dbblog', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // INICIO PAGINACION

        $tamanio_paginas=3; //registros por pagina

        if(isset($_GET["pagina"])){
            if($_GET["pagina"]==1){
                header("location:mostrar_blog.php");
            }else{
                $pagina=$_GET["pagina"];
            }
        }else{
            $pagina=1;
        }   

        $empezar_desde=($pagina-1)*$tamanio_paginas; //
        $sql_total="SELECT * FROM contenido";        
        $resultado=$conexion->prepare($sql_total);
        $resultado->execute(array());

        $num_filas=$resultado->rowCount();
        $total_paginas=ceil($num_filas/$tamanio_paginas); //redondea el resultado

        // CIERRE PARTE PAGINACION    

    }catch(Exception $err){
        die("Error: " . $err->getMessage());    
    }
    
    

?>