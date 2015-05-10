<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Potiguares Restaurante</title>
	</head>
	<body>
		<div class="row">
			<!-- ********* Chamada do header.PHP ********* -->
			<?php include("templates/header.php"); ?>

			<div class="container">
				<div class="row">
					<section class="my-section-index">
						<div class="row my-novidades">
							<div class="span3">
								<img src="img/Prato1.png" alt="" />
							</div>
							<div class="my">
							<div class="span9">
								<a href="novidades.php">Novidades</a><br />
								<span>Lorem ipsum dolor sit amet</span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. 
								Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum.</p>
							</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>

		<!-- ********* Chamada do footer.PHP ********* -->
		<?php include("templates/footer.php"); ?>
		
	</body>
</html>