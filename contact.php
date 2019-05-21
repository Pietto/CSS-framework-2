<!DOCTYPE html>
<html>
<head>
	<?php include 'extra/head.php';?>
	<title>CONTACT</title>
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
		      	<li class="active"><a href="contact.php">Contact</a></li>
		    </ul>
		  	<img src="img/me.jpg" id='profilepic' alt="picture">
		</div>
	</nav>


	
	<h1 id='contact-header'>Contact</h1>

	<div id='contact-form'>
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
		        $name = strip_tags($_POST['name']);
		        $email = strip_tags($_POST['email']);
		        $telefoonnummer = strip_tags($_POST['telefoonnummer']);
		        $msg = strip_tags($_POST['msg']);
		    }
    	?>
		<form method='post'>
			<div class='form-group row row1'>
				<p class="text-center">Naam: <span id='empty1' style='color: red'></span></p>
				<input class="center-block" type="text" name="name" value='<?php echo $name; ?>' placeholder="Voornaam + Achternaam" maxlength='1000'>
			</div>
			<div class='form-group row row2'>
				<p class="text-center">E-mail <span id='empty2' style='color: red'></span>:</p>
				<input class="center-block" type="text" name="email" value='<?php echo $email; ?>' placeholder="example@example.com" maxlength='1000'>
			</div>
			<div class='form-group row row3'>
				<p class="text-center">telefoonnummer: <span id='empty3' style='color: red'></span></p>
				<input class="center-block" type="text" name="telefoonnummer" value='<?php echo $telefoonnummer; ?>' placeholder="(06) 12345678" maxlength='1000'>
			</div>
			<div class='form-group row row4'>
				<p class="text-center">vraag: <span id='empty4' style='color: red'></span></p>
				<textarea class="form-control vresize" name ='msg' rows="5" id="message" placeholder="Type hier uw bericht..."><?php echo $msg; ?></textarea>
			</div>
			<input type='submit' id='submit' class='center-block'>
		</form>
	</div>


	<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["telefoonnummer"]) || empty($_POST["msg"])){
                        echo "<script>alert('U heeft niet alle velden (correct) ingevuld')</script>";
                        checkmissingarea();
                    }else{
                    	echo '<Script>console.log("'.'naam: 			'.$name.'");</script>';	
                    	echo '<Script>console.log("'.'E-mail: 		'.$email.'");</script>';	
                    	echo '<Script>console.log("'.'telefoonnummer: '.$telefoonnummer.'");</script>';	
                    	echo '<Script>console.log("'.'bericht: 		'.$msg.'");</script>';                    }
                }
                function checkmissingarea(){
                	if(empty($_POST["name"])){
                		echo '<script>document.getElementById("empty1").innerHTML="*";</script>';
                		echo '<Script>document.getElementById("empty1").style.fontSize="1.5vw";</script>';
                	}
                	if(empty($_POST["email"])){
                		echo '<script>document.getElementById("empty2").innerHTML="*";</script>';
                		echo '<Script>document.getElementById("empty2").style.fontSize="1.5vw";</script>';
                	}
                	if(empty($_POST["telefoonnummer"])){
                		echo '<script>document.getElementById("empty3").innerHTML="*";</script>';
                		echo '<Script>document.getElementById("empty3").style.fontSize="1.5vw";</script>';
                	}
                	if(empty($_POST["msg"])){
                		echo '<script>document.getElementById("empty4").innerHTML="*";</script>';
                		echo '<Script>document.getElementById("empty4").style.fontSize="1.5vw";</script>';
                	}
                }
            ?>



	<div id='footer'>
		<p><?php echo '&copy;20',date('y'),' Pieterjan van Dijk'; ?><span><a href='https://www.linkedin.com/in/pieterjan-van-dijk-82b320182/' target="_blankborder"><img src='img/in.png' alt='linked-in logo'></a></span></p>
	</div>

	<script src="extra/script.js"></script>
</body>
</html>