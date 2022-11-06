<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('andysevas2@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}else {
            echo "nose envio"
        }
 ?>