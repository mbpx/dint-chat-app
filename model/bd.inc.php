<?php	

/*
*	Conexión a la base de datos
*	E:
*	S: conn (variable de tipo connection)
*	SQL:
*/
function connection() {
	return true;
}

/*
*	Comprueba login
*	E:
*	S: booleano: conexión correcta
*	SQL: select * from usuarios WHERE tfno = $_POST['usuario'] AND pass = $_POST['pass']
*/
function login_ok()	{
	
	return true;
}

/*
*	Guardar el mensaje en la BD
*	E:
*	S:boolean: operación correcta
*	SQL: INSERT into Escribe (texto, adjunto) values ($_POST['contestar'], $_POST['b1']);
*		 
*		 SELECT idMensaje, texto, fecha, hora, fichero, telefono from Escribe
*/
function guardar_mensaje() {
	return true;
}

/*
*	Funcion que modifica el perfil
*	E:
*	S:
*	SQL: UPDATE into usuario ...
*/
function perfil_modificado() {
	return true;
}

/*
*	Comprueba el máximo número de caracteres del texto del estado del 
* 	usuario, configurable 
*	E:
*	S: booleano: número correcto
*	SQL: 
*/
function maximo_caracteres_estado() {
	return true;
}

/*
*	Guarda el color seleccionado en el fichero de configuración
*	E:
*	S: com
*	SQL:

*/
function color_seleccionado() {
	return true;
}

/*
*	Comprueba el tamaño de la imagen seleccionada, el tamaño de la 
* 	imagen estara en el fichero de configuración
*	E:
*	S: booleano: tamaño correcto
*	SQL: 
*/
function tamaño_img() {
	return true;
}


/*
*	Función que guarda el chat en un fichero backup.txt
*	E:
*	S: booleano: guardado correctamente
*	SQL:
*/
function backup_chat() {
	return true;
}




?>
