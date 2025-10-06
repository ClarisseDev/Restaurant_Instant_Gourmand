<style>
body{
  margin: 100px;
  padding: 100px;
}
.btn, .input{
  margin: 5px !important;
}
</style>

<?php 
$title = "Nous contacter";
$nav = "contact";
require_once "config.php"; 
require_once "functions.php"; 
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N')-1);
$creneaux = CRENEAUX[$jour];  // Au premier tour, date('N') = 1 donc il faut soustraire 1 pour commencer à 0
$ouvert = in_creneau($heure, $creneaux);
//$color = $ouvert ? 'green' : 'red';
require "header.php"; ?>



<div class="row">
    <div class="col-md-8 container">
        <h2>Nous contacter</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi architecto, iste possimus hic aut magni nam obcaecati quas nulla voluptates suscipit. Quae dolorem est neque omnis delectus praesentium voluptates? Ad ipsa corporis dolores quam maxime mollitia, alias assumenda, voluptatum ex nihil rem eius dicta fuga dolorem ratione libero sequi vero recusandae harum possimus sint inventore labore. Numquam libero, minima fugit quasi accusamus ratione eveniet consequuntur quas quod ut sit ipsa provident voluptatibus dolores iste placeat, esse commodi! Doloremque sequi aperiam qui at corporis odio iste ullam impedit consectetur, asperiores ea, eius illum. Inventore ipsum, enim distinctio accusamus rerum ex recusandae!</p>
    </div>
    <div class="col-md-4">
      <h2>Horaires d'ouverture</h2>

      <?php if($ouvert): ?>
        <div class="alert alert-success">
        Le restaurant sera ouvert
      </div>
      <?php else : ?>
        <div class="alert alert-danger">
        Le restaurant sera fermé
      </div>
      <?php endif; ?>

      <form action="" method="get">
        <div class="from-group input">
          <?php echo select('jour', $jour, JOURS) ?>
        </div>
        <div class="from-group input">
              <input type="number" name="heure" class="from-control" value="<?php echo $heure; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Vérifier l'horaire</button>
      </form>

      <ul>
        <?php foreach(JOURS as $k => $jour) : ?>   
          <li <?php if($k + 1 === (int)date('N')) : ?> style="color:<?= $color; ?>"> <!-- Colorer l'horaire  -->
          <?php endif; ?>
              <strong><?= $jour ?></strong> : <?= creneaux_html(CRENEAUX[$k]) ?>
          </li>
        <?php endforeach;?> 
      </ul>

    </div>
</div>




<?php require "footer.php"; ?>