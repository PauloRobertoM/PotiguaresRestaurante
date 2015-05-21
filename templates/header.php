<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Agência dos Mares - Comunicação Digital." />
		<meta name="keywords" content="Código Limpo, Desenvolvimento Web, HTML5, Desenvolvimento Ágil" />
		<meta name="author" content="Agência dos Mares" />
		<meta name="reply-to" content="contato@agenciadosmares.com.br" />

		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/my-style.css" />
	</head>
	<body>
		<header>
			<div class="row">
				<div class="span4 my-logo">
					<a href="index.php"><img src="img/Logo.png" alt="Logo - Potiguares Restaurante" /></a>
				</div> <!-- Close DIV LOGO -->
				<div class="span2 my-redes-sociais">
					<a href="#"><img src="img/facebook.png" alt="Facebook" /></a>
					<a href="#"><img src="img/twiter.png" alt="Twiter" /></a>
				</div>
			</div>

			<div class="row">
				<div id="my-carousel" class="carousel slide">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="active item">
							<img class="my-slide" src="img/SlidePeixe.png" alt="slide - Peixe" />
						</div>
						<div class="item">
							<img class="my-slide" src="img/Logo.png" alt="slide - Logo" />
						</div>
						<div class="item">
							<img class="my-slide" src="img/SlidePeixe.png" alt="slide - Peixe" />
						</div>
					</div>
				</div> <!-- Carousel -->
			</div>
			<div class="container">
				<nav class="my-menu">
					<ul class="nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="cardapio.php">Cardapio</a></li>
						<li><a href="novidades.php">Novidades</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div> <!-- Close DIV MENU -->
			</div>

			<div class="container">
				<div class="row my-novidades">
					<div class="span3">
						<img src="img/Prato1.png" alt="" />
					</div>
					<div class="span9 my-novidades-corpo">
						<a href="novidades.php">Novidades</a><br />
						<span>Lorem ipsum dolor sit amet</span>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. 
						Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum.</p>
					</div>
				</div>
			</div>
		</header> <!-- Close header -->

		<!-- ************ Scripts ********** -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  		<script type="text/javascript" src="js/my-functios.js"></script>
  		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script>
	        $('#my-carousel').carousel({interval: 3000})
	    </script>
	</body>
</html>