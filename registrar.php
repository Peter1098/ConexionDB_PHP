<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 
	&& strlen($_POST['correo']) >= 1 
	&& strlen($_POST['empresa']) >= 1 
	&& strlen($_POST['inicio']) >= 1 
	&& strlen($_POST['fin']) >= 1 
	&& strlen($_POST['ocupantes']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $correo = trim($_POST['correo']);
		$empresa = trim($_POST['empresa']);
	    
		$inicio = trim($_POST['inicio']);
		$in = trim($_POST['fin']);
		$ocupantes = trim($_POST['ocupantes']);
		
		$consulta = "INSERT INTO datos( nombre, correo, empresa, inicio, fin, ocupantes) VALUES ('$nombre','$correo','$empresa','$inicio','$fin','$ocupantes')";
	  
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>