<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Registro!</h1>
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="email" name="correo" placeholder="Email">
		<input type="text" name="empresa" placeholder="Empresa">
		<input type="text" name="inicio" placeholder="Hora de inicio">
    	<input type="number" name="fin" placeholder="hora de fin">
		<input type="number" name="ocupantes" placeholder="Numero de Ocupantes">
		
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>