<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Page Enseignant, ADEP émargement</title>
  <meta name="description" content="La page des enseignants de l'application émargement de l'ADEP">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>
  <?php 
    require "header.php"; 
  ?>
  </header>
  <main class="flex main_teacherpage">
    <p>Bienvenue Teacher, liste d'émargement du mercredi 10 octobre 2018</p>
    <div class="dropdown">
      <button class="button_teacherpage">Cours 1</button>
      <ul class="puce dropdown_child">
        <li><a href="#">Elève 1</a></li>
        <li><a href="#">Elève 2</a></li>
        <li><a href="#">Elève 3</a></li>
        <li><a href="#">Elève 4</a></li>
        <li><a href="#">Elève 5</a></li>
      </ul>
    </div>
    <div class="dropdown">
      <button class="button_teacherpage">Cours 2</button>
      <ul class="puce dropdown_child">
        <li><a href="#">Elève 1</a></li>
        <li><a href="#">Elève 2</a></li>
        <li><a href="#">Elève 3</a></li>
        <li><a href="#">Elève 4</a></li>
        <li><a href="#">Elève 5</a></li>
      </ul>
    </div>
  </main>
  <footer>
  <?php 
    require "footer.php"; 
  ?>  
  </footer>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
