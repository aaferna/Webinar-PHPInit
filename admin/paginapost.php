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

			$QueryResponse = mysqli_query($dbCon, 'INSERT INTO seccion (titulo, contenido) VALUES ("'.$titulo.'", "'.$contenido.'")');

			echo mysqli_error($dbCon);

			if ($QueryResponse) {
				echo "Nueva seccion creada";
			} else {
				echo "Hubo un problema, verifique";
				
			}

		}

	}
	
	
?>