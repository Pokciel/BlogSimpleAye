<?php

    $autenticado=false;

    
    try{
        $base=new PDO("mysql:host=localhost; dbname=dbblog", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM perfilusuarios WHERE USUARIO=:login AND PASSWORD=:password";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();


        if($numero_registro!==0){
            $autenticado=true;
            if(isset($_POST["recordar"])){
                setCookie("nombre_usuario", $_POST["login"], time()+86400, "/");
            }            
            else{
                setCookie("nombre_usuario", $_POST["login"], time()+3600, "/");
            }

        }else{
            echo "Error. Usuario o Contraseña incorrectos";
        }



        // if($numero_registro!==0){
        //     $autenticado=true;
        //     if(isset($_POST["recordar"])){
        //         setCookie("nombre_usuario", $_POST["login"], time()+86400);
        //     }            
        // }else{
        //     echo "Error. Usuario o Contraseña incorrectos";
        // }


    }catch(Exception $err){
        die("Error: " . $err->getMessage());
    }


?>

<?php

    if($autenticado==false){
        if(!isset($_COOKIE["nombre_usuario"])){
            header("location:../view/form_login.php");
        }
    }
    
    if($autenticado==true){
        echo "Hola Usuario: " . $_POST["login"] . " !";
        header("location:../view/mostrar_blog.php");
   }else if(isset($_COOKIE["nombre_usuario"])){
        echo "Hola Usuario: " . htmlspecialchars($_COOKIE["nombre_usuario"]) . " !";
        header("location:../view/mostrar_blog.php");
    }
      

?>


?>    