<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Raleway:wght@300;400&family=Slabo+27px&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/2c9543012a.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<title>Galeria</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>
	<div class="contenedor">
		<form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">

			<label for="foto">Selecciona tu foto</label>
			<input type="file" name="foto">

			<label for="titulo">Titulo de la foto</label>
			<input type="text" name="titulo" id="titulo">

			<label for="texto">Descripcion</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>			
			<?php if(isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif; ?>
			<input type="submit" name="submit" class="submit" value="Subir foto">
		</form>
	</div>
	<footer>
		<p class="copyright">Galeria creada por: 
			<img src="img/logoMioPeq.png">
		</p>
	</footer>

</body>
</html>