<?php
error_reporting(E_ALL ^ E_DEPRECATED);
Class Conexion{
	function conectarse(){
							//("IP o servidor","usuario","contraseña")
   // if (!($link=mysql_connect("localhost","u680532103_root","admin123"))) 
		if (!($link=mysql_connect("mysql.hostinger.mx","u246872483_sml","smartLines."))) 
		{
			echo "Error en la conexion.";
			exit();
		}
	//if (!mysql_select_db("u680532103_carp",$link)) 
		if (!mysql_select_db("u246872483_menu",$link))
		{
			echo "Error seleccionando la base de datos.";
			exit();
		}
		return $link;
	}
}