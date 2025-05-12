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

			<!--Logo-->
			<?php include './components/logo.php'; ?>

			<!-- Nav -->
			<?php include './components/nav.php'; ?>

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
						<?php include './components/posts.php' ?>

					</div>
				</div>
			</div>
		</section>

		<!-- Footer -->
		<?php include './components/footer.php' ?>

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