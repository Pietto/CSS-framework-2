<!DOCTYPE html>
<html>
<head>
  <?php include 'extra/head.php';?>
	<title>ABOUT ME</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		      	<a class="navbar-brand" href="#">Pieterjan van Dijk</a>
		    </div>
		    <ul class="nav navbar-nav">
		      	<li><a href="home.php">Introductie</a></li>
		      	<li class="active"><a href="gallery.php">Photo gallery</a></li>
		      	<li><a href="aboutme.php">Over mij</a></li>
		      	<li><a href="contact.php">Contact</a></li>
		    </ul>
		  	<img src="img/me.jpg" id='profilepic' alt="picture">
		</div>
	</nav>

	<div class="container-c"> 
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">


    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
      			<li data-target="#myCarousel" data-slide-to="3"></li>
      			<li data-target="#myCarousel" data-slide-to="4"></li>
      			<li data-target="#myCarousel" data-slide-to="5"></li>
    		</ol>


    		<div class="carousel-inner">
      			<div class="item active">
        			<img src="img/sites/site1.png" alt="slide 1" style="width:100%;">
      			</div>

      			<div class="item">
        			<img src="img/sites/site2.png" alt="slide 2" style="width:100%;">
      			</div>
    
      			<div class="item">
        			<img src="img/sites/site3.png" alt="slide 3" style="width:100%;">
      			</div>

      			<div class="item">
        			<img src="img/sites/site4.png" alt="slide 4" style="width:100%;">
      			</div>

      			<div class="item">
        			<img src="img/sites/site5.png" alt="slide 5" style="width:100%;">
      			</div>

      			<div class="item">
        			<img src="img/sites/site6.png" alt="slide 6" style="width:100%;">
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

	<div id='splitter-c'>
		<h1></h1>
	</div>


	<div id='footer'>
		<p><?php echo '&copy;20',date('y'),' Pieterjan van Dijk'; ?><span><a href='https://www.linkedin.com/in/pieterjan-van-dijk-82b320182/' target="_blankborder"><img src='img/in.png' alt='linked-in logo'></a></span></p>
	</div>

	<script src="extra/script.js"></script>
</body>
</html>