<!DOCTYPE html>
<html lang="en">
<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Matcher\UrlMatcher;

include('includes/base.php');
require __DIR__ . '/vendor/autoload.php';
$listeRoute = new Route('/');
$createRoute = new Route('/Create');
$showRoute = new Route('show');

$collection = new RouteCollection();
$collection->add('list', $listeRoute);
$collection->add('create', $createRoute);
$collection->add('show', $showRoute);

$matcher = new UrlMatcher($collection, new RequestContext());
$resultat = $matcher->match('/create');
var_dump($resultat);
die();
?>

<body>
	<?php include('includes/navbar.php'); ?>


	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-7 col-lg-6 text-center bloc-img-description">
				<h1>Ceci est un site de test en cours V126</h1>
				<p class="hidden-xs hidden-sm"> Mes liste de partitions sont en cours .....</p>
				<a href="#" class="btn btn-lg btn-warning">Commandez Maintenant</a>
			</div>
			<div class="col-sm-6 col-md-5 col-lg-6">
				<center><img src="img/Partitions.jpg" class="img-responsive" alt="Responsive image"></center>
			</div>
		</div>
	</div>

	<?php
	include('includes/snippets.php');
	?>
</body>

</html>