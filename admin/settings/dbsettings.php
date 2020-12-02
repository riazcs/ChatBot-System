<?php
/*
Database Connection settings will be defined  hare
*/

define('SPHOST','localhost');
define('SPUSER','root');
define('SPPASS','123');
define('SPDB','chatbot');

$sp=new mysqli(SPHOST,SPUSER,SPPASS,SPDB);

if($sp->connect_errno){
	echo "Check Host Connection<br/>";
}
?>
