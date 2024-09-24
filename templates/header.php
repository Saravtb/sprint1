<?php
  include_once("config/url.php");
  include_once("config/process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Serviços</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg custom-navbar">
    <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
      <img src="<?= $BASE_URL ?>img/hidratec.jpg" alt="Agenda">
    </a>
    <div class="navbar-nav me-auto"> <!-- Classe me-auto para empurrar os links para a esquerda -->
      <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
      <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Servico</a>
    </div>
    <div class="navbar-nav ml-auto"> <!-- ml-auto para empurrar o ícone para a direita -->
      <a class="nav-link" href="<?= $BASE_URL ?>telalogin.html">
        <i class="fas fa-user"></i>
      </a>
    </div>
  </nav>
</header>





