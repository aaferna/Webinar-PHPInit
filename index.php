<?php
	
	$dbCon = mysqli_connect(
				'localhost', // Servidor
				'root', // Usuario
				'', // Clave
				'phpinit'  // Base de Datos
			);

	if (!$dbCon) { echo "Hubo un problema con la base de datos"; }
	else { 

		mysqli_set_charset($dbCon, "utf8");

		$QueryResponse1 = mysqli_query($dbCon, 'SELECT * FROM alma');
		$respose = mysqli_fetch_array($QueryResponse1);

		$QueryResponse3 = mysqli_query($dbCon, 'SELECT ids, titulo FROM seccion');

		$var1 = $respose['nombreSitio']; // TITULO
		$var2 = $respose['facebook']; // FACEBOOK
		$var3 = $respose['instagram'];// INSTAGRAM

		if (isset($_GET['pagina'])) {

			$QueryResponse2 = mysqli_query($dbCon, 'SELECT * FROM seccion WHERE ids ='.$_GET['pagina']);
			$respose = mysqli_fetch_array($QueryResponse2);

			$titulo = $respose['titulo']; // TITULO
			$contenido = $respose['contenido']; // FACEBOOK
				
		} else {

			$QueryResponse2 = mysqli_query($dbCon, 'SELECT * FROM seccion WHERE ids = 1');
			$respose = mysqli_fetch_array($QueryResponse2);

			$titulo = $respose['titulo']; // TITULO
			$contenido = $respose['contenido']; // FACEBOOK


		}

	}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $var1; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			<header id="header">
				<a href="index.html" class="title"><?php echo $var1; ?></a>
				<nav>
					<ul>

						<?php 

						while ($respose = mysqli_fetch_array($QueryResponse3)) { ?>

							<li><a href="./?pagina=<?php echo $respose['ids']; ?>"><?php echo $respose['titulo']; ?></a></li>

						<?php } ?>


					</ul>
				</nav>
			</header>
			<div id="wrapper">
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major"><?php echo $titulo; ?></h1>
								<?php echo $contenido; ?>
						</div>
					</section>
			</div>
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li><a href="<?php echo $var2 ?>">FACEBOOK</a></li><li><a href="<?php echo $var3 ?>">INSTAGRAM</a></li>
					</ul>
				</div>
			</footer>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

