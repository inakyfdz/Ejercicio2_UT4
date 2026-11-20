<?php
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'httponly' => true,
    'secure' => false,
    'samesite' => 'Lax'
]);


function saneamintoInfo($sanear) :string{
    return htmlspecialchars($sanear, ENT_QUOTES, 'UTF-8');
}

function requestHTTPS () : bool {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
}
session_start();