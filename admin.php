<?php
  require "header.php";
 ?>

<main>
  <p class="textalign_center">bienvenue Adeline liste d'émargement du 10 octobre 2018</p>
  <div class="card-deck m-auto w-75">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title hyphens">Catégories</h2>
        <ul class="puce">
          <li>Les éssentiels</li>
          <li>Les langues</li>
          <li>Les numériques</li>
          <li>Les arts appliqués</li>
          <li>Les mains vertes</li>
        </ul>
        <div class="d-flex marginButton">
          <button type="button" class="btn btn-secondary margeIn colorBlack">Créer</button>
          <button type="button" class="btn btn-secondary margeIn colorBlack">Modifier</button>
          <button type="button" class="btn btn-secondary margeIn colorBlack">Exporter</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h2 class="card-title hyphens">Feuilles d'émargement</h2>
        <div class="marginButton d-flex">
          <button type="button" class="btn btn-secondary margeIn colorBlack">Créer</button>
          <button type="button" class="btn btn-secondary margeIn colorBlack">Modifier</button>
          <button type="button" class="btn btn-secondary margeIn colorBlack">Exporter</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Gestion utilisateurs</h2>
        <article class="">
          <h3>Enseignants</h3>
          <ul class="puce textDecoration">
            <li><a class="colorBlack" href="#">Ajouter</a></li>
            <li><a class="colorBlack" href="#">Modifier</a></li>
            <li><a class="colorBlack" href="#">Supprimer</a></li>
          </ul>
        </article>
        <article class="">
          <h3>Apprenants</h3>
          <ul class="puce colorBlack textDecoration">
            <li><a class="colorBlack" href="#">Ajouter</a></li>
            <li><a class="colorBlack" href="#">Modifier</a></li>
            <li><a class="colorBlack" href="#">Supprimer</a></li>
          </ul>
        </article>
      </div>
    </div>
  </div>
</main>

<?php
  require "footer.php";
 ?>
