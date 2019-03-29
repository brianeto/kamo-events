<?php

require 'functions.php';

if (isset($_GET['servicio'])) {
    $servicio = $_GET['servicio'];
} else {
    $servicio = '';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
    $destino = 'hola@kamoeventos.com';
    
    //Datos personales
    $servicio_cotizado = limpiarTexto($_POST['servicio_cotizado']);
	$nombre_cliente = limpiarTexto($_POST['nombre_cliente']);
    $correo = limpiarCorreo($_POST['correo']);
    $telefono = limpiarNumero($_POST['telefono']);
    
    //Datos evento
    $cant_asistentes = limpiarNumero($_POST['cant_asistentes']);
    $recinto = limpiarTexto($_POST['recinto']);
    $motivo = $_POST['motivo'];
    $fecha = $_POST['fecha'];
    $hora_inicio = $_POST['hora_inicio'];
    $hora_fin = $_POST['hora_fin'];

    $fotografia = $_POST['fotografia'];
    $sonido = $_POST['sonido'];
    $iluminacion = $_POST['iluminacion'];

    $servicios_adicionales = '';

    if ($fotografia == 1) {
        $servicios_adicionales .= "Fotografía, ";
    } 
    
    if ($sonido == 1){
        $servicios_adicionales .= "Sonido, ";
    } 
    
    if ($iluminacion == 1){
        $servicios_adicionales .= "Iluminación, ";
    }

    //Cabeceras
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: Kamo Eventos <hola@kamoeventos.com>' . "\r\n";
    $cabeceras .= 'From: Cotización <webmaster@kamoeventos.com>' . "\r\n";


    //Contenido enviado
    $contenido ="DATOS PERSONALES" . "\nServicio: " . $servicio_cotizado . "\nNombre: " . $nombre_cliente . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nDATOS DEL EVENTO: " . "\nCantidad de asistentes: " . $cant_asistentes . "\nTipo de recinto: " . $recinto . "\nMotivo: " . $motivo . "\nFecha: " . $fecha . "\nHora de inicio: " . $hora_inicio . "\nHora de finalización: " . $hora_fin;
    
    mail($destino,"Cotización", $contenido, $cabeceras);
    
    /*API REST MAILCHIMP*/

		$datetime=date("d-m-Y H:i:s");
	 
		$server="us20";
		$listid="fd195e593d";
		$apikey="f41d414df3822252c280a0a0de394f8f-us20";
		 
		$auth = base64_encode( 'user:'.$apikey );
		 
		$data = array(
		    'apikey'        => $apikey,
		    'email_address' => $correo,
		    'status'        => 'subscribed',
		    'merge_fields'  => array(
		        'NAME' => utf8_encode( $nombre_cliente ),
		        'PHONE' => utf8_encode( $telefono ),
		        'SERVICE' => utf8_encode( $servicio_cotizado ),
                'CANT' => utf8_encode( $cant_asistentes ),
                'PLACE' => utf8_encode( $recinto ),
                'MOTIVE' => utf8_encode( $motivo ),
                'DATE_EVENT' => utf8_encode( $fecha ),
                'START' => utf8_encode( $hora_inicio ),
                'END' => utf8_encode( $hora_fin ),
                'ADD_SERVI' => utf8_encode( $servicios_adicionales )
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


	//$success .= "Gracias <span class='name-contact'>$nombre_cliente</span> . Estamos cotizando tu servicio";

    header('Location:gracias.php');

	if (!$_POST) {
			$errores .= "Su mensaje no pudo ser enviado";
	}

}

$clSection = "header-static";
require 'views/cotizar.view.php';
?>