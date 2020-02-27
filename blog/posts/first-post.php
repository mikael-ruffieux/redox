<!DOCTYPE html>
<html lang="fr">

<?php 
$page_title = "Créer un blog ? Mais je n'ai rien à dire !";
include '../layout/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include '../layout/navbar.html'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/blog/img/14-2.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Créer un blog ? Mais je n'ai rien à dire !</h1>
            <h2 class="subheading">Ou comment partager son avis et son quotidien à qui veut bien me lire.</h2>
            <span class="meta">Posté par
              <a href="/blog/about.php">Mikaël</a>
              le 11 novembre 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Quand on m’a demandé pour mes cours de marketing de rédiger un article de blog,
            en ayant au préalable mis en place le site, en créant une identité visuelle, un « branding »,
            je ne savais pas trop quoi en penser.</p>
          
          <h2 class="section-heading">Qui suis-je pour écrire un blog ?</h2>
          <p>Je n’ai pas de compétence particulière à partager, ou d’avis à donner sur le monde, ça n’intéresse personne …</p>
          <p>Mais après discussion avec un étudiant de 2ème année, j’ai changé d’avis : 
            il m’a présenté son modèle de travail basé sur le transfert de connaissances, le <a href="https://fr.wikipedia.org/wiki/Voyage_du_h%C3%A9ros" target="_blank" rel="noopener noreferrer" title="Définition de Wikipédia"><i>Hero's Journey</i></a>. 
            Il m’a appris qu’il prenait des stagiaires pour ses projets, ce qui m’a étonné vu que cette personne avait mon âge, 
            mais il m’a dit qu’on apprenait mieux en transmettant ses connaissances à d’autres. Et des compétences, j’en ai.</p>
          <p>Certes, je ne suis actuellement expert en aucun domaine de ma carrière, mais j’ai déjà certaines connaissances, 
            notamment dans le domaine de la vidéo, et je me suis dit qu’un blog était un bon point de départ pour l’introverti 
            que je suis.</p>
          <p>De plus, cela me fait une sorte de travail d'introspection sur mon cursus scolaire et professionnel, du coup 
            c'est pour moi un bon exercice !
          </p>
          
          <h2 class="section-heading">Ce qu’il vous attend sur ce blog</h2>
          <p>Vous y trouverez donc les récits de certaines de mes aventures et découvertes dans le monde de la vidéo et de la communication, des anecdotes issues de mon quotidien, ou simplement des articles d’autres blogs que je trouvais intéressants, et que je commenterai.</p>
          <p>Par soucis de simplicité technique, j’ai décidé de désactiver une éventuelle section de commentaires, mais si ça vous démange autant que ça de me partager votre avis, n’hésitez pas à me contacter via le formulaire de contact, ou directement à l’adresse <a href=’mailto:mikael@redox-prod.ch’>mikael[arobase]redox-prod.ch</a> .</p>
          <p>Sur ce, bonne lecture !</p>
          
          <blockquote class="blockquote">- Mikaël</blockquote>



          <!--<a href="#">
            <img class="img-fluid" src="/blog/img/post-sample-image.jpg" alt="">
          </a>-->

          <p>&copy; photo : <a href="http://www.redox-prod.ch" target="_blank" rel="noopener noreferrer">Redox Prod</a></p>
        </div>
      </div>
    </div>
  </article>

  <hr>
  <div class="container" id="other-articles">
    <h3>D'autres articles qui pourraient vous intéresser :</h3>
    <ul>
      <li><a href="/blog/posts/speak-up.php">SpeakUp, la nouvelle plateforme de diffusion de Podcasts</a></li>
      <li><a href="/blog/posts/video-armee.php">La vidéo durant mon service militaire</a></li>
    </ul>

    <div class="text-center"><a class="btn btn-primary" href="/blog/all-posts.php">Retour aux articles</a></div>
  </div>

  <?php include '../layout/footer.html' ?>

  <?php include '../layout/scripts.html' ?>

</body>

</html>
