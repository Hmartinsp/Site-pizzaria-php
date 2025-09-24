<?php
require '../vendor/autoload.php';

use Application\Hello;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bolinhas Pizza</title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/default.css" rel="stylesheet">
</head>
<body>

  <!-- Barra de navegação -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src= "bolinhaspizza.png" alt ="" width = "32" height= "32">
        Bolinhas pizza </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarMain"
      aria-controls="navbarMain" aria-expanded="false">
      <span class = "navbar-toggle-icon"></span>
    </button>
  </nav>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>