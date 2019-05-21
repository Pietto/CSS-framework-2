<!DOCTYPE html>
<html>
<head>
	<?php include 'extra/head.php';?>
	<title>WERK</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		      	<a class="navbar-brand" href="#">Pieterjan van Dijk</a>
		    </div>
		    <ul class="nav navbar-nav">
		      	<li><a href="home.php">Introductie</a></li>
		      	<li><a href="gallery.php">Photo gallery</a></li>
		      	<li><a href="aboutme.php">Over mij</a></li>
		      	<li><a href="contact.php">Contact</a></li>
		    </ul>
		  	<img src="img/me.jpg" id='profilepic' alt="picture">
		</div>
	</nav>

	<div class='content text-center '>
		<h1>Mijn werk</h1>
		<p>In de nabije toekomst hoop ik een Media- en Applicatieontwikkelaar te zijn, maar tot die tijd breng ik mijn tijd door al kassa medewerker bij Dirk van de Broek.</p>
	</div>

	<div id='footer'>
		<p><?php echo '&copy;20',date('y'),' Pieterjan van Dijk'; ?><span><a href='https://www.linkedin.com/in/pieterjan-van-dijk-82b320182/' target="_blankborder"><img src='img/in.png' alt='linked-in logo'></a></span></p>
	</div>

	<script src="extra/script.js"></script>
</body>
</html>