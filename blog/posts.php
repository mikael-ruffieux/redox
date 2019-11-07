<!DOCTYPE html>
<html lang="fr">

<?php include 'layout/head.html'; ?>

<body>

  <!-- Navigation -->
  <?php include 'layout/navbar.html'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Man must explore, and this is exploration at its greatest</h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
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
          <a href="posts.html">
            <h2 class="post-title">
              SpeakUp, la nouvelle plateforme de diffusion de Podcasts
            </h2>
            <h3 class="post-subtitle">
              Le prochain hit ou prochain flop ? 
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="about.html">Mikaël</a>
            le 1 décembre 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="posts.html">
            <h2 class="post-title">
              Créer un blog ? Mais je n'ai rien à dire !
            </h2>
            <h3 class="post-subtitle">
              Ou comment partager son avis et son quotidien à qui veut bien me lire.
            </h3>
          </a>
          <p class="post-meta">Posté par
            <a href="about.html">Mikaël</a>
            le 11 novembre 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="posts.html">Tous les articles &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <?php include 'layout/footer.html' ?>

  <?php include 'layout/scripts.html' ?>

</body>

</html>
