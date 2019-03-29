<?php

function limpiarCorreo($correo)
{
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	return $correo;
}

function limpiarTexto($dato)
	{
		$dato = filter_var($dato, FILTER_SANITIZE_STRING);
		return $dato;
	}

function limpiarNumero($numero)
	{
		$numero = filter_var($numero, FILTER_SANITIZE_NUMBER_INT);
		return $numero;
	}