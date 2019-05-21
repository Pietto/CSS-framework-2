<!DOCTYPE html>
<html>
<head>
	<?php include 'extra/head.php';?>
	<title>INTRODUCTIE</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		      	<a class="navbar-brand" href="#">Pieterjan van Dijk</a>
		    </div>
		    <ul class="nav navbar-nav">
		      	<li class="active"><a href="home.php">Introductie</a></li>
		      	<li><a href="gallery.php">Photo gallery</a></li>
		      	<li><a href="aboutme.php">Over mij</a></li>
		      	<li><a href="contact.php">Contact</a></li>
		    </ul>
		  	<img src="img/me.jpg" id='profilepic' alt="picture">
		</div>
	</nav>

	<div class="container"> 
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">


    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>


    		<div class="carousel-inner">
      			<div class="item active">
        			<img src="img/test_1.jpg" alt="slide 1" style="width:100%;">
      			</div>

      			<div class="item">
        			<img src="img/test_2.jpg" alt="slide 2" style="width:100%;">
      			</div>
    
      			<div class="item">
        			<img src="img/test_3.jpg" alt="slide 3" style="width:100%;">
      			</div>
    		</div>


    		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left"></span>
      			<span class="sr-only">Previous</span>
    		</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
  		</div>
	</div>

	<div id='splitter'>
		<h1></h1>
	</div>
	
	<div id='card1' class='card'>
		<div id='content'>
			<h1>Over mij</h1>
			<p>Ik ben een gedreven, doorzettende en onderzoekende jongeman die zich graag op de details richt.<br><br>
			Ik wil graag mijn creativiteit inzetten, om originele en kwalitatieve producten te maken voor de klant.
			Dat wil ik doen door middel van deze opleiding en werkervaring.<br><br>
			Door mijn gevoel voor styling ben ik in te zetten voor zowel front- als backend ontwikkelingen.
			</p>
		</div>
	</div>
	<div id='card2' class='card'>
		<div id='content'>
			<h1>opleiding(en)</h1>
			<p>Op dit moment (<?php echo '20',date('y'); ?>) doe ik de Opleiding Media- en Applicatieontwikkelaar, een MBO niveau 4 opleiding.</p>
		</div>
	</div>
	<div id='card3' class='card'>
		<div id='content'>
			<h1>beroep</h1>
			<p>Ik zit nu nog in de opleiding, maar ik hoop in 2021 mijn opleiding af te ronden voor Media- en Applicatieontwikkelaar.</p>
		</div>
	</div>
	<div id='card4' class='card'>
		<div id='content'>
			<span id='contentfinder'><a href='werk.php'><h1>werk</h1></a></span>
			<div id='hiddencontent'>
				<p>klik hierboven op 'werk' om meer over mijn werk te weten komen</p>
			</div>
		</div>
	</div>
	<div id='card5' class='card'>
		<div id='content'>
			<span id='contentfinder'><a href='skills.php'><h1>skills</h1></a></span>
			<div id='hiddencontent'>
				<p>klik hierboven op 'skills' om meer over mijn werk te weten komen</p>
			</div>
		</div>
	</div>

	<div id='footer'>
		<p><?php echo '&copy;20',date('y'),' Pieterjan van Dijk'; ?><span><a href='https://www.linkedin.com/in/pieterjan-van-dijk-82b320182/' target="_blankborder"><img src='img/in.png' alt='linked-in logo'></a></span></p>
	</div>

	<script src="extra/script.js"></script>
</body>
</html>