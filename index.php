<?php
/**
 * index.php — Landing page de GlitchBoard
 * Muestra: hero, secciones del foro, hilos recientes y CTA de registro
 *
 * TODO: Cuando se integre la BD, reemplazar los arrays $secciones
 * y $hilosRecientes con consultas reales usando PDO (ver includes/db.php)
 */

$pageTitle     = "Inicio";
$activeSection = "";
$basePath      = "./";
include 'includes/header.php';

// -------------------------------------------------------
// DATOS DE EJEMPLO (reemplazar con consultas MySQL)
// -------------------------------------------------------

$secciones = [
    [
        "id"          => 1,
        "nombre"      => "Videojuegos",
        "descripcion" => "Cyberpunk 2077, Deus Ex, Observer y todo el gaming distópico.",
        "icono"       => "bi-controller",
        "hilos"       => 142,
        "color"       => "cyan",
    ],
    [
        "id"          => 2,
        "nombre"      => "Libros",
        "descripcion" => "Neuromante, Snow Crash, ¿Sueñan los androides? y más literatura.",
        "icono"       => "bi-book-fill",
        "hilos"       => 98,
        "color"       => "pink",
    ],
    [
        "id"          => 3,
        "nombre"      => "Juegos de Mesa",
        "descripcion" => "Shadowrun, Android Netrunner, Cyberpunk RED y otros TTRPGs.",
        "icono"       => "bi-dice-5-fill",
        "hilos"       => 57,
        "color"       => "cyan",
    ],
    [
        "id"          => 4,
        "nombre"      => "Lore Cyberpunk",
        "descripcion" => "Corporaciones, tecnología, filosofía y estética del género.",
        "icono"       => "bi-cpu-fill",
        "hilos"       => 203,
        "color"       => "pink",
    ],
];

$hilosRecientes = [
    [
        "id"       => 1,
        "titulo"   => "¿Cuál es el mejor mod gráfico para Cyberpunk 2077 en 2025?",
        "autor"    => "NetRunner_77",
        "seccion"  => "Videojuegos",
        "seccion_id" => 1,
        "respuestas" => 24,
        "likes"    => 15,
        "tiempo"   => "hace 2 horas",
    ],
    [
        "id"       => 2,
        "titulo"   => "Reseña: Neuromante de William Gibson — el libro que lo inició todo",
        "autor"    => "GhostShell_X",
        "seccion"  => "Libros",
        "seccion_id" => 2,
        "respuestas" => 18,
        "likes"    => 32,
        "tiempo"   => "hace 5 horas",
    ],
    [
        "id"       => 3,
        "titulo"   => "Guía de inicio para Shadowrun 6ª Edición — recursos en español",
        "autor"    => "Fixer_Ramos",
        "seccion"  => "Juegos de Mesa",
        "seccion_id" => 3,
        "respuestas" => 9,
        "likes"    => 21,
        "tiempo"   => "hace 1 día",
    ],
    [
        "id"       => 4,
        "titulo"   => "Debate: ¿Es el cyberpunk un género optimista o pesimista?",
        "autor"    => "VoidWalker",
        "seccion"  => "Lore Cyberpunk",
        "seccion_id" => 4,
        "respuestas" => 41,
        "likes"    => 67,
        "tiempo"   => "hace 1 día",
    ],
    [
        "id"       => 5,
        "titulo"   => "Android: Netrunner — diferencias entre la edición original y Revised Core",
        "autor"    => "IceBreaker_9",
        "seccion"  => "Juegos de Mesa",
        "seccion_id" => 3,
        "respuestas" => 7,
        "likes"    => 11,
        "tiempo"   => "hace 2 días",
    ],
    [
        "id"       => 6,
        "titulo"   => "Megacorporaciones reales vs ficticias: ¿ya llegamos al cyberpunk?",
        "autor"    => "SynthEtica",
        "seccion"  => "Lore Cyberpunk",
        "seccion_id" => 4,
        "respuestas" => 55,
        "likes"    => 89,
        "tiempo"   => "hace 3 días",
    ],
];
?>

<!-- =============================================
     HERO
     ============================================= -->
<section class="hero-section" id="inicio">
    <div class="hero-overlay"></div>
    <div class="container position-relative z-1 text-center py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <!-- Badge superior -->
                <span class="badge-cyan mb-3 d-inline-block">
                    <i class="bi bi-activity me-1"></i>SISTEMA EN LÍNEA
                </span>

                <h1 class="hero-title">
                    Bienvenido a <span class="text-neon-cyan">Glitch</span><span class="text-neon-pink">Board</span>
                </h1>
                <p class="hero-subtitle">
                    El foro underground de la cultura cyberpunk.<br />
                    Discute videojuegos, libros, juegos de mesa y el lore que define el género.
                </p>

                <div class="d-flex gap-3 justify-content-center flex-wrap mt-4">
                    <a href="<?= $basePath ?>forum.php" class="btn btn-neon px-4 py-2">
                        <i class="bi bi-grid-3x3-gap-fill me-2"></i>Explorar el Foro
                    </a>
                    <a href="<?= $basePath ?>register.php" class="btn btn-neon-pink px-4 py-2">
                        <i class="bi bi-person-plus-fill me-2"></i>Unirse a la Red
                    </a>
                </div>

                <!-- Stats rápidas -->
                <div class="hero-stats d-flex justify-content-center gap-4 mt-5 flex-wrap">
                    <div class="hero-stat">
                        <span class="stat-number text-neon-cyan">500+</span>
                        <span class="stat-label">Usuarios</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="stat-number text-neon-pink">1,200+</span>
                        <span class="stat-label">Hilos</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="stat-number text-neon-cyan">8,400+</span>
                        <span class="stat-label">Respuestas</span>
                    </div>
                    <div class="hero-stat-divider"></div>
                    <div class="hero-stat">
                        <span class="stat-number text-neon-pink">4</span>
                        <span class="stat-label">Secciones</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /HERO -->

<!-- =============================================
     SECCIONES DEL FORO
     ============================================= -->
<section class="py-5" id="secciones">
    <div class="container">

        <div class="section-header text-center mb-5">
            <h2 class="section-title">
                <span class="text-neon-pink">//</span>
                Secciones del Foro
                <span class="text-neon-pink">//</span>
            </h2>
            <p class="section-subtitle">Elige tu zona de la red</p>
        </div>

        <div class="row g-4">
            <?php foreach ($secciones as $seccion): ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="<?= $basePath ?>section.php?id=<?= $seccion['id'] ?>"
                   class="card-glitch section-card text-decoration-none d-flex flex-column h-100 p-4">

                    <!-- Icono -->
                    <div class="section-icon mb-3
                        <?= $seccion['color'] === 'cyan' ? 'section-icon-cyan' : 'section-icon-pink' ?>">
                        <i class="bi <?= htmlspecialchars($seccion['icono']) ?>"></i>
                    </div>

                    <!-- Info -->
                    <h5 class="section-card-title
                        <?= $seccion['color'] === 'cyan' ? 'text-neon-cyan' : 'text-neon-pink' ?>">
                        <?= htmlspecialchars($seccion['nombre']) ?>
                    </h5>
                    <p class="section-card-desc flex-grow-1">
                        <?= htmlspecialchars($seccion['descripcion']) ?>
                    </p>

                    <!-- Pie -->
                    <div class="section-card-footer mt-3">
                        <span class="text-muted-gb" style="font-size:0.78rem;">
                            <i class="bi bi-chat-square-dots me-1"></i>
                            <?= $seccion['hilos'] ?> hilos
                        </span>
                        <span class="section-arrow
                            <?= $seccion['color'] === 'cyan' ? 'text-neon-cyan' : 'text-neon-pink' ?>">
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </span>
                    </div>

                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- /SECCIONES -->

<!-- =============================================
     HILOS RECIENTES
     ============================================= -->
<section class="py-5 recent-section" id="recientes">
    <div class="container">

        <div class="section-header d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
            <h2 class="section-title mb-0">
                <span class="text-neon-cyan">//</span>
                Hilos Recientes
            </h2>
            <a href="<?= $basePath ?>forum.php" class="btn btn-neon btn-sm">
                Ver todos <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-3">
            <?php foreach ($hilosRecientes as $hilo): ?>
            <div class="col-12 col-lg-6">
                <a href="<?= $basePath ?>thread.php?id=<?= $hilo['id'] ?>"
                   class="thread-card card-glitch text-decoration-none d-flex align-items-start gap-3 p-3">

                    <!-- Icono de sección -->
                    <div class="thread-icon flex-shrink-0">
                        <?php
                            $iconos = [1 => 'bi-controller', 2 => 'bi-book-fill',
                                       3 => 'bi-dice-5-fill', 4 => 'bi-cpu-fill'];
                            $icono = $iconos[$hilo['seccion_id']] ?? 'bi-chat-dots';
                        ?>
                        <i class="bi <?= $icono ?> text-neon-cyan"></i>
                    </div>

                    <!-- Contenido -->
                    <div class="flex-grow-1 min-w-0">
                        <h6 class="thread-title mb-1">
                            <?= htmlspecialchars($hilo['titulo']) ?>
                        </h6>
                        <div class="thread-meta d-flex align-items-center gap-3 flex-wrap">
                            <span class="text-muted-gb">
                                <i class="bi bi-person-fill me-1"></i><?= htmlspecialchars($hilo['autor']) ?>
                            </span>
                            <span class="badge-section">
                                <?= htmlspecialchars($hilo['seccion']) ?>
                            </span>
                            <span class="text-muted-gb">
                                <i class="bi bi-clock me-1"></i><?= $hilo['tiempo'] ?>
                            </span>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="thread-stats flex-shrink-0 text-end">
                        <div class="text-muted-gb" style="font-size:0.75rem;">
                            <i class="bi bi-chat-dots me-1"></i><?= $hilo['respuestas'] ?>
                        </div>
                        <div class="text-neon-pink" style="font-size:0.75rem;">
                            <i class="bi bi-heart-fill me-1"></i><?= $hilo['likes'] ?>
                        </div>
                    </div>

                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!-- /HILOS RECIENTES -->

<!-- =============================================
     CTA REGISTRO
     ============================================= -->
<section class="cta-section py-5">
    <div class="container">
        <div class="cta-card text-center p-5">
            <h2 class="cta-title mb-3">
                ¿Listo para conectarte a la red?
            </h2>
            <p class="cta-subtitle mb-4">
                Únete a la comunidad, crea hilos, comenta y da likes.<br />
                El acceso es gratuito. No se requiere implante neural.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="<?= $basePath ?>register.php" class="btn btn-neon px-5 py-2">
                    <i class="bi bi-person-plus-fill me-2"></i>Crear Cuenta
                </a>
                <a href="<?= $basePath ?>login.php" class="btn btn-neon-pink px-5 py-2">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Ya tengo cuenta
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /CTA -->

<?php include 'includes/footer.php'; ?>