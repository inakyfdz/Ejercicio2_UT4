<?php
declare(strict_types=1);
require_once __DIR__ . '/seguridad.php';

require_once __DIR__ . '/../tools/renders.php';

ini_set('session.use_strict_mode', 1);
session_set_cookie_params([
    'httponly' => true,
    'secure' => false,
    'samesite' => 'Lax'
]);

require_once __DIR__ . '/sesion.php';