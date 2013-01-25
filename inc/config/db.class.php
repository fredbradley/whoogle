<?php
/*
 * FROM: http://www.mygeekpal.com/simple-database-class-for-php/
 */

class Database {

var $connection;
var $database;
var $rows = array();
var $count;
var $result;

/* Create a database connection */
function connect ($dbuser,$dbpass,$dbhost,$dbname) {
  $this->connection = mysql_connect($dbhost,$dbuser,$dbpass);
  $this->database = mysql_select_db($dbname);
}

/* Query a MySQL Database */
function query ($query) {
  $this->result = mysql_query($query) or die(mysql_error());
  return $this->result;
}

function bugReport($username, $bug) {
	$query = "INSERT INTO ".DB_PREFIX."bugs (username, bug, date) VALUES ('".$username."', '".$bug."', '".time()."')";
	$result = mysql_query($query);
	
	// Get User Details
	$user_details = $this->getUsers($username);	
	$user = $user_details[0];	

	$subject = "Whoogle Bug Report submitted by ".$user['username'];
	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
	$headers .= 'To: Fred Bradley <fredbradley@me.com>' . "\r\n";
	$headers .= 'From: '.$user['first_name'].' '.$user['last_name'].' <'.$user['email'].'>' . "\r\n";
//	$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
//	$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	$message = $bug;
	

// Mail it
mail('fredbradley@me.com', $subject, $message, $headers);

return $result;
}

function databaseBackup() {
$query = "CREATE TABLE ".DB_PREFIX."backup_".date('YmdHis')."_guesses SELECT * FROM ".DB_PREFIX."guesses";
$result = mysql_query($query);
return $result;
}
function changePassword($username, $current, $new, $confirm) {
	$query = "SELECT * FROM `".DB_PREFIX."users` WHERE `username` = '".mysql_real_escape_string($username)."' AND `passwd` = '".mysql_real_escape_string(md5($current))."'";
	$check = mysql_num_rows(mysql_query($query));
	if ($check == 1) {
		if (md5($new) != md5($confirm)) {
			$result = 3;
		} else {
			$update = "UPDATE ".DB_PREFIX."users SET passwd='".md5($new)."' WHERE username='".$username."' AND passwd='".md5($current)."'";
			$result = mysql_query($update);
			if ($result) {
				$result = 1;
			}
		}
	} else {
		$result = 5;
	}
return $result;
}
function error($message) {
	$output = "<div class=\"notification error png_bg\">";
	$output .= "<div>Error: ".$message;
		if (mysql_error() != "") {
			$output .= " <b><em>".mysql_error()."</em></b>";
		}
	$output .= "</div></div>";
	return $output;
}
function showError($error) {
	$query = "SELECT * FROM ".DB_PREFIX."errors WHERE errorcode = '$error'";
	$errors = mysql_fetch_assoc($this->result);
	$output = $this->error($errors[$error]);
	return $output;
                }


/************************************************************************************
** USER FUNCTIONS
*************************************************************************************/
function addAnswer($answer, $listener, $newslink, $word, $prize) {
	$query = "INSERT INTO ".DB_PREFIX."configs ";
	$query .= "(name, listener, time, newslink, word, prize) VALUES ";
	$query .= "('".$answer."', '".$listener."', '".time()."', '".$newslink."', '".$word."', '".$prize."')";
	$result = mysql_query($query);
	return $result;
}
function delAnswer($answer) {
	$query = "DELETE FROM ".DB_PREFIX."configs WHERE name='".strtolower($answer)."'";
	$result = mysql_query($query);
	return $result;
}
function addUser($username, $first_name, $last_name, $email, $passwd, $acl) {
	$passwd = md5($passwd);
	$query = "INSERT INTO ".DB_PREFIX."users ";
	$query .= "(username, first_name, last_name, email, passwd, acl) VALUES ";
	$query .= "('".$username."', '".$first_name."', '".$last_name."', '".$email."', '".$passwd."', '".$acl."')";
	$result = mysql_query($query);
	return $result;
}

function updateUser($id) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$username = $_POST['username'];
	$acl = $_POST['acl'];
	$email = $_POST['email'];

	$query = "UPDATE ".DB_PREFIX."users SET ";
	$query .= "first_name='$firstname', last_name='$lastname',";
	$query .= " email='".$email."', username='$username', acl=".$acl;
	$query .= " WHERE id=".$id;
	$result = mysql_query($query);
	return $result;
}

function editUser($id) {
	$query = "SELECT * FROM ".DB_PREFIX."users WHERE id=".$id;
	$this->result = mysql_query($query);
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	$output = $this->row[0];
return $output;
}

function deleteUser($id) {
	$query = "DELETE FROM ".DB_PREFIX."users WHERE id=".$id;
	$output = mysql_query($query);
	$output = header("Location: index.php?page=users&message=DeleteConfirmed");
	die();
return $output;
}
/************************************************************************************
** SITE EDITING FUNCTIONS
*************************************************************************************/
function addGuess() {
	$firstname = strtolower($_POST['firstname']);
	$surname = htmlspecialchars(strtolower($_POST['surname']), ENT_QUOTES);
	$cname = $firstname." ".$surname;
	$nicknames = htmlspecialchars(strtolower($_POST['nicknames']), ENT_QUOTES);
	$timesguessed = $_POST['timesguessed'];
	$dateguessed = $_POST['dateguessed'];

	$query = "INSERT INTO ".DB_PREFIX."guesses (firstname, surname, cname, nicknames, timesguessed, dateguessed, lastguessed) VALUES ('$firstname', '$surname', '$cname', '$nicknames', '$timesguessed', '$dateguessed', '$dateguessed')";
	$result = mysql_query($query);
return $result;
}

function updateGuess($id) {
global $ROOT_PATH;
	$getdates = "SELECT dateguessed FROM ".DB_PREFIX."guesses WHERE id=".$id;
	$getdate = mysql_query($getdates);
	$date = mysql_result($getdate,0);
	$firstname = strtolower($_POST['firstname']);
	$surname = htmlspecialchars(strtolower($_POST['surname']), ENT_QUOTES);
	$cname = $firstname." ".$surname;
	$nicknames = htmlspecialchars(strtolower($_POST['nicknames']), ENT_QUOTES);
	$timesguessed = $_POST['timesguessed'];
	$dateguessed = $date.",".$_POST['dateguessed'];
	$justnow = $_POST['dateguessed'];
	$values = "firstname='$firstname', surname='$surname', cname='$cname', nicknames='$nicknames', timesguessed='$timesguessed'";
	if ($_POST['recordguess'] == true) {
		$values .= ", dateguessed='$dateguessed', lastguessed='$justnow'";
	}
	$update = "UPDATE ".DB_PREFIX."guesses SET ".$values." WHERE id=".$id;
	$result = mysql_query($update);

/* Backup not working on remote database
	$table_name = DB_PREFIX."guesses";
	$backup_file = "".$ROOT_PATH."database_backups/backup_guesses".date('YmdHis').".sql";
	$sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
	$retval = mysql_query($sql);
	if(!$retval)
		die ('Could not do the backup stuff: '.mysql_error());

	$command = "mysqldump --opt --host=".DB_HOST." --user=".DB_USER." --password=".DB_PASSWORD." ".DB_DATABASE." > ".$ROOT_PATH."database_backups/ibackup".time().".sql";
	system($command, $return);
	echo "Backup data success!".$return;
*/
return $result;
}
function editSite($id) {
        $query = "SELECT * FROM ".DB_PREFIX."guesses WHERE id=".$id;
        $this->result = mysql_query($query);
        while($r = mysql_fetch_assoc($this->result)) {
                $this->row[] = $r;
        }
        mysql_free_result($this->result);
        $output = $this->row[0];
return $output;
}
function deleteSite($id) {
	$query = "DELETE FROM ".DB_PREFIX."guesses WHERE id=".$id;
	$output = mysql_query($query);
	$output .= header("Location: index.php?page=guesses&message=DeleteConfirmed");
return $output;
}

function valCache($configtable) {
	$query = "SELECT `allowCache` FROM ".$configtable;	
	$this->result = mysql_query($query) or die(mysql_error());
	while($r = mysql_fetch_assoc($this->result)) {
		$this->row[] = $r;
	}
	mysql_free_result($this->result);
	return $this->row[0]['allowCache'];
}

/* Query a MySQL Dabase
Returns Both arrays Assoc & Indexed */
function getrows ($query) {
  $this->result = mysql_query($query);
  while($r = mysql_fetch_array($this->result,MYSQL_BOTH))
    $this->rows[] = $r;

    mysql_free_result($this->result);
    return $this->rows;
}
function getConfig() {
	$query = "SELECT * FROM ".DB_PREFIX."configs";
	$table = mysql_query($query);
	while($r = mysql_fetch_assoc($table))
		$output[] = $r;
return $output;
}
/************************************************************************************
** SEARCH GUESSES
*************************************************************************************/
function correctGuesses($search) {
	$guess = trim(strtolower($search));
	$query = "SELECT * FROM ".DB_PREFIX."configs WHERE name='".$guess."'";
	$num = $this->count($query);
	if ($num == 1) {
		$result = mysql_query($query);
		$output = mysql_fetch_row($result);
	} else {
		$output = 0;
	}
return $output;	
}

function searchGuesses($search="", $field="cname") {
	$search = htmlspecialchars($search, ENT_QUOTES);
	$query = "SELECT * FROM ".DB_PREFIX."guesses";
	if ($search)
		$where = " WHERE cname = '".$search."'";
//."' OR surname='".$search."' OR firstname='".$search."' OR nicknames LIKE '%".$search."%'";
	$array = $this->getGuesses($query.$where,0);
	if ($array['error']) {
		$where = " WHERE nicknames LIKE '%".$search."%'";
		$array = $this->getGuesses($query.$where, 0);
		if (!empty($array[0]['guess']['nicknames'])) {
			if (in_array($search, $array[0]['guess']['nicknames'])) {
		//		var_dump($array[0]['guess']['nicknames']);
				return $array;
			} else {
	       //               var_dump($array[0]['guess']['nicknames']);
				$input = explode(" ", $search);
//	var_dump($input);
				if (!$input[1]) {
					$output['guess']['error'] = "It doesn't look like you put it two names";
				} else {
					$output['guess']['error'] = "We could not find what you searched for";
				}
				return $output;
			}
		} else {
			return array("error" => "Nothing could be found that matched \"".$search."\", sorry!");
		}
	}
//	echo $query.$where;
return $array;
}

function search_Guesses($search) {
	if ($search == "") {
		$output['error'] = "Search field blank";
	} else {
		$query = "SELECT * FROM ".DB_PREFIX."guesses";
		$where = " WHERE cname LIKE '".$search."'";
		$array = $this->getGuesses($query.$where,0);
		if ($array['error']) {
			$where = " WHERE nicknames LIKE '%".$search."%'";
			$array = $this->getGuesses($query.$where,0);
			if (!empty($array[0]['guess']['nicknames'])) {
				if (in_array($search, $array[0]['guess']['nicknames'])) {
					$output = $array[0];
				} else {
					$input = explode(" ", $search);
					if (!$input[1]) {
						$output['guess']['error'] = "It looks like you only search for one name. Try using a first name and surname!";
					} else {
						$output['guess']['error'] = "I searched high and low, and couldn't find anything in our library for you";
					}
				}
			} else {
				$output['guess']['error'] = "I even searched nicknames, and found nothing!";
			}
		} else {
		//	$output = $array;
		}
	}
return $output;
}

function getGuesses($query, $named=1) {
	$result = mysql_query($query." ORDER BY timesguessed DESC");
	while($row = mysql_fetch_assoc($result)) {
		$nickhanes = array();
		if (substr($row['nicknames'], -1) === ',')
			$row['nicknames'] = rtrim($row['nicknames'], ",");
		$nicknamess = explode(", ",$row['nicknames']);
		$i=0;
		foreach ($nicknamess as $nickname) {
			$nicknames['nn_'.$i] = $nickname;
			$i++;
		}

		$dates		= array();
		$datesguessed	= explode(",",$row['dateguessed']);
		$i=0;
		foreach ($datesguessed as $date) {
			$dates['date_'.$i] = $date;
			$i++;
		}
		$name['firstname'] = $row['firstname'];
		$name['surname'] = $row['surname'];
		$name['full_name'] = trim($row['cname']);
		$loop['name'] = $name;
		$loop['nicknames'] 		= $nicknames;
		$loop['timesguess']		= $row['timesguessed'];
		$loop['datesguessed']		= $dates;

//		$output[] = $loop;
		if ($named)
		$output[$row['cname']] = $loop;
		else
		$output[]['guess'] = $loop;
	}
	if (!$output)
		$output['error'] = "No Match Found";
//	mysql_free_result($result);
return $output;
}
function getUsers($username="") {
	$query = "SELECT * FROM ".DB_PREFIX."users";
	if (!empty($username)) {
	$query .= " WHERE username='".$username."'";
	}
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
	return $output;
}
function getGuessAttempts($pagenum) {
	$query = "SELECT `hash`, `guess`, `return`, `time` FROM ".DB_PREFIX."guessattempts ";
	$where = "WHERE `time` > ".(time() - 86400);
	if (!(isset($pagenum))) {
		$pagenum = 1;
	}

	$rows = $this->count($query.$where);
echo $this->stats['guessattempts'];
//	$rows = 10;
	$page_rows = 10;

	$last = ceil($rows/$page_rows);

	if ($pagenum < 1) {
		$pagenum = 1;
	} elseif ($pagenum > $last) {
		$pagenum = $last;
	}

	$max = "LIMIT ".($pagenum - 1) * $page_rows.", ".$page_rows;
	$sort = " ORDER BY `time` DESC ".$max;
//	$where = " WHERE `time` > ".(time() - 86400);
	$this->result = mysql_query($query.$where.$sort);
	while($row=mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
return $output;
}
function searchAttempts($search) {
	$query = "SELECT `hash`, `guess`, `return`, `time` FROM ".DB_PREFIX."guessattempts ";
	$where = "WHERE `guess` LIKE '%".$search."%'";
	$order = " ORDER BY `time` DESC";
	$this->result = mysql_query($query.$where.$order);
	while($row=mysql_fetch_assoc($this->result)) {
		$output[] = $row;
	}
return $output;
}

function getSites($sort="surname", $order="ASC", $where, $page=0) {
	$perpage = 20;
	$query = "SELECT * FROM ".DB_PREFIX."guesses";
	if ($where != "") {
		$query = $query." WHERE cname='".$where."'";
	}
	if (isset($_GET['sort']))
	$query = $query ." ORDER BY ".$sort." ".$order."";
//	if ($page > 0)
//	$query = $query ." LIMIT ".$page*$perpage.", $perpage";
	$this->result = mysql_query($query);
	while($row = mysql_fetch_assoc($this->result)) {
			$output[] = $row;
	}
	return $output;
}
function getMenu($parent) {
        $query = "SELECT * FROM ".DB_PREFIX."menu WHERE menu='$parent' AND published=1";
        $this->result = mysql_query($query);
        while($r = mysql_fetch_assoc($this->result)) {
                $this->rows[] = $r;
        }
        $array = $this->rows;
}

/* Stats for Toby */
function usefulStats() {
	$query = "SELECT sum(timesguessed) FROM ".DB_PREFIX."guesses";
	$numguesses = mysql_result(mysql_query($query), 0);
	$rounds = $numguesses / 3;
	$output['numrounds'] = $rounds;
	$query = "SELECT * FROM ".DB_PREFIX."guesses";
	$output['numguesses'] = $this->count($query);
	$query = "SELECT guess FROM ".DB_PREFIX."guessattempts";
	$output['guessattempts'] = $this->count($query);
	$now = time();
	$where = " WHERE time > ".(strtotime('-1 hour', $now));
	$output['guessesinhour'] = $this->count($query.$where);
//	$query = "SELECT DISTINCT hash FROM ".DB_PREFIX."guessattempts";
//	$output['guesssubmits'] = $this->count($query);
	$list = $this->getrows("SELECT * FROM ".DB_PREFIX."guesses ORDER BY timesguessed DESC LIMIT 1");
	$output['mostguessed'] = ucwords($list[0]['cname']);
	$output['nextplay'] = $this->nextPlay();

	return $output;
}

/* Function to Order Recently Guessed */
function recentlyGuessed() {
	$yesterday = strtotime("-24 hours");
//	$query = "SELECT id, cname, timesguessed, lastguessed FROM ".DB_PREFIX."guesses WHERE timesguessed > 0 ORDER BY lastguessed DESC LIMIT 20";
//	$query = "SELECT `id`, `cname`, `timesguessed`, `lastguessed` FORM `".DB_PREFIX."guesses` WHERE `timesguessed` >0 AND `lastguessed` < ".$yesterday.")";
	$query = "SELECT * FROM `woh_guesses` WHERE `timesguessed` > 0 AND `lastguessed` > $yesterday ORDER BY lastguessed DESC ";

	$result = mysql_query($query) or die("Error:".mysql_error());
	while($row = mysql_fetch_array($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function nextPlay() {
date_default_timezone_set('Europe/London');
// Seems to be an error on Monday mornings before 9am?
	if (date("w") > "0" && date("w") < "6") {
	// If it's Mon, Tue, Wed, Thu or Fri
		if (date("Hi") > "0900" && date("Hi") < "1550") {
		// If it's between 0901 and 1550 (on Mon, Tue, Wed, Thu, or Fri)
			$output = " later this hour";
		} elseif (date("Hi") < "0900") {
		// If it's before 0900 (on Mon, Tue, Wed, Thu or Fri)
			$output = " at 10am";
		} elseif (date("Hi") > "1550" && date("w") != "5") {
		// If it's after 1550 BUT NOT Friday
			$output = " tomorrow";
		} elseif (date("Hi") > "1550" && date("w") == "5") {
		// If it's after 1550 AND Friday
			$output = " on Monday";
		}
	} elseif (date("w") == "6") {
		$output = " on Monday";
	} elseif (date("w") == "0") {
		$output = " tomorrow";
	}
$output = "";
return $output;
}

function guessMade($input, $return, $hash) {
	$input = mysql_real_escape_string($input);
	$return = mysql_real_escape_string($return);
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$time = time();
	$query = "INSERT INTO ".DB_PREFIX."guessattempts ";
	$query .= "(`hash`, `guess`, `return`, `time`) VALUES ";
	$query .= "('".$hash."', '".$input."', '".$return."', ".$time.")";
	$result = mysql_query($query);
	if (!$result)
		die(mysql_error());
	return '';
}

/* Count Number of rows query */
function count ($query) {
  $this->result = mysql_query($query);
  $this->count = mysql_num_rows($this->result);
  return $this->count;
}

/* Create a Safe Query */
function escapedata($data) {
    return mysql_real_escape_string($data);
}

/* Do Table Copies */
function copyTimes() {
	$select = "SELECT * FROM ".DB_PREFIX."guesses";
	$query = mysql_query($select);
	while($row = mysql_fetch_array($query)) {
		$get = substr($row['dateguessed'], -10);
		$id = $row['id'];
		$update = "UPDATE ".DB_PREFIX."guesses SET `lastguessed`=".$get." WHERE `id`=".$id;
		$do_update = mysql_query($update);
	}		
}

function getCelebPhoto($celeb) {
	$celeb = urlencode($celeb);
        $url = "https://ajax.googleapis.com/ajax/services/search/images?v=1.0&q=".$celeb;

        // sendRequest
        // note how referer is set manually
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_REFERER, "whoogle.fredb.me");
        $body = curl_exec($ch);
        curl_close($ch);

        // now, process the JSON string
        $json = json_decode($body);
        // now have some fun with the results...
        $result = $json->responseData->results;

        $image = $result[0];
        $url = $image->url;

return $url;
}


function sendEmail($to, $subject, $message, $from) {
	$headers = "From: "	. strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$user_details = $this->getUsers($username);
	$user = $user_details[0];

	$name = $user['first_name'].' '.$user['last_name'];
	$html_header = "<html><body>";
	$html_header .= '<p>This email was sent by '.$name.'!</p><img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
	
	$html_footer = "<p>Copyright &copy; Fred Bradley</p></body></html>";
	
	$message = $html_header.$message.$html_footer;
	/* Send Mail */
	mail($to, $subject, $message, $headers);
	
	return true;
}

/* Close connection */
function __destruct(){ @mysql_close($this->connection); }


}
?>
