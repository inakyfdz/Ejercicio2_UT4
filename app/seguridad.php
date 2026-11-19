<?php

function saneamintoInfo($sanear) :string{
    return htmlspecialchars($sanear, ENT_QUOTES, 'UTF-8');
}

function requestHTTPS () : bool {
    return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
}
