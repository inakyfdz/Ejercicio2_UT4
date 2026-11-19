<?php
declare(strict_types=1);
require_once __DIR__ . '/seguridad.php';
require_once __DIR__ . '/sesion.php';
require_once __DIR__ . '/auth.php';
require_once __DIR__ . '/../tools/renders.php';

ini_set('session.use_strict_mode', 1);
session_set_cookie_params([
    'httponly' => true,
    'secure'   => requestIsHttps(),
    'samesite' => 'Lax',
    'path'     => '/',
    'lifetime' => 0,
]);
session_start();

