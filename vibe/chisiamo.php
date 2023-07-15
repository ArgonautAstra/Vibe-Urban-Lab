<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vibe - Chi siamo</title>
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
	
	#insegnanti{
		width: 80%;
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
	
	.card{
		background-color: rgba(0,0,0,0.70);
		color: white;
		width: 80%;
	}
	
	.card .row{
		border-top: solid 1px white;
		border-bottom: solid 1px white;
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
	
		#insegnanti{
			width: 100%;
		}
		
		.card{
			width: 100%;
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
			<li class="nav-item"> <a class="nav-link" href="#" style="color: white;">Chi siamo</a></li>
			<li class="nav-item"> <a class="nav-link" href="store.php" style="color: white;">Store</a></li>
			<li class="nav-item"> <a class="nav-link" href="booking.php" style="color: white;">Booking</a></li>
			<li class="nav-item"> <a class="nav-link" href="contatti.php" style="color: white;">Contatti</a></li>
		  </ul>
		</div>  
	  </div>
	</nav>
	
	<!-- Logo --> 
	
	<div id="logo" class="container-fluid" align="center">
		<img src="../img/vibe.png" width="35%">
	</div>
	
	<!-- Insegnanti --> 
	
	<div id="insegnanti" class="container-fluid" align="center">
      <div class="card mb-3" align="left">
        <div class="row g-0">
			
          <div class="col-md-4">
            <img src="chisiamo/insegnante1.JPG" class="img-fluid" alt="...">
          </div>
			
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Aurelio Billiteri</h5>
              <p class="card-text">
				  Ballerino di breaking dal 2009, Ermes si distingue nella sua danza - come per le sue opere d'arte (@ermesartworks) che potete trovare anche al lab - per il suo stile originale e creativo.<br>
				  Dopo una serie di vittorie a contest siciliani, partecipa tutt'ora attivamente ai contest nazionali e internazionali, consentendogli di essere sempre aggiornato sulla scena della cultura hip hop.<br>
				  La sua crew, i Bumrush, è ancora operativa in Spagna, Portogallo e Francia.
			  </p>
            </div>
          </div>
        </div>
		  
        <div class="row g-0">
			
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Zeila Spinelli</h5>
              <p class="card-text">
				  Inizia a ballare all'età di quasi undici anni e fino al 2018 si è sempre dedicata al coreografico, studiando alla Multiverse Arts & Dance Studios con numerosi insegnanti italiani e stranieri, partecipando alle gare e cercando di apprendere da numerosi stili: dall'hip hop, al L.A. style, heels, al jazz funk, waacking, voguing, breaking e per qualche anno moderno e contemporaneo. Dopo questi studi effettuati nei vari campi della danza, ha trovato la sua dimensione nella cultura dell'house dance per cercare un'espressione del movimento più personale. Attualmente partecipa alle battle in diverse parti d'Italia e a spettacoli teatrali.
			  </p>
            </div>
          </div>
			
          <div class="col-md-4">
            <img src="chisiamo/insegnante2.JPG" class="img-fluid" alt="...">
          </div>
        </div>
        
		<div class="row g-0">
			
          <div class="col-md-4">
            <img src="chisiamo/insegnante3.JPG" class="img-fluid" alt="...">
          </div>
			
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Gugliemo Misia</h5>
              <p class="card-text">
				  Ballerino di hip hop dal 2013, il suo stile nasce “dalla strada” ed essendosi approcciato quasi subito al freestyle, ha da sempre partecipato alle battle della scena siciliana vincendone alcune, tra cui due volte lo Shadow In The Circle e l'ultima edizione del Give Me Ten di Termini Imerese.<br>
				  Tutt'ora partecipa a battle nazionali e internazionali cercando di superare sempre sé stesso e di far crescere la cultura hip hop condividendola con chiunque.<br>
				  Il suo amore per la danza è tale che lo troverete ogni giorno in sala, non solo ballando il suo ma anche apprendendo dagli altri stili.
			  </p>
            </div>
          </div>
        </div>
		  
        <div class="row g-0">
			
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Mark Jason Lagutan</h5>
              <p class="card-text">
				  Inizia a ballare nel 2014 nella crew dei Pasquad, continuando con i 3 Stars e infine con i Wolf maturando e appassionandosi così ad uno stile più “los angelesco”, basato sulla libertà di movimento e ricerca del proprio groove. Inoltre non è mai mancata la sua presenza ai cypher di strada palermitani, perciò sa bene cosa significa ballare per condividere e divertirsi.<br>
				  Questa flessibilità gli ha consentito di partecipare - e vincere - sia un duo coreografico sia un 2vs2 freestyle con l'inseparabile Snoop.<br>
				  Ancora adesso partecipa alle lezioni di altri insegnanti aggiornandosi, ma anche per il semplice piacere di circondare la propria vita di danza e scoperta.
			  </p>
            </div>
          </div>
			
          <div class="col-md-4">
            <img src="chisiamo/insegnante4.jpg" class="img-fluid" alt="...">
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