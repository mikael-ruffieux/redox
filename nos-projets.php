<!DOCTYPE html>
<html lang="fr">

<?php 
$page_title = "Nos projets";
include "layout/head.php" ;

?>
<body id="page-top">

    <?php include "layout/navbar.html" ?>

    <!-- Header -->
    <header id="ourWorkHeader">
        <div class="pageTitle"><h1>Nos projets</h1></div>
        <!--<div class="iframeWrapper">
            <iframe 
                src="https://player.vimeo.com/video/338079250?autoplay=1#t=0m15s&loop=1&title=0&byline=0&portrait=0&muted=1"
                allow="autoplay; fullscreen"
                allowfullscreen>
            </iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>-->
    </header>
    

    <?php include "portfolio.php" ?>

    <?php include "layout/footer.html" ?>
    <?php include "layout/scripts.html" ?>

</body>
</html>
