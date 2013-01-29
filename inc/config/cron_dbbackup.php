<?php
require_once 'siteconfigs.php';


$backup = $db->databaseBackup();
echo "done";

/*

$comment = time();

$path = "/Users/fredbradley/Sites/smarty_site/whoogle/crontests/";
$filename = "tests";

while (file_exists($path.$filename)) 
{
$fnum++;
$filename = "comment".$fnum;
}
$handle = fopen($path.$filename, "w");
fwrite($handle,$comment);
fclose($handle);
*/
?>
