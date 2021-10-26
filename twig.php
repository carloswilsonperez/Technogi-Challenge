<?php

require __DIR__ . '/vendor/autoload.php';

// Activate the File system loader
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/');

// Create new environment
$twig = new \Twig\Environment($loader, [
   'autoescape' => false
]);

$submitButtonHTML = '<input type="submit" value="Log In"/>';
$loginHeaderText = 'Log In';
$isAdminLogin = false;
$totalSiteLogins = '0.00';

echo $twig->render('form.twig', [
    'loginHeaderText' => $loginHeaderText, 
   'submitButtonHTML' => $submitButtonHTML, 
   'isAdminLogin' => $isAdminLogin, 
   'totalSiteLogins' => intval($totalSiteLogins)
]);
