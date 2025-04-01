import './bootstrap';

// JavaScript for the mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuToggle.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
    });
    
    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
        document.body.style.overflow = ''; // Re-enable scrolling
    });
});