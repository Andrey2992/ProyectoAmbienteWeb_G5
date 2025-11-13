<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // se encarga de pensar si se envio el formulario y si es asi
  $email = $_POST['email'];
  $remember = isset($_POST['remember']) ? true : false;


  if (empty($email)) { // se valida que el email no este vacio 
    $error = "El email es requerido";
  } else { //aqui va la logica de autenticacion verdadera
    $_SESSION['email'] = $email; //guarda la sesion en este caso con la base de datos
    $_SESSION['logged_in'] = true;

    header("Location: index.php"); // ya esto nos redirigiria a la inicio(index)
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA VACA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body class="pagina-login">
  <!-- es un header que es donde esta arriba de la pagina(tipo para selecionar el innicio etc) -->
  <header>
    <div class="brand">LA VACA</div>
    <div class="header-links">
     <a href="index.php">Inicio</a>
      <a href="categorias.php">Categorias</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="login.php">Login</a>
    </div>
  </header>

  <div class="login-container">
    <div class="login-box">
      <h1 class="login-title">LOGIN</h1>

      <?php if (isset($error)): ?>
        <div class="error-message" id="errorMsg"><?php echo $error; ?></div>
      <?php endif; ?>

      <div class="required-text">*CAMPOS REQUERIDOS</div>

      <!--este es el form en donde se pone el email,contra y el clic a SIGUIENTE -->
      <form method="POST" action="login.php" id="loginForm">
        <div class="mb-4">
          <label for="email" class="form-label">Email *</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-check"><!-- este es el check al darle recordarme -->
          <input class="form-check-input" type="checkbox" id="remember" name="remember">
          <label class="form-check-label" for="remember">
            RECORDARME
          </label>
        </div>

        <div class="login-links">
          <a href="#" onclick="mostrarMensaje('recuperar')">¿OLVIDASTE TU CONTRASEÑA?</a> <!-- este es el link de recuperar contraseña (el mostrar mensaje esta en el script de abajo) -->
        </div>

        <button type="submit" class="btn-login">SIGUIENTE</button>
      </form>

      <!-- esta parte ya es para CREAR CUENTA -->
      <div class="create-account">
        <h3>CREAR UNA CUENTA</h3>
        <p>DISFRUTA DE UNA EXPERIENCIA DE COMPRA MAS RAPIDA Y GESTIONA TU INFORMACIÓN PERSONAL EN TU CUENTA </p>
        <button class="btn-create" onclick="window.location.href='registro.php'">CREAR UNA CUENTA</button>
      </div>
    </div>
  </div>


  <!--footer o sea lo de abajo -->
  <footer>
    <p>2025 LA VACA</p>
  </footer>


  <!--AQUI ESTA EL JAVASCRIPT o JS -->
  <script src="js/login.js"></script>

</body>

</html>