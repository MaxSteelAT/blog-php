<?php
require 'db.php';
$posts = $db->query("SELECT * FROM post ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Blog</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/form.css" />
	<link rel="stylesheet" href="assets/css/main.css" />

</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">

			<!-- Logo -->
			<h1><a href="index.html">My Astrology Blog</a></h1>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li class="current"><a href="index.html">Home</a></li>
					<li>
						<a href="#">Astrolgía</a>
						<ul>
							<li><a href="#">Signos zodiacales</a></li>
							<li><a href="#">Cartas astrales</a></li>
							<li><a href="#">Movimientos planetarios</a></li>
							<li><a href="#">Astrología y relaciones</a></li>
							<li><a href="#">Astrología predictiva</a></li>
						</ul>
					</li>
					<li>
						<a href="left-sidebar.html">Numerología</a>
						<ul>
							<li><a href="#">Combinaciones numéricas</a></li>
							<li><a href="#">Significado de los números</a></li>
							<li><a href="#">Número del camino de vida</a></li>
							<li><a href="#">Año personal</a></li>
						</ul>
					</li>
					<li>
						<a href="right-sidebar.html">Runas</a>
						<ul>
							<li><a href="#">Significado de las runa</a></li>
							<li><a href="#">Lecturas y tiradas básicas</a></li>
							<li><a href="#">Runas como guía</a></li>
						</ul>
					</li>
					<li>
						<a href="no-sidebar.html">Cristales</a>
						<ul>
							<li><a href="#">Tipos de cristales</a></li>
							<li><a href="#">Usos y propósitos</a></li>
							<li><a href="#">Cómo limpiarlos y activarlos</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Blog Personal</h2>
					<p>"El tarot no predice el futuro, te muestra el camino."</p>
				</header>
			</section>

			<!-- Intro -->
			<section id="intro" class="container">
				<div class="row">
					<div class="col-4 col-12-medium">
						<section class="first">
							<i class="icon solid featured fa-cog"></i>
							<header>
								<h2>Tarot</h2>
							</header>
							<p>
								"El tarot es un lenguaje simbólico que conecta tu intuición con el universo, revelando caminos,
								respuestas y verdades ocultas."
							</p>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="middle">
							<i class="icon solid featured alt fa-bolt"></i>
							<header>
								<h2>Numerología</h2>
							</header>
							<p>
								"La numerología es el arte de descubrir el significado oculto de los números que te rodean, revelando
								tu esencia, destino y energía personal."
							</p>
						</section>
					</div>
					<div class="col-4 col-12-medium">
						<section class="last">
							<i class="icon solid featured alt2 fa-star"></i>
							<header>
								<h2>Cristales</h2>
							</header>
							<p>
								"Formados por la sabiduría del tiempo, los cristales guardan vibraciones que despiertan la luz y el
								equilibrio en ti."
							</p>
						</section>
					</div>
				</div>
			</section>

		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<!-- Add articles -->
						<section class="add-articles-container">
							<header class="major">
								<h2>Agregar nuevo artículo</h2>
							</header>

							<form class="add-form" action="add.php" method="POST">
								<header>
									<h2>Título</h2>
								</header>

								<input class="input-article" type="" name="title" placeholder="Título" required>
								<textarea class="input-article add-tex" name="article" placeholder="Nuevo artículo" required></textarea>
								<input class="input-article" type="" name="image" placeholder="URL de la imagen" required>
								<button type="submit">Agregar</button>
							</form>
						</section>
						<!-- Blog -->
						<section>
							<header class="major">
								<h2>Lo más relevante del momento</h2>
							</header>
							<div class="row">
								<?php foreach ($posts as $post): ?>
									<div class="col-6 col-12-small">
										<section class="box">
											<a href="#" class="image featured"><img src="<?= $post['image'] ?>"
													alt="<?= $post['title'] ?>" /></a>
											<header>
												<h3><?= $post['title'] ?></h3>
												<!-- <p>Posted 45 minutes ago</p> -->
											</header>
											<p>
												<?= $post['article'] ?>
											</p>
											<!-- <footer>
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file-alt">Continue Reading</a></li>
											</ul>
										</footer> -->
										</section>
									</div>
								<?php endforeach; ?>

							</div>
						</section>

					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-8 col-12-medium">

						<!-- <section>
							<header>
								<h2>Blandit nisl adipiscing</h2>
							</header>
							<ul class="dates">
								<li>
									<span class="date">Jan <strong>27</strong></span>
									<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
									<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
								</li>
								<li>
									<span class="date">Jan <strong>23</strong></span>
									<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
									<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
								</li>
								<li>
									<span class="date">Jan <strong>15</strong></span>
									<h3><a href="#">Magna tempus lorem feugiat</a></h3>
									<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
								</li>
								<li>
									<span class="date">Jan <strong>12</strong></span>
									<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
									<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
								</li>
								<li>
									<span class="date">Jan <strong>10</strong></span>
									<h3><a href="#">Blandit tempus aliquam?</a></h3>
									<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
								</li>
							</ul>
						</section> -->
					</div>
					<div class="col-4 col-12-medium">
						<!-- <section>
							<header>
								<h2>What's this all about?</h2>
							</header>
							<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
							<p>
								This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by
								<a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released
								for free under
								the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use
								it for any personal or commercial project &ndash; just don't forget to credit us!
							</p>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button">Find out more</a></li>
								</ul>
							</footer>
						</section> -->
					</div>
					<div class="col-4 col-6-medium col-12-small">

						<!-- Copyright -->
						<div id="copyright">
							<ul class="links">
								<li>&copy; Blog. All rights reserved.</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>