<?php
$config = "<?php
// Neutron Group © 2012 Todos los derechos reservados
// © 2009 - 2012 TeamSmart Network - Digital Solutions
// © 2012 - 2013 Paradise CMS
// Diseñado por Andres Ramirez & Zilthex
".'$'."hotelname = '".$_POST['hotelname']."';
".'$'."mysqlserver = '".$_POST['mysqlserver']."';
".'$'."mysqlusername = '".$_POST['mysqluser']."';
".'$'."mysqlpassword = '".$_POST['mysqlpass']."';
".'$'."mysqldb = '".$_POST['mysqldb']."';
?>";
$fp = fopen('../inc/config.php', 'w');
fwrite($fp, $config);
fclose($fp);
header("Location: finish.php");
// ¡el contenido de 'data.txt' ahora es 123 y no 23!
?>