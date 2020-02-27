<!DOCTYPE html>
<html lang="fr">

<?php 
$page_title = "Tous les articles";
include 'layout/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include 'layout/navbar.html'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/21.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Tous les articles</h1>
            <!--<span class="subheading">Le blog de Mikaël - un aperçu de mon quotidien</span>-->
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <div class="post-preview">
          <a href="/blog/posts/analyse-im.php">
            <h2 class="post-title">
              Recherche marketing
            </h2>
            <h3 class="post-subtitle">
              Comment améliorer la filière d'Ingénierie des Médias ? 
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="/blog/about.php">Mikaël</a>
            le 26 janvier 2020</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/blog/posts/speak-up.php">
            <h2 class="post-title">
              SpeakUp, la nouvelle plateforme de diffusion de Podcasts
            </h2>
            <h3 class="post-subtitle">
              Le prochain hit ou prochain flop ? 
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="/blog/about.php">Mikaël</a>
            le 27 novembre 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/blog/posts/video-armee.php">
            <h2 class="post-title">
              La vidéo durant mon service militaire
            </h2>
            <h3 class="post-subtitle">
              Les 432 jours de service qu'il m'a fallut pour enfin utiliser mon appareil-photo à l'armée.
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="/blog/about.php">Mikaël</a>
            le 23 novembre 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="/blog/posts/first-post.php">
            <h2 class="post-title">
              Créer un blog ? Mais je n'ai rien à dire !
            </h2>
            <h3 class="post-subtitle">
              Ou comment partager son avis et son quotidien à qui veut bien me lire.
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="/blog/about.php">Mikaël</a>
            le 11 novembre 2019</p>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <?php include 'layout/footer.html' ?>

  <?php include 'layout/scripts.html' ?>

</body>

</html>
