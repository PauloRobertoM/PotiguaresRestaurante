<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Potiguares Restaurante</title>
	</head>
	<body>
		<div class="row">
			<!-- ********* Chamada do header.PHP ********* -->
			<?php include("templates/header.php"); ?>
			<section class="my-section-index">
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

				<div class="row my-pratos-principais">
					<div class="container">
						<div class="row my-link">
							<a href="#">Partos Principais</a>
						</div>

						<div class="row my-pratos-blocos">
							<div class="span3 my-bloco">
								<img src="img/Prato1.png" alt="" />
								<h3>Lorem Ipisum</h3>
								<span>Lorem Ipisum</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus.</p>
								<div class="my-mais">
									<span>+Mais</span>
								</div>
							</div>
							<div class="span3 my-bloco">
								<img src="img/Prato2.png" alt="" />
								<h3>Lorem Ipisum</h3>
								<span>Lorem Ipisum</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus.</p>
								<div class="my-mais">
									<span>+Mais</span>
								</div>
							</div>
							<div class="span3 my-bloco">
								<img src="img/Prato3.png" alt="" />
								<h3>Lorem Ipisum</h3>
								<span>Lorem Ipisum</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus.</p>
								<div class="my-mais">
									<span>+Mais</span>
								</div>
							</div>
							<div class="span3 my-bloco">
								<img src="img/Prato4.png" alt="" />
								<h3>Lorem Ipisum</h3>
								<span>Lorem Ipisum</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus.</p>
								<div class="my-mais">
									<span>+Mais</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container my-comentarios">
						<a href="#">Comentários</a>
						<div id="my-carousel" class="carousel my-coment">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="active item">
									<img class="span3" src="img/PratoNovidade.png" alt="" />
									<p class="span8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
								</div>
								<div class="item">
									<img class="span3" src="img/PratoNovidade.png" alt="" />
									<p class="span8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
								</div>
								<div class="item">
									<img class="span3" src="img/PratoNovidade.png" alt="" />
									<p class="span8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
								</div>
							</div>
						</div> <!-- Carousel -->
					</div>
			</section>
		</div>

		<!-- ********* Chamada do footer.PHP ********* -->
		<?php include("templates/footer.php"); ?>
		
	</body>
</html>