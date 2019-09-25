<!DOCTYPE html>
<html>
	<head>
		<title>FAKE NEWS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets/normalize/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/reset/reset.css">
		<link rel="stylesheet" type="text/css" href="assets/grid/grid.css">
		<link rel="stylesheet" type="text/css" href="assets/estilo/style.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<header class="header">
			<div class="container logo">
				<a href="#"><img src="assets/img/logo.png"></a>
			</div>
		</header>
		<div class="container noticia">
			<h1>NOTICIAS</h1>
			<hr class="divisa1">
			<hr class="divisa2">	
		</div>
		<section class="menu">
			<div class="container">
				<ul class="noticia_lista rslides">
					<li>
						<div class="grid-4">	
							<a class="textomenu1" href="?pagina=jukes"><img class="imgmenu" src="assets/img/jukes.jpg" alt="jukes">
							<p class="textomenu1">Jukes e Sneaky se casam.</p></a>
						</div>
							<div class="grid-4">	
							<a class="textomenu1" href="?pagina=lula"><img class="imgmenu" src="assets/img/lula.jpg" alt="jukes">
							<p class="textomenu1">Lula cria rebelião e tira bolsonaro do poder</p></a>
						</div>
							<div class="grid-4">	
							<a class="textomenu1" href="?pagina=sasa"><img class="imgmenu" src="assets/img/sasa.jpg" alt="jukes">
							<p class="textomenu1">Sasa da rage ao vivo</p></a>
						</div>
							<div class="grid-4">	
							<a class="textomenu1" href="?pagina=fortnite"><img class="imgmenu" src="assets/img/fort.jpg" alt="jukes">
							<p class="textomenu1">fortnite desbanca Apex</p></a>
						</div>
					</li>
					<li>
							<div class="grid-4 page2">	
							<a class="textomenu2" href="?pagina=MST"><img class="imgmenu" src="assets/img/mst.jpg" alt="jukes">
							<p class="textomenu2">MST é inocente dos casos de propina</p></a>
						</div>
							<div class="grid-4">	
							<a class="textomenu2" href="?pagina=EJ"><img class="imgmenu" src="assets/img/ej.jpg" alt="jukes">
							<p class="textomenu2">EJ ganha premio de melhor escola.</p></a>
						</div>
							<div class="grid-4">	
							<a class="textomenu2" href="?pagina=sneaky"><img class="imgmenu" src="assets/img/sneaky.jpg" alt="jukes">
							<p class="textomenu2">Sneaky faz o melhor cosplay da historia</p></a>
						</div>
					</li>
				</ul>	
			</div>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
			<script src="js/plugins.js"></script>
			<script src="js/main.js"></script>
		</section>
		<div class="container cont">
			<?php 
				error_reporting(E_all^E_notice);
				error_reporting(E_all^E_warning);
				$pagina = $_GET[pagina]; 

				if ($pagina == "jukes") {
					include "jukes.php";
				}else if ($pagina == "lula") {
					include "lula.php";
				}
				else if ($pagina == "sasa") {
					include "sasa.php";
				}
				else if ($pagina == "fortnite") {
					include "fortnite.php";
				}else if ($pagina == "MST") {
					include "MST.php";
				}
				else if ($pagina == "EJ") {
					include "EJ.php";
				}
					else if ($pagina == "sneaky") {
					include "sneaky.php";
				}
				else{
					include "jukes.php";
				}

			?>
		</div>
		<section class="quebra">
			<div class="container">
			<blockquote>
				<hr class="citebar">
				<p>Os homens não viveriam muito tempo em sociedade se não fossem enganados uns pelos outros.</p>
				<hr class="citebarra">
				<cite><p>La Rochefoucauld</p></cite>
			</blockquote>
			</div>
		</section>
		<section class="roda">
			<div class="container"> 
				<div class="grid-8">
					<p class="rodatitu">Sobre</p>
					<hr class="barraroda">	
					<p class="textoroda">
						O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana cotidiana.
						interesse por todos os detalhes da vida cotidiana cotidiana.
					</p>
				</div>
				<div class="grid-4">
					<p class="rodatitu">Contato</p>
					<hr class="barraroda">	
					<ul>
						<li>-(48) 4002-8922</li>
						<li>-contato@gmail.fake.news</li>
						<li>-@fakenewsPT</li>
					</ul>
				</div>
				<div class="grid-4">
					<p class="rodatitu">Redes sociais</p>
					<hr class="barraroda">	
					<a class="twitter" href="#"><img src="twitter.png"></a>
					<a href="#"><img src="face.png"></a>
				</div>
			</div>
		</section>
	</body>
</html>