<style>
body{
  margin: 100px;
  padding: 100px;
}
p{
  margin-top: 200px !important;
}
strong{
  color: red;
  margin-bottom: 100px;
}
</style>

<?php
$aDeviner = 150;
require "header.php";
?>


<div class="deviner">
<form action="jeu.php" method="get">
  <h2>Trouver le chiffre entre 0 et 1000</h2>
<input type="number" id="chiffre" name="chiffre" placeholder="Saisir le chiffre" value="?php htmlentities($_GET['chiffre'])">
<button type="submit">Trouver</button>
</div>
</form>


<?php if(isset($_GET["chiffre"])){?>
    <?php if((int)(($_GET["chiffre"])) > $aDeviner ) {?>
    <strong>Votre chiffre est trop grand</strong>
    <?php }elseif((int)($_GET["chiffre"]) < $aDeviner) {?>
      <strong>Votre chiffre est trop petit</strong>
    <?php }else{?>
    Bravo, vous avez trouvé le bon chiffre : <?php echo $aDeviner ?>
    <?php }?>
<?php }?>


<div>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ad accusantium ducimus harum dignissimos eaque praesentium accusamus est obcaecati quod magni quo, nihil voluptatem facilis rem earum in commodi quisquam sapiente amet ut impedit. Impedit veritatis eius nemo cumque ad veniam accusantium ea repellendus inventore repudiandae. Id, optio aliquid. Repellat perferendis fuga sapiente totam harum corporis sequi et earum hic deserunt nobis maiores tempore facere natus assumenda sit quidem temporibus quisquam sunt aliquam, omnis laborum repellendus fugit nesciunt. Cupiditate ipsa, voluptate dolorem quisquam dignissimos perferendis deserunt ex fugit labore, maiores excepturi eligendi, delectus inventore quis eveniet dolor? Nisi veritatis et fuga, hic perspiciatis, fugiat dolor architecto praesentium deserunt non eaque eum quidem animi? Inventore asperiores dignissimos expedita, corporis id minima in tenetur exercitationem vel sed porro eum placeat necessitatibus natus odio unde voluptatum, neque nemo adipisci vero quos, pariatur distinctio aut provident! Debitis repellat ipsum facere officiis obcaecati aliquid expedita fugit maxime beatae, voluptatum reprehenderit doloremque similique, illum reiciendis illo quo neque saepe perspiciatis, modi sequi nam sint quos molestias. Et, earum dolorem tempora vero quae repellat placeat totam amet vitae nemo mollitia velit necessitatibus, voluptate, accusantium sed facere consectetur architecto ea sint! Neque porro laborum praesentium fugit beatae, minus saepe commodi iste rem soluta dolores, modi veritatis consequatur, quasi cumque explicabo similique autem! Unde aut nulla necessitatibus voluptatem ex architecto commodi. Natus fugiat amet assumenda earum dolorum explicabo, illo accusamus sunt pariatur autem molestias facere reprehenderit. Quibusdam nesciunt harum vero. Fuga hic eos alias obcaecati, nisi veniam fugit facere quae aspernatur dolores. Odio eligendi asperiores rerum quo ullam consequuntur cum, earum velit cumque cupiditate laborum inventore sed quod voluptates quos accusamus deleniti harum qui. Dicta dolor odio mollitia magnam harum quia rem veniam necessitatibus? Laboriosam dolorem libero est! Dolorum perferendis autem cupiditate inventore quam perspiciatis ad rem facere nam.</p>
</div>

<?php
require "footer.php";
?>