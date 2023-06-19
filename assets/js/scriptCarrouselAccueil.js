document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".slide");
    let currentSlide = 0;
  
    // Fonction pour afficher la diapositive suivante
    function nextSlide() {
      slides[currentSlide].style.display = "none";
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].style.display = "block";
    }
  
    // Fonction pour afficher la diapositive précédente
    function previousSlide() {
      slides[currentSlide].style.display = "none";
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      slides[currentSlide].style.display = "block";
    }
  
    // Écouteurs d'événements pour les boutons de navigation
    document.getElementById("next-slide").addEventListener("click", nextSlide);
    document.getElementById("previous-slide").addEventListener("click", previousSlide);
  
    // Afficher la première diapositive
    slides[currentSlide].style.display = "block";
  });