<?php

// ver codigo    

    setCookie("nombre_usuario", "", time()-1,"/");

    echo "Cookie destruida";

    header("location: ../View/mostrar_blog.php");

?>

