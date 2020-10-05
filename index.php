<!DOCTYPE html>
<html lang="fr">

<?php
$page_title = "Bienvenue";
include "layout/head.php"; ?>

<body id="page-top">

	<?php include "layout/navbar.html" ?>

	<!-- Header -->
	<header class="masthead">
		<div class="container">
			<img class="logo" src="assets/images/home/logo-redox.svg" alt="Logo Redox Prod">
			<div class="intro-text">
				<h1 class="intro-heading text-uppercase">Redox Prod</h1>
				<div class="intro-lead-in text-uppercase">Communication digitale</div>
				<!--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>-->
			</div>
		</div>
	</header>

	<!-- About us -->
	<section class="" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 mx-auto text-left">
					<h2 class="section-heading text-uppercase">Au <i class="fas fa-heart text-primary" alt="CŒUR" title="CŒUR"></i> de votre transformation digitale</h2>
					<hr class="light my-4">
					<p class="text-faded mb-4">
						Aujourd'hui, les consommateurs passent de plus en plus de temps en ligne, et il est devenu essentiel pour une entreprise d'inclure
						le domaine du numérique à son écosystème, afin d'améliorer sa visibilité, d'augmenter ses ventes et de
						fidéliser ses clients.
						<br /><br />L'agence <b>Redox Prod</b> se veut au coeur de ce domaine en perpetuelle évolution,
						et est fière de vous proposer des solutions sur mesure, et à la pointe de l'innovation.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="bg-light" id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-left">
					<h2 class="section-heading text-uppercase text-center mb-5">Une digitalisation &laquo;&nbsp;à la carte&nbsp;&raquo;</h2>
					<!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
				</div>
			</div>
			<div class="row text-left">
				<div class="col-lg-4 col-sm-8 mx-sm-auto col-12">

					<h4 class="service-heading">Stratégie digitale</h4>
					<p>
						Redox Prod réalise un audit de l'<b>environnement numérique</b> de votre
						entreprise, et nous planifions ensemble la stratégie
						la plus adaptée à l'identité et à la situation de votre entreprise.
					</p>

					<div class="picto-container d-lg-none d-flex text-center mt-2 mb-4"><img class="services-picto" src="/assets/images/services/marketing_digital.svg" alt="Stratégie digitale"></div>
				</div>

				<div class="col-lg-4 col-sm-8 mx-sm-auto col-12">

					<h4 class="service-heading">Développement web</h4>
					<p class="mb-1">Votre projet est notre défi :</p>
					<ul class="mb-1">
						<li>Création de site internet,</li>
						<li>site e-commerce, </li>
						<li>ou refonte d'un site existant.</li>
					</ul>
					<p>
						Nous sélectionnons pour vous les solutions digitales les plus appropriées
						à votre projet, tout en créant un produit esthétique et preformant.
					</p>
					<div class="picto-container d-lg-none d-flex text-center mt-2 mb-4"><img class="services-picto" src="/assets/images/services/developpement_web.svg" alt="Développement web"></div>
				</div>

				<div class="col-lg-4 col-sm-8 mx-sm-auto col-12">

					<h4 class="service-heading">Production vidéo</h4>
					<p>
						Mettez en valeur votre contenu !<br />
						Pour la couverture d'un événement,
						ou pour la création de contenu original,
						notre agence se tient à votre disposition pour créer
						du <b>contenu&nbsp;vidéo</b> de qualité et pertinent pour votre clientèle.
					</p>
					<div class="picto-container d-lg-none d-flex text-center mt-2 mb-4"><img class="services-picto" src="/assets/images/services/production_video.svg" alt="Production vidéo"></div>
				</div>

			</div>
			<div class="row d-lg-flex d-none mt-2 mb-5">
				<div class="col-4">
					<div class="picto-container d-flex text-center"><img class="services-picto" src="/assets/images/services/marketing_digital.svg" alt="Stratégie digitale"></div>
				</div>
				<div class="col-4">
					<div class="picto-container d-flex text-center"><img class="services-picto" src="/assets/images/services/developpement_web.svg" alt="Développement web"></div>
				</div>
				<div class="col-4">
					<div class="picto-container d-flex text-center"><img class="services-picto" src="/assets/images/services/production_video.svg" alt="Production vidéo"></div>
				</div>
			</div>
		</div>
		
      <div class="row">
          <div class="col-12 text-center">
              <a href="/nous-contacter.php" class="btn btn-secondary">Demander un devis <i class="far fa-file-alt ml-1"></i></a>
          </div>
      </div>
	</section>

	<!-- Last projects -->
	<section class="" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-12 text-left">
					<h2 class="section-heading text-uppercase">Nos derniers projets</h2>
					<hr class="light my-4">
				</div>
				<?php include "portfolio-3-last.php" ?>
			</div>
			<div class="row">
				<div class="col-12 text-center"><a href="/nos-projets.php" class="btn btn-secondary">Tous nos projets <i class="fas fa-arrow-right ml-1"></i></a></div>
			</div>
		</div>
	</section>



	<!-- Contact CTA -->
	<section id="contact-CTA" class="contact-cta-header">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12">
					<h3 class="section-heading">Une question, ou une idée en tête ?</h3>
					<p>Contactez-nous, et parlons ensemble de votre prochain projet.</p>
				</div>
				<div class="col-md-4 col-12 text-center">
					<a href="/nous-contacter.php" class="btn btn-light">Contactez-nous <i class="fas fa-paper-plane ml-1"></i> </a>
				</div>
			</div>
		</div>
	</section>


	<!-- Team -->
	<section id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 mx-auto text-left">
					<h2 class="section-heading text-uppercase">Qui sommes&#8209;nous</h2>
					<p class="section-subheading">
						Active depuis 2016 dans le domaine du digital, <b>Redox Prod</b> est
						une agence fribourgeoise de communication&nbsp;digitale, spécialisée dans la création de sites web et dans la réalisation de vidéos pour les réseaux sociaux.
						<br /><br />À ce jour, notre agence est composée de 2 personnes, de compétences variées et complémentaires.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-12">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="assets/images/team/mika.jpg" alt="Mikael Ruffieux">
						<h4>Mikaël Ruffieux</h4>
						<p class="text-muted">Ingénieur HES des Médias</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a class="fab fa-instagram" href="https://www.instagram.com/redox_mikael/" target="_blank" rel="noopener noreferrer"></a>
							</li>
							<li class="list-inline-item">
								<a class="fab fa-vimeo-v" href="https://vimeo.com/user65773366" target="_blank" rel="noopener noreferrer"></a>
							</li>
							<li class="list-inline-item">
								<a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/mikael-ruffieux/" target="_blank" rel="noopener noreferrer"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<div class="team-member">
						<img class="mx-auto rounded-circle" src="assets/images/team/keran.jpg" alt="Keran Kocher">
						<h4>Keran Kocher</h4>
						<p class="text-muted">Photographe, développeur EPF front & backend</p>
						<ul class="list-inline social-buttons">
							<li class="list-inline-item">
								<a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/keran-k-5890b188/" target="_blank" rel="noopener noreferrer"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Clients -->
	<section class="py-5 bg-light">
		<div class="container p-0">
			<h3 class="text-muted mx-3 mb-4">Nos références</h3>
			<div id="clientsWrapper" class="mx-3">
				<a class="client-logo" href="https://www.groupe-e.ch" target="_blank" rel="noopener noreferrer">
					<img id="logoGroupeE" src="/assets/images/clients/Groupe_e_LOGO.svg" alt="Groupe E">
				</a>
				<a class="client-logo" href="https://jeunesse-bulle.ch/" target="_blank" rel="noopener noreferrer">
					<img id="logoVilleDeBulle" src="https://jeunesse-bulle.ch/wp-content/uploads/2019/04/logo_service_de_la_jeunesse_footer-1.png" alt="Service de la Jeunesse de la Ville de Bulle">
				</a>
				<a class="client-logo" href="https://youlookamazing.agency/" target="_blank" rel="noopener noreferrer">
					<img src="/assets/images/clients/logo-YLA.png" alt="You Look Amazing Agency">
				</a>
				<a class="client-logo" href="https://www.mueller-deisswil.ch/" target="_blank" rel="noopener noreferrer">
					<img src="/assets/images/clients/mueli-deisswil.png" alt="Müller Deisswil">
				</a>
				<a class="client-logo" href="https://www.startupministries.ch/" target="_blank" rel="noopener noreferrer">
					<img src="https://static.wixstatic.com/media/7070a1_96caf8fad72a4dd28d24b4550fedb7ee~mv2.png/v1/fill/w_205,h_118,al_c,q_80,usm_0.66_1.00_0.01/7070a1_96caf8fad72a4dd28d24b4550fedb7ee~mv2.webp" alt="Start up Ministries">
				</a>
			</div>
		</div>
	</section>

	<section id="sources" class="d-none">
		<p>Icons made by <a href="https://www.flaticon.com/free-icon/bullhorn_1997897" title="wanicon">wanicon</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
		<p>Icons made by <a href="https://creativemarket.com/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
	</section>

	<?php include "layout/footer.html" ?>
	<?php include "layout/scripts.html" ?>

	<script>
		function hide() {
			var x = document.getElementById("alert");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>

</body>

</html>

<?php
if (isset($_GET) && $_GET['state'] != null) {
	switch ($_GET['state']) {
		case 'success':
			echo "<div id='alert' class='alert alert-success'>Votre demande a bien été envoyée. Nous reviendrons vers vous dans les plus brefs délais. <button onclick='hide()' class='alert-btn'><i class='fas fa-times'></i></button></div>";
			break;

		case 'email_error':
			echo "<div id='alert' class='alert alert-danger'>Notre serveur mail est actuellement indisponible. Si le problème persiste, vous pouvez nous contacter à l'adresse <a href='mailto:mikael@redox-prod.ch'>mikael@redox-prod.ch</a>  <button onclick='hide()' class='alert-btn'><i class='fas fa-times'></i></button></div>";
			break;
		default:
			echo "<div id='alert' class='alert alert-danger'>Notre serveur mail est actuellement indisponible. Si le problème persiste, vous pouvez nous contacter à l'adresse <a href='mailto:mikael@redox-prod.ch'>mikael@redox-prod.ch</a>  <button onclick='hide()' class='alert-btn'><i class='fas fa-times'></i></button></div>";
			break;
	}
}
?>