<!DOCTYPE html>
<html lang="en">
<?php
include('includes/base.php');
?>  

  <body>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#partie-reduite" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="https://www.partitions-accordeon.com">Partitions</a>
    </div>

    <div class="collapse navbar-collapse" id="partie-reduite">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-7 col-lg-6 text-center bloc-img-description">
			<h1>Ceci est un site de test en cours V122</h1>
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
 
