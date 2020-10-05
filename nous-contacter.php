<!DOCTYPE html>
<html lang="fr">

<?php
$page_title = "Nous contacter";
include "layout/head.php"; ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<body id="page-top">

	<?php include "layout/navbar.html" ?>

	<!-- Contact -->
	<section class="" id="contactUs">
		<div class="container">
			<div class="row">
				<div class="col-12 text-left">

					<h2 class="section-heading text-uppercase text-center mb-5">Nous contacter</h2>
					<p class="text-faded mb-3">
						Nous nous tenons à votre disposition pour répondre à vos questions, et nous réjouissons de faire votre connaissance !<br/>
					</p>
				
					<form action="contact.php" method="post" id="formulaireDeContact" class="row">
						
						<div class="form-group col-md-6 col-12">
							<label for="first_name">Prénom*</label><br/>
							<input type="text" name="first_name" id="first_name" required class="form-control">
						</div>

						<div class="form-group col-md-6 col-12">
							<label for="last_name">Nom*</label><br/>
							<input type="text" name="last_name" id="last_name" class="form-control" required>
						</div>

						<div class="form-group col-12">
							<label for="email">E-mail*</label><br/>
							<input type="email" name="email" id="email" class="form-control" required>
						</div>

						<div class="form-group col-12">
							<label for="telephone">Téléphone</label><br/>
							<input type="tel" name="telephone" id="telephone" placeholder="079 000 00 00" class="form-control">
						</div>

						<div class="form-group col-12">
							<label for="project">Type de projet*</label><br/>
							<select name="project" id="project" class="form-control" required>
								<option disabled selected value> -- Sélectionner -- </option>
								<option value="digital">Campagne digitale</option>
								<option value="web">Création / Refonte de site web</option>
								<option value="video">Réalisation vidéo</option>
								<option value="autre">Autre</option>
							</select>
						</div>

						<div class="d-none">
							<input type="text" name="nonono" id="nonono">
						</div>

						<!-- à faire apparaître / disparaitre selon l'option cochée -->
						<!--<div class="form-group col-12">
							<label for="website">Site web concerné <i>(si existant)</i></label><br/>
							<input type="text" name="website" id="website" class="form-control">
						</div>-->

						<div class="form-group col-12">
							<label for="message">Message*</label><br/>
							<textarea required name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
						</div>

						<small class="text-right form-text text-muted col-12">Les champs marqués d'un astérique (*) sont requis.</small>

						<div class="col-12 text-center mt-4">
							<!--<div class="g-recaptcha" data-sitekey="6LfpOKMZAAAAACntJCRznOyQ-Tgc5yrj33fAFYnq"></div>-->
							<input type="submit" value="Envoyer" class="btn btn-primary w-50 mt-4">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php include "layout/footer.html" ?>
</body>

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

</html>

<?php
if(isset($_GET) && $_GET['state'] != null) {
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