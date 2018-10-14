document.addEventListener("DOMContentLoaded", function() {
  if(window.location.search.indexOf("state=success") === 1) {
    alert("Votre message a été envoyé et sera traité dans les plus brefs délais.");
  } else if(window.location.search.indexOf("state=error") === 1) {
    alert("Veuillez remplir le formulaire correctement.");
  }
});
