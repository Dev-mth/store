<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>shop</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../images/favicon.png" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Fonts simbolos -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https: //fonts.googleapis.com/css2?family= Lato :ital@1 & display=swap" rel="stylesheet">
 <!-- git cart -->
<script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

  <!-- Tema principal do CSS (Bootstrap)-->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>

  <!--navegação-->
  <nav class="navbar navbar-expand-lg navbar-light bg-math">
    <!--Aninhamento (https://platesphp.com/templates/nesting/)-->
    <?php $this->insert('division/nav') ?>
  </nav>



  <!--<section class="py-5">-->
  <section>
<!--carregar todas as views (https://platesphp.com/getting-started/simple-example/)-->
   <?=$this->section('content')?>
  </section>


  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <!--Aninhamento-->
  <?php $this->insert('division/footer') ?>
  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="assets/js/scripts.js"></script>
</body>

</html>

