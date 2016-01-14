<?php

if(isset($_POST['mensaje']) && !empty($_POST['mensaje']) ){

	$destino = "fedeguastadisegni@gmail.com";
	$desde = "From:"."Nueva consulta";
	$asunto = "Nueva consulta";
	$mensaje = "Nombre:".$_POST['nombre']."\n"
	."Teléfono: ".$_POST['telefono']."\n".
	"Email:" .$_POST['email']."\n".
	"Mensaje:". $_POST['mensaje'];

	mail($destino, $asunto, $mensaje,$desde);

	$url='http://www.gmpasteles.netau.net/enviado.html';
	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

}



?>