<?php
session_start();
require_once("includes/connection.php");
require_once("includes/head.php");
require_once("includes/functions.php");
require_once("includes/main.php");
?>
<style>
    .box {
        border: 1px solid #9e212b;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="/jquery/jquery-ui.js" crossorigin="anonymous" />
</head>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Soyez les bienvenus chez Ordishop</h2>
        <p>Vente des Matériaux de l'électronique en Maroc, Ordinateurs de bureau, Portables,Mini PC,et Des Coffrets Gaming et Produits électronique.</p>
        <a href="#apropos" class="btn1">A propos</a>
        <a href="#produits" class="btn2">Nos produits</a>
    </div>
</section>
<!--fin page d acceuil-->
<section class="apropos" id="apropos" style="background-color: #F3F3F3;">
   <div class="row">
        <div class="col50" >
            <h2 class="titre-texte"><span>Q</span> ui sommes nous
</h2>
               <h3>Nous somme une société Marocane spécialisée dans la vente de toutes les solutions de electronice.</h3> 
               <br>
               <h3>Nous portons les produits de: APPLE , Lenovo , DELL , HP , ASUS et bien d'autres fabricants renommés par leur dévouement à la qualité.</h3>
        </div>
       <div id="img-apropos" class="col50">
            <div class="img">
                <img src="./images/index/jYDfeATB_4x.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<!--fin page apropos-->

<!--page  produits -->
<section class="produits" id="produits">
    <div class="titre">
        <h2 class="titre-texte"><span>N</span>os Produits</h2>
    </div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./admin/images/products/kindpng_1517743.png" alt="FM-2000-WHITE" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./admin/images/products/kindpng_4943517.png" alt="SOL-DC-1-min" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="./admin/images/products/kindpng_7361161.png" alt="vox-600-rouge" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button style=" background: #9e212b;" class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span   class="carousel-control-prev-icon"></span>
    </button>
    <button style=" background: #9e212b;" class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span  class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="plus">
      <a href="products.php" class="btn1">Voir Plus</a>
  </div>
</section>
<!---fin page produits-->
<!---page temoignage-->
<section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/index/ll.jpg" alt="">
            </div>
            <div class="text">
                <p>Grand choix de matériaux et de matériel pour les Ordinateur. Personnel technique compétant et disponible. Rapport qualité prix excellent..</p>
                <h3>AbdelMoughit Hamouda</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/kk.jpg" alt="">
            </div>
            <div class="text">
                <p>Cliente depuis plus de 2 ans, j'ai toujours été bien servi et reçu de bons conseils. Les prix sont honnêtes et on peut profiter de remise en ouvrant un compte client. A recommander dans la région !
                </p>
                <h3>Abdelkebir Jmaiai </h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/jj.jpg" alt="">
            </div>
            <div class="text">
                <p>Fournisseur en gros de matériaux.
                    Personnel très sympa. Prix compétitif
                    Dommage qu'il n ouvre pas le dimanche.</p>
                <h3>Soulaimane elamini</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/pp.jpg" alt="">
            </div>
            <div class="text">
                <p>J'ai trouvé ce dont j'avais besoin et eu de très bons conseils</p>
                <h3>Mohammed Souied</h3>
            </div>
        </div>
    </div>
 </section>
 <!---fin page de temoignage-->

<!-- page contact -->
<section class="contact" id="contact">
    <div class="titre noir">
        <h2 class="titre-text" id="color"><span>C</span>ontact</h2>
    </div>
    <div class="contactform">
        <form action="">
           <h3>Envoyer un message</h3>
           <input type="text" placeholder="Nom" class="inputboite">
           <input type="text" placeholder="email" class="inputboite">
           <textarea placeholder="message" class="inputboite"></textarea>
           <input type="submit" value="envoyer" class="inputboite">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
</body>
</html>
