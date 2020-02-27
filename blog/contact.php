<!DOCTYPE html>
<html lang="fr">

<?php 
$page_title = "Contact";
include 'layout/head.php'; ?>

<body>

  <!-- Navigation -->
  <?php include 'layout/navbar.html'; ?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Me contacter</h1>
            <span class="subheading">Vous avez des questions? Je peux peut-être vous aider</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Vous voulez me contacter? Remplissez le formulaire ci-dessous pour m'envoyer un message, et je vous répondrai au plus vite!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nom</label>
              <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Merci d'entrer votre nom.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Adresse e-mail</label>
              <input type="email" class="form-control" placeholder="Adresse e-mail" id="email" required data-validation-required-message="Merci d'entrer votre e-mail.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Numéro de téléphone</label>
              <input type="tel" class="form-control" placeholder="Numéro de téléphone" id="phone" required data-validation-required-message="Merci d'entrer votre numéro de téléphone.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Votre message</label>
              <textarea rows="5" class="form-control" placeholder="Votre message" id="message" required data-validation-required-message="Merci d'entrer un message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <hr>

  <?php include 'layout/footer.html' ?>

  <?php include 'layout/scripts.html' ?>

</body>

</html>
