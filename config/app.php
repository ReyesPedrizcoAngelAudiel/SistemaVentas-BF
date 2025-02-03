<?php

	const APP_URL="http://localhost/VENTAS/";
	const APP_NAME="VENTAS";
	const APP_SESSION_NAME="POS";

	/*----------  Tipos de documentos  ----------*/
	const DOCUMENTOS_USUARIOS=["DUI","DNI","Cedula","Licencia","Pasaporte","Otro"];

	/*----------  Tipos de unidades de productos  ----------*/
	const PRODUCTO_UNIDAD=["Unidad","Caja","Sobre","Tarjeta","Otro"];

	/*----------  Configuración de moneda  ----------*/
	const MONEDA_SIMBOLO="$";
	const MONEDA_NOMBRE="MX";
	const MONEDA_DECIMALES="2";
	const MONEDA_SEPARADOR_MILLAR=",";
	const MONEDA_SEPARADOR_DECIMAL=".";


	/*----------  Marcador de campos obligatorios (Font Awesome) ----------*/
	const CAMPO_OBLIGATORIO='&nbsp; <i class="fas fa-edit"></i> &nbsp;';

	/*----------  Zona horaria  ----------*/
	date_default_timezone_set("America/Mexico_City");