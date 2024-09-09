<?php
	function conexion(){

	$host = "host=dpg-cr6g02a3esus73f3csp0-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=dbprueba_uedf";
	$user = "user=dbprueba_uedf_user";
	$password = "password=jezaPXiINEhYqBgatXB8C9m7xt8RBSV2";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>
