<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c47cb3d39.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?> </title>
</head>

<body>

<!-- inicio menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <i class="fab fa-blogger fa-3x m-2"></i>
    <a class="navbar-brand" href="../View/mostrar_blog.php">Blog Aye</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../View/mostrar_blog.php">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
      </ul>
      <span class="navbar-text">
       <ul class="navbar-nav">
           
        <?php //enlaces ususarios

// <i class='fas fa-user-plus'></i>

        if(!isset($_COOKIE["nombre_usuario"])){            
            echo "<li class='nav-item'><a class='nav-link' href='../View/form_login.php'><i class='fas fa-sign-in-alt'> Iniciar Sesión </i></a></li>";
            echo "<li class='nav-item'><a class='nav-link' href='../View/Formulario_inserta_perfiles.php'><i class='fas fa-user-plus'> Registrarse </i></a></li>";
        } 

        if(isset($_COOKIE["nombre_usuario"])){            
            echo "<li class='nav-item'><a class='nav-link' href='../Controller/cerrar_sesion.php'><i class='fas fa-sign-out-alt'> Cerrar Sesión </i></a></li>";
        }

?>
        </ul>   
      </span>
    </div>
  </div>
</nav>
<!-- fin menu -->