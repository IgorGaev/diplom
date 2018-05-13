<?php

require_once(ROOT . '/vendor/autoload.php');

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('template');

$twig = new Twig_Environment($loader);



