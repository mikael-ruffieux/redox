<!DOCTYPE html>
<html lang="fr">

<?php 
$page_title = "Nos services";
include "layout/head.php" ;

?>
<body id="page-top">

    <?php include "layout/navbar.html" ?>

    <!-- Header -->
    <header id="ourServicesHeader">
        <div class="pageTitle"><h1>Nos services</h1></div>
    </header>
    <main>
        <section class="bg-light" id="ourServices">
            <div class="container">
                <h2>Vidéo</h2>
                <div class="row">
                    <div class="col-md-6 serviceShort">
                        <i class="fa fa-arrow-alt-circle-right"></i>
                        <h3>Service Titre</h3>
                        <p>Service Sous-titre</p>
                    </div>
                    <div class="col-md-6 serviceDescription">
                        <h3>Description Titre</h3>
                        <p>Service Description</p>
                    </div>

                    <div class="col-md-6 serviceDescription">
                        <h3>Description Titre</h3>
                        <p>Service Description</p>
                    </div>
                    <div class="col-md-6 serviceShort">
                        <i class="fa fa-arrow-alt-circle-right"></i>
                        <h3>Service Titre</h3>
                        <p>Service Sous-titre</p>
                    </div>

                    <div class="col-md-6 serviceShort">
                        <i class="fa fa-arrow-alt-circle-right"></i>
                        <h3>Service Titre</h3>
                        <p>Service Sous-titre</p>
                    </div>
                    <div class="col-md-6 serviceDescription">
                        <h3>Description Titre</h3>
                        <p>Service Description</p>
                    </div>

                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container contact-form">
                <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact</h2>
                    <p class="section-subheading text-white">Pour plus d'informations, pour un devis ou tout simplement pour dire bonjour, contactez-nous par courriel :</p>
                    <a href="mailto:mikael@redox-prod.ch" target="_blank" rel="noopener noreferrer">mikael[arobase]redox-prod.ch</a>
                </div>
            </div>
        </section>
    </main>


    <?php include "layout/footer.html" ?>
    <?php include "layout/scripts.html" ?>

</body>
</html>