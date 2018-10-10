
  <?php 
    require "header.php"; 
  ?>
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
  <?php 
    require "footer.php"; 
  ?>  
