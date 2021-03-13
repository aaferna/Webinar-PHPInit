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

			$titulo = $_POST['titulo'];
			$contenido = $_POST['contenido'];

			$QueryResponse = mysqli_query($dbCon, 
				'UPDATE seccion SET titulo = "'.$titulo.'", contenido = "'.$contenido.'" WHERE ids ='.$_GET['id']
			);

			echo mysqli_error($dbCon);
			if ($QueryResponse) {
				echo "Seccion ACTUALIZADA";
			} else {
				echo "Hubo un problema, verifique";
				
			}

		}

	}
	
	
?>