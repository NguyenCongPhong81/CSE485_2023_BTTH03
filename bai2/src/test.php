<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', array('page_title' => 'Test Twig'));
?>