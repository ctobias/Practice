<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Bootstrap</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="images/energie-gym-logo-green.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Pocetna</a></li>
					<li><a href="#">O nama</a></li>
					<li><a href="#">Usluge</a></li>
					<li><a href="#">Cenovnik</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>
			</div>
		</div>
	</nav> <!---END OF NAV MENU BAR-->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/slider0.png">
				<div class="carousel-caption">
					<h1>vezbanje, oprema, suplementi</h1>
					<br>
					<button type="button" class="btn btn-default">Get Started</button>
				</div>
			</div>
			<div class="item">
				<img src="images/slider1.png">
			</div>
			<div class="item">
				<img src="images/slider2.png">
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div> <!---END OF SLIDER-->

	<div class="container text-center">
		<h2>Proizvodi</h2>
		<div class="row">
			<div class="col-sm-4">
				<img src="images/vitamini-i-suplementi.png" id="icon">
				<h4>suplementi</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/vitamini-i-suplementi.png" id="icon">
				<h4>suplementi</h4>
			</div>
			<div class="col-sm-4">
				<img src="images/vitamini-i-suplementi.png" id="icon">
				<h4>suplementi</h4>
			</div>
		</div> 
	</div> <!--END OF Proizvodi -->

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Prostor za vezbanje otvoren 24 casa</h4>
				<p>
					Athletic's Gym je i zvanično dokazao kvalitet osvojivši nacionalno priznanje za Fitness klub godine 2012, koje dodeljuje Savez za rekreaciju i fitness Srbije i časopis Fitness Management International.
					Na godišnjoj svečanosti na Fakultetu sporta i fizičkog vaspitanja, nagrade su dodeljivali stručnjaci iz oblasti sporta, službenici Ministarstva omladine i sporta i Gradskog sekretarijata za sport.
				</p>
			</div>
			<div class="col-md-6">
				<img src="images/teretana-sampion_-_1387325408.jpeg" class="img-responsive">
			</div>
		</div>
	</div> <!--END OF Prostor za vezbanje-->

	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact us</h3>
				<br>
				<h4>Our address and contact info here.</h4>
			</div>
			<div class="col-sm-4">
				<h3>Connect</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-youtube"></a>
				
			</div>
			<div class="col-sm-4">
				<img src="images/Trademarks.png" class="icon img-responsive">
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>