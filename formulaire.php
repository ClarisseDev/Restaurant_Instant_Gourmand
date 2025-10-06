<style>
body{
  margin: 100px;
  padding: 100px;
}
</style>

<?php
require_once "functions.php";
?>

<?php

$tailles = 
[
    "Petite" => 8,
    "Moyenne" => 12,
    "Grande" => 16
];

$pates = 
[
    "Classique" => 2,
    "Fine" => 3, 
    "Epaisse" => 3.5
];

$garnitures = 
[
    "Pepperoni " => 2,
    "Jambon " => 1.5,
    "Champignons  " => 1,
    "Olives  " => 1,
    "Poivrons  " => 1,
];
$title = "Composer votre pizza";
$ingredients = [];
$total = 0;

foreach(['taille', 'pate'] as $name) {
    if(isset($_GET[$name])) {
        $liste = $name . 's';
        $value = $_GET[$name];
        if(isset($$liste[$value])) {
            $ingredients[] = $value;
            $total += $$liste[$value];
        }
    }
}

if(isset($_GET['garniture'])) {
    foreach($_GET['garniture'] as $value) {
        if(isset($garnitures[$value])) {
            $ingredients[] = $value;
            $total += $garnitures[$value];
        }
    }
}


require "header.php";
?>

<h2>Composer votre pizza</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5><div class="card-title">Votre pizza</div></h5>
                <ul>
                    <?php foreach($ingredients as $ingredient): ?>
                        <li><?php echo $ingredient; ?></li>
                    <?php endforeach; ?>
                </ul>
                <p><strong>Prix : <?php echo $total?>€</strong></p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="formulaire.php" method="get">
            <h5>Choisir la taille</h5>
            <?php foreach ($tailles as $taille => $prix) : ?>
                <div class="radio">
                    <label for="">
                        <?= radio('taille', $taille, $_GET) ?>
                        <?= $taille ?> - <?= $prix?>€ 
                    </label>
                </div>
            <?php endforeach ?>
            <h5>Choisir la pâte</h5>
            <?php foreach ($pates as $pate => $prix) : ?>
                <div class="checkbox">
                    <label for="">
                        <?= radio('pate', $pate, $_GET) ?>
                        <?= $pate ?> - <?= $prix?>€ 
                    </label>
                </div>
            <?php endforeach ?>
            <h5>Choisir la garniture</h5>
            <?php foreach ($garnitures as $garniture => $prix) : ?>
                <div class="checkbox">
                    <label for="">
                        <?= checkbox('garniture', $garniture, $_GET) ?>
                        <?= $garniture ?> - <?= $prix?>€ 
                    </label>
                </div>
            <?php endforeach ?>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
</div>



<?php
require "footer.php";
?>