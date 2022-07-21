<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;

require __DIR__ . '/vendor/autoload.php';



$listRoute = new Route('/');
$createRoute = new Route('/create');
$showRoute = new Route('/show');

$collection = new RouteCollection();
$collection->add('list', $listRoute);
$collection->add('create', $createRoute);
$collection->add('show', $showRoute);


$matcher = new UrlMatcher($collection, new RequestContext());

//dd($_SERVER);
$pathInfo = $_SERVER['PATH_INFO']  ?? '/';

dump($pathInfo);


$resultat = $matcher->match($pathInfo);

dump($resultat);
$page = $resultat['_route'];
require_once "pages/$page.php";
