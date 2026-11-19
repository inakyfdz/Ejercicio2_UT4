<?php
$_SESSION['visitas'] =($_SESSION['visitas'] ?? 0) +1 ;
$_SESSION['LastSect'] = $_SESSION['LastSect'] ?? basename($_SERVER['PHP_SELF']);
$_SESSION['MomLastAct'] = $_SESSION['MomLastAct'] ?? 'Sin Actividad de momento';
$_SESSION['Alias'] = $_SESSION['Alias'] ?? '';
function imprimirVisitas(){
    echo saneamintoInfo($_SESSION['visitas']);
}

function imprimirLastSect(){
    echo saneamintoInfo($_SESSION['LastSect']);
}
function imprimirMomLastAct(){
    echo saneamintoInfo($_SESSION['MomLastAct']);
}
function imprimirAlias(){
    echo saneamintoInfo($_SESSION['Alias']);
}
function recogerActividad(){
    $_SESSION['MomLastAct'] = String(date('Y-m-d H:i:s'));
}
