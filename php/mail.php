	<?php
	
	$mail="contacto@fiveeways.com ";
	$thank="http://www.fiveeways.com";
	
	$nombre=$_POST['nombre'];
	$mailU=$_POST['e-mail'];
	$telefono=$_POST['telefono'];
	$comentario=$_POST['comentario'];
	
		$message = " Contacto Five E-Ways. \r\n Nombre del Usuario: ".$nombre." \r\n Correo del Usuario: ".$mailU." \r\n Numero Telefonico: ".$telefono." \r\n Comentario: ".$comentario." \r\n Contacto Realizado en: ".$thank." \r\n ";
		
		$message2= " Contacto Five E-Ways. Agradecemos tu preferencia, usuario: '".$nombre."' \r\n Gracias por visitarnos en: '".$thank."' \r\n ";
		
			if(mail($mailU, "Five E-Ways agradecemos tu preferencia 
!", $message2)){
	}
	if(mail($mail, "Contacto Five E-Ways", $message)){
}

	echo "
	<script>
	document.location.href=('../index.html');
	</script>
";

	?>