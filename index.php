<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Accueil, ADEP émargement</title>
  <meta name="description" content="La page d'accueil de l'application émargement de l'ADEP">
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
  <main class="main_homepage margin_auto">
    <form class="form_homepage margin_auto textalign_center" method="POST" action="">
      <p>
        <label for="pseudo">Votre identifiant :</label> 
        <input class="input_homepage" type="text" name="pseudo" id="pseudo" placeholder="Ex: adep@gmail.com" size="13"/>
        <br/>
        <label for="password">Votre mot de passe :</label>
        <input class="input_homepage" type="password" name="password" id="password" placeholder="********" size="11"/>
        <br/>
        <input type="submit" value="Se connecter">
      </p>
    </form>
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
