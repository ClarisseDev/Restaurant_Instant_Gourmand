
<?php 
$title = "Page d'accueil";
$nav = "accueil";
require "header.php"; ?>


<style>
  .carousel-inner{
    max-height: 90vh;
    margin-bottom: 2rem;

  }
  .carousel-item{
    object-fit: cover;
    height: 100vh;
    width: 100%;
  }
  .carousel-caption{
    bottom: 5%;
  }
  .carousel-indicators{
    display: flex;
    flex-direction: column;
  }
  .carousel-control-prev-icon, carousel-control-next-icon{
    color: black !important;
    fill: black !important;
  }
  .col-lg-4 > .bd-placeholder-img{
    border-radius: 50% !important;
    max-width: 140px;
  }
  .avis{
    background-color: beige;
    margin-bottom: 150px;
  }
  .container{
    max-width: 90vw;
  }
  body{
    margin-top: 70px !important;
    z-index: 20000;
    position: relative !important;
  }
  h1{
    color: white !important;
  }

  /* h2{
    margin-top: 200px !important;
  } */
  img{
    width: 100%;
    max-height: 100%;
  }


</style>
<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

    <div class="carousel-indicators">
      <div><h1>L'Instant Gourmand</h1></div>
      <div>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="https://s1.qwant.com/thumbr/474x316/1/f/5fb78c3b2358d18f681c0a9ecaba96305e08ebf85cf3519cb8a75bc795ca22/OIP.XY9twaWvDwJsHOwftj4V6QHaE8.jpg?u=https%3A%2F%2Ftse.mm.bing.net%2Fth%2Fid%2FOIP.XY9twaWvDwJsHOwftj4V6QHaE8%3Fcb%3D12%26pid%3DApi&q=0&b=1&p=0&a=0" alt="" class="bd-placeholder-img" >
      </div>
      <div class="carousel-item">
      <img src="https://s3-rd-prod.chicagobusiness.com/styles/crop_freeform/s3/Bar%20Mar_2670%20(1)_0.jpg" alt="" class="bd-placeholder-img" width="100%" height="100%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      </div>
      <div class="carousel-item">
      <img src="https://res.cloudinary.com/tf-lab/image/upload/restaurant/3325ba3d-fc38-41c7-82a7-6c37252fcb9b/a55a8c52-590c-4611-929e-e50f131b6833.jpg" alt="" class="bd-placeholder-img" width="100%" height="100%">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true" color="black"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" color="black"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="container marketing">

        <!-- Plats incontournables -->
  <h2>Nos incontournables</h2>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Filet de bar aux agrumes et écume de citron vert </h2>
        <p class="lead">Un filet de bar juste snacké, sublimé par une marinade d’agrumes, accompagné d’une mousseline de panais et d’une écume légère au citron vert pour une touche de fraîcheur inattendue.</p>
      </div>
      <div class="col-md-5">
        <img src="https://cache.marieclaire.fr/data/photo/w1000_c17/cuisine/138/filetdebaraufour.jpg"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
          width="500" height="500"
          style="object-fit: cover;"
          alt="Photo du plat Filet de bar aux agrumes et écume de citron vert">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Cœur de filet de bœuf rôti, jus corsé au cacao </h2>
        <p class="lead">Une pièce tendre et fondante, saisie à la perfection, servie avec un jus réduit au cacao amer, des légumes racines confits et une pointe de purée fumée. Un équilibre entre intensité et raffinement.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="https://www.cuisineactuelle.fr/imgre/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcac.2F2018.2F09.2F25.2F2b7dcec2-b999-4129-b73c-b02c521a9615.2Ejpeg/760x427/quality/80/crop-from/center/filet-de-boeuf-sauce-aux-truffes.jpeg"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
          width="500" height="500"
          style="object-fit: cover;"
          alt="Photo du plat Cœur de filet de bœuf rôti, jus corsé au cacao">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Crémeux de carottes anciennes, noisettes torréfiées et tuile au parmesan </h2>
        <p class="lead">Une entrée végétale tout en douceur, relevée par le croquant des noisettes et la puissance du parmesan. Élégant, surprenant, et absolument savoureux.</p>
      </div>
      <div class="col-md-5">
      <img src="https://odelices.ouest-france.fr/images/articles/2024/12/saint-jacques-noisettes-1024x683.jpg"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
          width="500" height="500"
          style="object-fit: cover;"
          alt="Photo du plat Crémeux de carottes anciennes, noisettes torréfiées et tuile au parmesan">

      </div>
    </div>

    <hr class="featurette-divider">

<!-- Avis clients -->

<div class="row avis">
    <h2>Avis clients</h2>
      <div class="col-lg-4">
        <img src="https://www.plus-que-pro-solution.fr/uploads/2024/08/visuel-image-a-la-une-comment-viser-les-5-etoiles-_-1024x683.jpg" 
          class="bd-placeholder-img rounded-circle" 
          width="140" height="140" 
          alt="Note 5 étoiles">
        <h3 class="fw-normal">Un vrai régal du début à la fin</h3>
        <p>Chaque plat était une explosion de saveurs. On sent que tout est fait maison avec des produits de qualité. Mention spéciale pour le service : chaleureux et attentionné !</p>
        <p><a class="btn btn-secondary" href="#">Détails &raquo;</a></p>
      </div>
      <div class="col-lg-4">

        <img src="https://www.plus-que-pro-solution.fr/uploads/2024/08/visuel-image-a-la-une-comment-viser-les-5-etoiles-_-1024x683.jpg" 
          class="bd-placeholder-img rounded-circle" 
          width="140" height="140" 
          alt="Note 5 étoiles">
        <h3 class="fw-normal">Une parenthèse gourmande et raffinée</h3>
        <p>Le cadre est apaisant, la cuisine inventive et délicieuse. C’est devenu notre adresse coup de cœur pour les dîners en amoureux. Bravo à toute l’équipe !</p>
        <p><a class="btn btn-secondary" href="#">Détails &raquo;</a></p>
      </div>
      <div class="col-lg-4">
        <img src="https://www.plus-que-pro-solution.fr/uploads/2024/08/visuel-image-a-la-une-comment-viser-les-5-etoiles-_-1024x683.jpg" 
          class="bd-placeholder-img rounded-circle" 
          width="140" height="140" 
          alt="Note 5 étoiles">
        <h3 class="fw-normal">Une expérience culinaire inoubliable</h3>
        <p>Tout est parfait : accueil souriant, ambiance cosy, plats généreux et savoureux. On a hâte d’y retourner. Un grand bravo au chef !</p>
        <p><a class="btn btn-secondary" href="#">Détails &raquo;</a></p>
      </div>
    </div>
  </div>


<?php require "footer.php"; ?>