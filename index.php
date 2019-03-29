<?php

require 'functions.php';

$success = '';
$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
    $destino = 'hola@kamoeventos.com';
    
    //Datos personales
    $nombre = limpiarTexto($_POST['nombre']);
    $correo = limpiarCorreo($_POST['correo']);
    $telefono = limpiarNumero($_POST['telefono']);
    $nombre_empresa = limpiarTexto($_POST['nombre_empresa']);
    $mensaje = limpiarTexto($_POST['mensaje']);
    
    //Cabeceras
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: Kamo Eventos <hola@kamoeventos.com>' . "\r\n";
    $cabeceras .= 'From: Contacto <webmaster@kamoeventos.com>' . "\r\n";


    //Contenido enviado
    $contenido ="Nombre: " . $nombre . "\nNombre empresa: " . $nombre_empresa . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
    
    mail($destino,"Contacto web", $contenido, $cabeceras);
    
    /*API REST MAILCHIMP*/

		$datetime=date("d-m-Y H:i:s");
	 
		$server="us20";
		$listid="55e32d139f";
		$apikey="f41d414df3822252c280a0a0de394f8f-us20";
		 
		$auth = base64_encode( 'user:'.$apikey );
		 
		$data = array(
		    'apikey'        => $apikey,
		    'email_address' => $correo,
		    'status'        => 'subscribed',
		    'merge_fields'  => array(
		        'NAME' => utf8_encode( $nombre ),
		        'PHONE' => utf8_encode( $telefono ),
		        'COMPANY' => utf8_encode( $nombre_empresa ),
                'MESSAGE' => utf8_encode( $mensaje )
		        )
		    );
		 
		$json_data = json_encode($data);
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'.api.mailchimp.com/3.0/lists/'.$listid.'/members/');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: Basic '.$auth));
		curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		 
		$response = curl_exec($ch);


	$success .= "Gracias <span class='name-contact'>$nombre</span> . Pronto nos pondremos en contacto";

	if (!$_POST) {
			$errores .= "Su mensaje no pudo ser enviado";
	}

}

$clSection = "header-sticky";
require 'views/index.view.php';
?>