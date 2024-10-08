// Responsive Navigation Toggle
const burger = document.querySelector('.burger');
const navbar = document.querySelector('.navbar');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    navbar.classList.toggle('active');
});

// Form Submission Alert
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Form submitted successfully!');
});

