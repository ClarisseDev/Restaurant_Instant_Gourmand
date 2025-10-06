<style>
body{
  margin: 100px;
  padding: 100px;
}
</style>

<?php

    $title = "Notre menu";
    $menu = file_get_contents((__DIR__ . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR  . "carte_menus.tsv"));
    $lignes = explode(PHP_EOL, $menu);
    foreach ($lignes as $k => $ligne) 
    {
        $lignes[$k] = explode("\t", trim($ligne));        //\t = tabulation       trim = supprime les espaces et tabulations
    }

    require 'header.php';

?>

<h2>Menu</h2>

<?php foreach ($lignes as $ligne) : ?>
    <?php if (count($ligne) === 1) : ?>
        <h4><?php echo $ligne[0] ?></h4>
    <?php else :?>
        <div class="row">
            <div class="col-sm-8">
                <p>
                    <strong><?php echo $ligne[0]; ?></strong><br>
                    <?php echo $ligne[1]; ?>
                </p>
            </div>
            <div class="col-sm-4">
                <strong><?php echo number_format($ligne[2], 2, ",", " ") ?>€</strong>
            </div>
        </div>

    <?php endif;?>
<?php endforeach; ?>


<?php
    require 'footer.php';
?>