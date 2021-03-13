<?php 
	
	if (isset($_POST)) {

		$dbCon = mysqli_connect(
			'localhost', // Servidor
			'root', // Usuario
			'', // Clave
			'phpinit'  // Base de Datos
		);

		if (!$dbCon) { echo "Hubo un problema con la base de datos"; }
		else { 

			$nombreSitio = $_POST['nombreSitio'];
			$facebook = $_POST['facebook'];
			$instagram = $_POST['instagram'];


			$QueryResponse = mysqli_query($dbCon, 'UPDATE alma SET 	nombreSitio = "'.$nombreSitio.'", 
																	facebook = "'.$facebook.'", 
																	instagram = "'.$instagram.'" WHERE id = 1');

			if ($QueryResponse) {
				echo "Seccion ACTUALIZADA";
			} else {
				echo "Hubo un problema, verifique";
				
			}

		}

	}
	
	
?>