<?php

include_once 'dbaccess.php';

function sql_prepare ($data) {
  $data = utf8_decode($data);
  $data = str_replace("'", "''", $data );
  return $data;
}

$user = sql_prepare($_REQUEST["user"]);
$comm = sql_prepare($_REQUEST["comm"]);


if($comm != "" && $user != "")
{
	$query = $sql = "insert into commentaires(datetime, nom, commentaire) values (datetime(), '$user', '$comm');";
	
	DBAccess::exec($query);
	
	$to = "vincent.carle06@gmail.com, carle.rene@wanadoo.fr, rcarle@assemblee-nationale.fr, hleibovitch@assemblee-nationale.fr, 404jpc@gmail.com";
  
  //$to = "vincent.carle06@gmail.com";
	
	$subject = "[Pronos TDF] Nouveau commentaire !";
	$message = "Bonjour,<br/><br/>Un nouveau commentaire a été posté par <b>".utf8_encode(str_replace("''", "'", $user)).
			   "</b> :<br/><i>".utf8_encode(str_replace("''", "'", $comm))."</i>" .
			   "<br/><br/>Retrouvez les pronos mis à jour en temps réel: http://www.babouch.fr/tdf/" .
			   "<br/><br/>Miaou!<br/>Babouch.<br/>";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: miaou@babouch.fr\r\n";
	
  @mail($to, $subject, $message, $headers);
}

include 'comm_list.php';


?>
