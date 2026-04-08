/**
 * main.js — GlitchBoard
 * Scripts globales del proyecto
 *
 * Bootstrap ya viene con su propio JS via CDN (footer.php)
 * Aquí van funciones propias que se necesiten en todas las páginas
 */

// Resaltar link activo del navbar según la URL actual
document.addEventListener('DOMContentLoaded', function () {
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav-link').forEach(function (link) {
        if (link.href && currentPath.endsWith(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
});