<?php

include_once 'dbaccess.php';

$commentaires = DBAccess::query("select * from commentaires order by datetime desc");

print json_encode($commentaires, JSON_PRETTY_PRINT);


?>
