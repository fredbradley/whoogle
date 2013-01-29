<?php
require_once '../../../db.whoogle.php';


define('DB_PREFIX', 'woh_');



function databaseBackup() {

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db(DB_DATABASE, $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
$query = "CREATE TABLE ".DB_PREFIX."backup_".date('Y_m_d_H_i_s')."_guesses SELECT * FROM ".DB_PREFIX."guesses";
$result = mysql_query($query);
return $result;
}
$backup = databaseBackup();
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
