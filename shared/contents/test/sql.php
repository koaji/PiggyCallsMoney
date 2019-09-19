<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	try{
		$pdo = new PDO ( 'mysql:host=localhost;dbname=mydb;charset=utf8', 'root', 'vagrant' );
		$sql = $pdo->query ( 'select * from user' );

		print("<table border=3 >\n");
		foreach( $sql->fetchAll() as $row){
			print("	<tr>\n");
			print("		<td> ${row['id']} </td>");
			print("		<td> ${row['name']} </td>");
			print("\n	</tr>\n");
		}
		print("</table>");
	} catch (PDOException $e) {
		print('Error: ' . $e->getMessage());
	}
?>