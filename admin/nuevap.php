
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Admin -- PHPInit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">Admin</a>
				<nav>
					<ul>
						<li><a href="./">Principal</a></li>
						<li><a href="./nuevap.php">Nueva Seccion</a></li>
						<li><a href="./config.php">Config</a></li>
					</ul>
				</nav>
			</header>

			<div id="wrapper">
				<section id="main" class="wrapper">
					<div class="inner">
						<h1 class="major">Nueva Secciones</h1>
						<span class="image fit"><img src="images/pic04.jpg" alt="" /></span>
						<section>
							<form method="post" action="./paginapost.php">
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="titulo" id="demo-name" placeholder="Nombre de Seccion" placeholder="Name">
									</div>
									
									<div class="col-12">
										<textarea name="contenido" id="demo-message" placeholder="Ingrese su contenido" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Guardar" class="primary"></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</section>
			</div>

			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>