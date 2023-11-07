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
			<h1 class="titulo">Galeria de imagenes en PHP</h1>
		</div>
	</header>
	<section class="fotos">
		<div class="contenedor">
			<?php foreach($fotos as  $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="<?php echo $foto['imagen']; ?>" alt="">
					</a>
				</div>		
			<?php endforeach; ?>

			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual -1 ;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i>Pagina Anterior</a>
				<?php endif ?>
				
				<?php if ($total_paginas != $pagina_actual): ?>	
					<a href="index.php?p=<?php echo $pagina_actual +1 ;?>" class="derecha">Pagina Siguiente<i class="fa fa-long-arrow-right"></i></a>
				<?php endif ?>	
			</div>
		</div>		
	</section>
	<footer>
		<p class="copyright">Galeria creada por: 
			<img src="img/logoMioPeq.png">
		</p>
	</footer>

</body>
</html>