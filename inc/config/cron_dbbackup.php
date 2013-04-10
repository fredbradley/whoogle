<?php
require_once '../../../db.whoogle.php';

if (function_exists('date_default_timezone_set')) { 
   date_default_timezone_set('Europe/London'); 
} else { 
   putenv("TZ=Europe/London"); 
}  


define('DB_PREFIX', 'woh_');


$to      = 'fredbradley@me.com';
$subject = 'Message From Whoogle: ';
$message = 'This email is just letting you know that the automatic back up worked! Regards, Fred Bradley';
$headers = 'From: whoogle@fredbradley.co.uk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($to, $subject, $message, $headers);

function dumpandcopysearches() {
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if (!$link) {
		die ('Not Connected: '.mysql_error());
	}
	// Select DB
	$db_selected = mysql_select_db(DB_DATABASE, $link);
	if (!$db_selected) {
		die ('Can\'t use database: '.mysql_error());
	}
	$queryone = "CREATE TABLE ".DB_PREFIX."dump_".date('Y_m_d')."_".time()."_guessattempts SELECT * FROM ".DB_PREFIX."guessattempts";
	$result = mysql_query($queryone);

	$querytwo = "TRUNCATE TABLE ".DB_PREFIX."guessattempts";
	$truncate = mysql_query($querytwo);
$result = $result.$truncate;
return $result;
}
$searchdump = dumpandcopysearches();
echo "dump done";
mail($to, $subject."Guess Attempts Backed Up!", $message, $headers);

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
mail($to, $subject."Daily Celebrity Back Up", $message, $headers);

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
