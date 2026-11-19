<?php
require_once __DIR__ . '/../app/bootstrap.php';
render('information');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['alias'])) {
    $_SESSION['Alias'] = trim($_POST['alias']);
}