<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vibe - Contatti</title>
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
	
	#contatti h2{
		color: white;
	}
	
	#dove h2{
		color: white;
	}
	
	#info{
		padding-top: 5%;
		padding-bottom: 5%;
		color: white;
	}
	
	#footer{
		background-color: #000000;
		border-top: solid 1px white;
		padding: 1%;
		color: white;
	}
	
	.container{
		padding: 2%;
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
		
	  <div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation"> 
			<span class="navbar-toggler d-flex"><img src="../img/menu.svg" height="9%" width="9%" style="filter: invert(1);"></span>  
		</button>
		  
		<div class="collapse navbar-collapse" id="menu">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item"> <a class="nav-link" href="../index.php" style="color: white;">Home</a></li>
			<li class="nav-item"> <a class="nav-link" href="chisiamo.php" style="color: white;">Chi siamo</a></li>
			<li class="nav-item"> <a class="nav-link" href="store.php" style="color: white;">Store</a></li>
			<li class="nav-item"> <a class="nav-link" href="booking.php" style="color: white;">Booking</a></li>
			<li class="nav-item"> <a class="nav-link" href="#" style="color: white;">Contatti</a></li>
		  </ul>
		</div>  
	  </div>
	</nav>
	
	<!-- Logo --> 
	
	<div id="logo" class="container-fluid" align="center">
		<img src="../img/vibe.png" width="35%">
	</div>
	
	<!-- Contatti -->
	
	<div id="contatti" class="container"> 
	  	<h2>SCRIVICI</h2>
		<form class="row g-3">
			<div class="form-floating col-md-6">
			  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			  <label for="floatingInput">Email</label>
			</div>
			<div class="form-floating col-md-6">
			  <input type="email" class="form-control" id="floatingInputDisabled" placeholder="name@example.com" disabled>
			  <label for="floatingInputDisabled">vibe.urbanlab@gmail.com</label>
			</div>
			<div class="form-floating">
			  <input type="text" class="form-control" id="floatingText" placeholder="Oggetto">
			  <label for="floatingText">Oggetto</label>
			</div>
			<div class="form-floating">
			  <textarea class="form-control" placeholder="Scrivi un messaggio" id="floatingTextarea"></textarea>
			  <label for="floatingTextarea">Messaggio</label>
			</div>
			<div class="col-12">
			  <button type="submit" class="btn btn-primary">Invia</button>
			</div>
		</form>
	</div>
	
	<!-- Collaborators --> 
	
	<div id="dove" class="container">
	  	<h2>DOVE TROVARCI</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d730.6931213131304!2d13.336813828488799!3d38.10703305349759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1319ef731de461e5%3A0x85bd79a06d46e656!2sVia%20Michele%20Titone%2C%2016a%2C%2090129%20Palermo%20PA!5e1!3m2!1sit!2sit!4v1689419029932!5m2!1sit!2sit" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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