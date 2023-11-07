<?php
function conexion($tabla, $usuario,$pass)
{
	try{
		$conexion = new PDO("mysql:host=localhost; dbname=galeria", 'root', '');
		return $conexion;
	}catch(PDOException $e){
		return false;
	}
}
?>