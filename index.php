<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;



$listRoute = new Route('/');
$createRoute = new Route('/create');
$showRoute = new Route('/show');

$collection = new RouteCollection();
$collection->add('list', $listRoute);
$collection->add('create', $createRoute);
$collection->add('show', $showRoute);


$matcher = new UrlMatcher($collection, new RequestContext());

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';



$resultat = $matcher->match($pathInfo);


dd($_SERVER);
