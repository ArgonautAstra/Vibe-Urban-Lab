﻿<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vibe - Urban Lab</title>
  <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="img/logo.png">
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
	
	#logo{
		padding: 10%;
		background-image: url("img/carousel.jpg");
		background-size: cover;
		background-position: center;
	}
	
	#navbar{
		background-color: #000000;
	}
	
	.col-md-4 img:hover{
		transform: scale(1.05);
		transition: 0.5s;
	}
	
	#dunno{
		background-color: #FFFFFF;
	}
	
	#info{
		padding-top: 5%;
		padding-bottom: 5%;
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
	
	.col-4{
		padding-left: 10%;
		padding-right: 10%;
		padding-top: 5%;
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
		
	  <div class="container-fluid" align="left">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"> 
			<span class="navbar-toggler d-flex"><img src="img/menu.svg" height="9%" width="9%" style="filter: invert(1);"></span> 
		</button>
		  
		<div class="collapse navbar-collapse" id="menu">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item"> <a class="nav-link" href="#" style="color: white;">Home</a></li>
			<li class="nav-item"> <a class="nav-link" href="vibe/chisiamo.php" style="color: white;">Chi siamo</a></li>
			<li class="nav-item"> <a class="nav-link" href="vibe/store.php" style="color: white;">Store</a></li>
			<li class="nav-item"> <a class="nav-link" href="vibe/booking.php" style="color: white;">Booking</a></li>
			<li class="nav-item"> <a class="nav-link" href="vibe/contatti.php" style="color: white;">Contatti</a></li>
		  </ul>
		</div>  
	  </div>
	</nav>
	
	<!-- Logo --> 
	
	<div id="logo" class="container-fluid" align="center">
		<img src="img/vibe.png" width="60%" style="opacity: 0.6;">
	</div>
	
	<!-- Eventi --> 
	
	<div id="eventi" class="container">
	  	<h2>NEWS</h2>
		<div class="row">
			<div class="col-md-4">
				<a href="#" class="btn"><img src="img/locandine/loc1.jpg" class="card-img-top" alt="..."></a>
			</div>
			
			<div class="col-md-4">
				<a href="#" class="btn"><img src="img/locandine/loc2.png" class="card-img-top" alt="..."></a>
			</div>
			
			<div class="col-md-4">
				<a href="#" class="btn"><img src="img/locandine/loc3.png" class="card-img-top" alt="..."></a>
			</div>
		</div>
	</div>
	
	<!-- About --> 
	
	<div class="container">
	  <h2>VIBE URBAN LAB</h2>
      <div class="card mb-3">
        <div class="row g-0">
			
          <div class="col-md-6">
            <img src="img/ingresso.jpg" class="img-fluid" alt="...">
          </div>
			
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
				  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
			  </p>
              <p class="card-text"><small class="text-body-secondary">Cit me medesimo fantastico</small></p>
            </div>
          </div>
        </div>
      </div>
		
      <div class="card mb-3">  
        <div class="row g-0">
			
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
				  This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
			  </p>
              <p class="card-text"><small class="text-body-secondary">Cit me medesimo fantastico</small></p>
            </div>
          </div>
			
          <div class="col-md-6">
            <img src="img/ingresso2.jpg" class="img-fluid" alt="...">
          </div>
        </div>
      </div>
	</div>
	
	<!-- Breakpoint --> 
	
	<div id="dunno" class="container-fluid">
		<br><br><br><br>
	</div>
	
	<!-- Collaborators --> 
	
	<div class="container text-center">
	  <h2>COLLABORATORI</h2>
		
      <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
          <img src="img/eab.png" class="img-fluid rounded-start" alt="...">
          <p class="card-text">Ermes Art Works</small></p>
        </div>
        <div class="col-4">
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