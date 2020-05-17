<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enviando Correo</title>
</head>
<body>
<?php
	$nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$contenido = $_POST["contenido"];
	$telefono = $_POST["telefono"];
/*Entre las comillas de $para, después del signo igual, ponga el correo donde usted quiere 
	recibir los mensajes enviados desde este formulario de contacto, estos pueden ser de: 
	Gmail, Hotmail, Yahoo o cualquier otro, suba los 3 archivos que bajó, al hosting que quiera y
	recibirá los mensajes correctamente, no cambie nada más; si tiene dudas me envía su pregunta a este correo:*/
	$para = "luisdiaz3107@gmail.com,luisdiaz3107@hotmail.com,ing.elvingonzalez@gmail.com";
	$asunto = "Mensaje enviado desde www.lerrede.com ";
	$mensaje = "Nombre del remitente: ".$nombre."
	Correo: ".$correo."
	Comentario: ".$contenido."
	Telefono: ".$telefono."
	";
	mail($para,$asunto,$header,utf8_decode($mensaje));
	$header .= 'From: ' . $correo . " \r\n";
	$header .= "X-Mailer: PHP/".phpversion(). " \r\n"; 
	$header .= "Mime-Version: 1.0 \r\n"; 
	$header .= "Content-Type: text/plain";
	
echo "<script>
		alert('Datos enviados correctamente, pronto sera contactado');
	location.href='../index.html';

		</script>";

?>
</body>
</html>