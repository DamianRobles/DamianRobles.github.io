<?php
/**
 * footer.php
 * Componente reutilizable: footer + scripts + cierre de body/html
 *
 * Requiere que $basePath esté definido antes de incluir header.php
 * (footer.php hereda esa variable del mismo scope de la página)
 *
 * Uso:
 *   <?php include 'includes/footer.php'; ?>
 */

// Fallback por si se incluye sin haber definido $basePath
$basePath = $basePath ?? "./";
?>

<!-- =============================================
     FOOTER PRINCIPAL
     ============================================= -->
<footer class="footer-glitch mt-auto pt-5 pb-3">
    <div class="container">

        <!-- Fila superior -->
        <div class="row gy-4 pb-4" style="border-bottom: 1px solid var(--gb-border);">

            <!-- Brand -->
            <div class="col-12 col-md-4">
                <a href="<?= $basePath ?>index.php"
                   class="d-flex align-items-center gap-2 mb-3 text-decoration-none">
                    <i class="bi bi-terminal-fill text-neon-cyan fs-5"></i>
                    <span class="text-neon-cyan fw-bold text-uppercase"
                          style="letter-spacing:3px;">GlitchBoard</span>
                </a>
                <p class="footer-tagline">
                    El foro underground de la cultura cyberpunk.<br />
                    Conéctate. Discute. Sobrevive a la red.
                </p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="footer-social" aria-label="Twitter">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="footer-social" aria-label="Discord">
                        <i class="bi bi-discord"></i>
                    </a>
                    <a href="#" class="footer-social" aria-label="Reddit">
                        <i class="bi bi-reddit"></i>
                    </a>
                    <a href="#" class="footer-social" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>

            <!-- Secciones del foro -->
            <div class="col-6 col-md-2 offset-md-1">
                <h6 class="footer-heading">
                    <i class="bi bi-grid-3x3-gap-fill me-1"></i>Secciones
                </h6>
                <ul class="list-unstyled footer-links">
                    <li>
                        <a href="<?= $basePath ?>section.php?id=1">
                            <i class="bi bi-controller me-1"></i>Videojuegos
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>section.php?id=2">
                            <i class="bi bi-book-fill me-1"></i>Libros
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>section.php?id=3">
                            <i class="bi bi-dice-5-fill me-1"></i>Juegos de Mesa
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>section.php?id=4">
                            <i class="bi bi-cpu-fill me-1"></i>Lore Cyberpunk
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Navegación general -->
            <div class="col-6 col-md-2">
                <h6 class="footer-heading">
                    <i class="bi bi-map-fill me-1"></i>Navegación
                </h6>
                <ul class="list-unstyled footer-links">
                    <li>
                        <a href="<?= $basePath ?>index.php">
                            <i class="bi bi-house-fill me-1"></i>Inicio
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>forum.php">
                            <i class="bi bi-chat-square-dots-fill me-1"></i>Foro
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>search.php">
                            <i class="bi bi-search me-1"></i>Buscar
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>register.php">
                            <i class="bi bi-person-plus-fill me-1"></i>Registrarse
                        </a>
                    </li>
                    <li>
                        <a href="<?= $basePath ?>login.php">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Iniciar Sesión
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Estado del sistema (decorativo) -->
            <div class="col-12 col-md-3">
                <h6 class="footer-heading">
                    <i class="bi bi-activity me-1"></i>Estado del Sistema
                </h6>
                <ul class="list-unstyled system-status">
                    <li class="status-item">
                        <span class="status-dot status-ok"></span>
                        <span class="status-label">Red Principal</span>
                        <span class="status-value text-neon-cyan">ONLINE</span>
                    </li>
                    <li class="status-item">
                        <span class="status-dot status-ok"></span>
                        <span class="status-label">Base de Datos</span>
                        <span class="status-value text-neon-cyan">ONLINE</span>
                    </li>
                    <li class="status-item">
                        <span class="status-dot status-warn"></span>
                        <span class="status-label">ICE Firewall</span>
                        <span class="status-value text-neon-warn">ALERTA</span>
                    </li>
                    <li class="status-item">
                        <span class="status-dot status-ok"></span>
                        <span class="status-label">Encriptación</span>
                        <span class="status-value text-neon-cyan">ACTIVA</span>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /Fila superior -->

        <!-- Fila inferior: copyright -->
        <div class="row align-items-center pt-3">
            <div class="col-12 col-md-6 text-center text-md-start">
                <p class="footer-copy mb-0">
                    &copy; <?= date('Y') ?> GlitchBoard &mdash;
                    <span class="text-muted-gb">Todos los derechos reservados</span>
                </p>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end mt-2 mt-md-0">
                <p class="footer-copy mb-0 text-muted-gb">
                    Construido con
                    <i class="bi bi-bootstrap-fill text-neon-pink"></i> Bootstrap &bull;
                    <i class="bi bi-filetype-php text-neon-cyan"></i> PHP &bull;
                    <i class="bi bi-database-fill text-neon-pink"></i> MySQL
                </p>
            </div>
        </div>

    </div>
</footer>
<!-- /FOOTER -->

<!-- Bootstrap 5 JS — CDN (incluye Popper, necesario para dropdowns y navbar) -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc4s9bIOgUxi8T/jzmcYi5xPg=QhS9bKjJoFNfwUbsKNTsVRBBpXx56nCb3U4F"
    crossorigin="anonymous"
></script>

<!-- Script principal propio -->
<script src="<?= $basePath ?>js/main.js"></script>

</body>
</html>