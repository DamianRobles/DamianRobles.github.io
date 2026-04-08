<?php
/**
 * header.php
 * Componente reutilizable: head HTML + navbar
 *
 * Variables que se pueden definir ANTES de incluir este archivo:
 *   $pageTitle     — Título de la página         (string, default: "GlitchBoard")
 *   $activeSection — Sección activa del nav       (string: 'forum'|'search'|'admin')
 *   $basePath      — Ruta base hacia la raíz      (string, default: "./")
 *                    Páginas en raíz:        $basePath = "./"
 *                    Páginas en /admin/:     $basePath = "../"
 *
 * Uso en una página raíz (ej: index.php, forum.php):
 *   <?php
 *     $pageTitle    = "Inicio";
 *     $activeSection = "forum";
 *     $basePath     = "./";
 *     include 'includes/header.php';
 *   ?>
 *
 * Uso en una página de subcarpeta (ej: admin/dashboard.php):
 *   <?php
 *     $pageTitle    = "Panel Admin";
 *     $activeSection = "admin";
 *     $basePath     = "../";
 *     include '../includes/header.php';
 *   ?>
 */

// --- Valores por defecto ---
$pageTitle     = $pageTitle     ?? "GlitchBoard";
$activeSection = $activeSection ?? "";
$basePath      = $basePath      ?? "./";

// TODO: Cuando se integre la BD, iniciar sesión aquí:
// session_start();
// $isLoggedIn = isset($_SESSION['usuario_id']);
// $username   = $_SESSION['username'] ?? '';
// $userRol    = $_SESSION['rol']      ?? 'user';

// Datos simulados para el prototipo (sin BD)
$isLoggedIn = false;
$username   = "";
$userRol    = "user";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="GlitchBoard — El foro underground de la cultura cyberpunk" />
    <title><?= htmlspecialchars($pageTitle) ?> | GlitchBoard</title>

    <!-- Bootstrap 5 CSS — CDN (no requiere descarga) -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    />

    <!-- Bootstrap Icons — CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    />

    <!-- Estilos propios del proyecto -->
    <link href="<?= $basePath ?>css/main.css" rel="stylesheet" />
</head>

<body>

<!-- =============================================
     NAVBAR PRINCIPAL
     ============================================= -->
<nav class="navbar navbar-expand-lg navbar-glitch fixed-top" id="mainNav">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand glitch-brand" href="<?= $basePath ?>index.php">
            <i class="bi bi-terminal-fill me-2"></i>GlitchBoard
        </a>

        <!-- Botón hamburguesa (móvil) -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain"
            aria-controls="navbarMain"
            aria-expanded="false"
            aria-label="Abrir menú"
        >
            <i class="bi bi-list text-neon-cyan fs-4"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">

            <!-- Links principales -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link nav-glitch <?= $activeSection === 'forum' ? 'active' : '' ?>"
                       href="<?= $basePath ?>forum.php">
                        <i class="bi bi-grid-3x3-gap-fill me-1"></i>Foro
                    </a>
                </li>

                <!-- Dropdown secciones -->
                <li class="nav-item dropdown">
                    <a class="nav-link nav-glitch dropdown-toggle" href="#"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-collection-fill me-1"></i>Secciones
                    </a>
                    <ul class="dropdown-menu dropdown-glitch">
                        <li>
                            <a class="dropdown-item" href="<?= $basePath ?>section.php?id=1">
                                <i class="bi bi-controller me-2 text-neon-cyan"></i>Videojuegos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= $basePath ?>section.php?id=2">
                                <i class="bi bi-book-fill me-2 text-neon-cyan"></i>Libros
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= $basePath ?>section.php?id=3">
                                <i class="bi bi-dice-5-fill me-2 text-neon-cyan"></i>Juegos de Mesa
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= $basePath ?>section.php?id=4">
                                <i class="bi bi-cpu-fill me-2 text-neon-cyan"></i>Lore Cyberpunk
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-glitch <?= $activeSection === 'search' ? 'active' : '' ?>"
                       href="<?= $basePath ?>search.php">
                        <i class="bi bi-search me-1"></i>Buscar
                    </a>
                </li>

            </ul>

            <!-- Buscador rápido -->
            <form class="d-flex me-3 search-navbar" action="<?= $basePath ?>search.php"
                  method="GET" role="search">
                <input
                    type="search"
                    name="q"
                    class="form-control form-control-sm input-glitch"
                    placeholder="Buscar hilos..."
                    aria-label="Buscar hilos"
                    maxlength="100"
                />
                <button class="btn btn-neon-sm ms-1" type="submit" aria-label="Buscar">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- Sesión -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-2">

                <?php if ($isLoggedIn): ?>

                    <?php if ($userRol === 'admin'): ?>
                        <li class="nav-item">
                            <a class="nav-link nav-glitch text-neon-pink
                               <?= $activeSection === 'admin' ? 'active' : '' ?>"
                               href="<?= $basePath ?>admin/dashboard.php">
                                <i class="bi bi-shield-lock-fill me-1"></i>Admin
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link nav-glitch dropdown-toggle d-flex align-items-center gap-2"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img
                                src="<?= $basePath ?>assets/img/avatars/default.png"
                                alt="Avatar"
                                class="rounded-circle"
                                width="26" height="26"
                                style="object-fit:cover; border:1px solid var(--gb-border);"
                                onerror="this.style.display='none'"
                            />
                            <span class="text-neon-cyan"><?= htmlspecialchars($username) ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-glitch dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="<?= $basePath ?>profile.php">
                                    <i class="bi bi-person-fill me-2 text-neon-cyan"></i>Mi Perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= $basePath ?>new-thread.php">
                                    <i class="bi bi-plus-circle-fill me-2 text-neon-cyan"></i>Nuevo Hilo
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" style="border-color:var(--gb-border);" /></li>
                            <li>
                                <a class="dropdown-item text-neon-pink"
                                   href="<?= $basePath ?>logout.php">
                                    <i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link nav-glitch" href="<?= $basePath ?>login.php">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Iniciar Sesión
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-neon btn-sm" href="<?= $basePath ?>register.php">
                            <i class="bi bi-person-plus-fill me-1"></i>Registrarse
                        </a>
                    </li>

                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
<!-- /NAVBAR -->

<!-- Espaciado por el navbar fixed-top -->
<div style="padding-top: 66px;"></div>