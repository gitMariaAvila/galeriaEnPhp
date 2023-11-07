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
			<h1 class="titulo">Foto: <?php if(!empty($foto['titulo'])) 
			{echo $foto['titulo'];
			}else{
				echo $foto['imagen'];
			}; ?></h1>
		</div>
	</header>
	<div class="contenedor">
		<div class="foto">
			<img src="<?php echo $foto['imagen']; ?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
		
	</div>
	<footer>
		<p class="copyright">Galeria creada por: 
			<img src="img/logoMioPeq.png">
		</p>
	</footer>

</body>
</html>