<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vibe - Store</title>
  <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Bootstrap implement -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	
	
</head>	
	
<!-- STYLE -->
	
<style>
	
	#body{
		background: radial-gradient(#00002b 49%,#0000 50%) calc(100px/-2) calc(100px/2),repeating-conic-gradient(from 45deg,#000000 0 25%,#0000 0 50%)
        calc(100px/2) calc(100px/2),radial-gradient(#00002b 49%,#0000 50%),radial-gradient(#00002b 49%,#0000 50%) 100px 100px #000000;
		background-size: calc(2*100px) calc(2*100px);
	}
	
	#navbar{
		background-color: #000000;
	}
	
	#footer{
		background-color: #000000;
		border-top: solid 1px white;
		padding: 1%;
		color: white;
	}
	
	.container{
		padding: 2%;
		color: white;
	}
	
	.card{
		background-color: rgba(0,0,0,0.60);
		color: white;
	}
	
	.row{
		padding-bottom: 20px;
	}
	
	@media screen and (max-width: 1200px) {
		#navbar 
		.container-fluid 
		.collapse
		.navbar-nav
		.nav-item{
			font-size: 2rem;
		}
	}
		
</style>
	
<!-- BODY --> 
	
<body id="body"> 
	
	<!-- Navbar --> 
	
	<nav id="navbar" class="navbar navbar-expand-lg sticky-top">
		
	  <div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"> 
			<span class="navbar-toggler d-flex"><img src="../img/menu.svg" height="9%" width="9%" style="filter: invert(1);"></span> 
		</button>
		  
		<div class="collapse navbar-collapse" id="menu">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item"> <a class="nav-link "href="../index.php" style="color: white;">Home</a></li>
			<li class="nav-item"> <a class="nav-link" href="chisiamo.php" style="color: white;">Chi siamo</a></li>
			<li class="nav-item"> <a class="nav-link" href="#" style="color: white;">Store</a></li>
			<li class="nav-item"> <a class="nav-link" href="booking.php" style="color: white;">Booking</a></li>
			<li class="nav-item"> <a class="nav-link" href="contatti.php" style="color: white;">Contatti</a></li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
					Dropdown 
				</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
			</li>
		  </ul>
		</div>  
	  </div>
	</nav>
	
	<!-- Logo --> 
	
	<div id="logo" class="container-fluid" align="center">
		<img src="../img/vibe.svg" width="35%">
	</div>
	
	<!-- Store --> 
	
	<div class="container">
		
		<div class="row">
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
		</div>
		
		<div class="row">			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
						
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
		</div>
		
		<div class="row">			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
						
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/quadro.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="card">
				  <img src="../img/maglietta.png" class="card-img-top" alt="...">
				  <div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="btn btn-primary">COMPRA!!!</a>
				  </div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- Info --> 
	
	<div id="info" class="container">
		<div class="row">
			<div class="col-md-6" style="padding-bottom: 2%;">
	  			<h2>SEGUICI</h2>
                  <a href="#">Instagram</a><br>
                  <a href="#">Facebook</a><br>
			</div>
			
			<div class="col-md-6" style="border-left: solid 1px white;">
	  			<h2>CONTATTACI</h2>
          		<p class="card-text">Vibe Urban Lab<br>Via Michele Titone 16A</p>
          		<p class="card-text">+39 333 999 1111</p>
          		<p class="card-text">vibe.urbanlab@gmail.com</p>
			</div>
		</div>
	</div>
	
	<!-- Footer --> 

	<div id="footer" class="container-fluid text-center">
		Copyright © 2023 Vibe Urban Lab
	</div>
	
</body>
	
<!-- SCRIPT --> 
	
<script>
	
</script>
	
</html>