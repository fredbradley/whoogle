<?php
 /**
 * Login Script
 * ***************
 * Author: Fred Bradley <hello@fredbradley.co.uk>
 * Project: Whoogle
 * Copyright: All Rights Resevered
 *
 * Note: I'm sure this is more complicated than it should or needs to be, but hey!
 *
 */


/*
 * AM I STILL ALLOWED HERE
 * ***********************************/
if ($_SESSION) {
	$inactive = 900; // 900 = 15 minutes!
	$session_life = time() - $_SESSION['user']['last_active'];
	if ($session_life > $inactive) {
		header("Location: /admin/index.php?timeout");
	}
}

/*
 * KEEP ME LOGGED IN
 * ***********************************/
if ($_SESSION) {
	// Write Query
	$username = $_SESSION['user']['username'];
	$query = "UPDATE ".DB_PREFIX."users SET last_active=".time()." WHERE username='$username'";
	$db->query($query);
	
	// Also save as session data
	$_SESSION['user']['last_active'] = time();
}


/*
 * LOG ME IN
 * ***********************************/
if (!$_SESSION) { 
	if ($_POST) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = md5($_POST['password']);
                
		$result = $db->query("SELECT * FROM ".USERS_TABLE." WHERE username = '$username' AND passwd = '$password'");

		if(mysql_num_rows($result)) {
		// Login
			$_SESSION['user']['username'] = htmlspecialchars($username); // htmlspecialchars() sanitises XSS
			$db->query("UPDATE ".USERS_TABLE." SET last_ip='".$_SERVER['REMOTE_ADDR']."', last_login=".time()." WHERE username='$username'");
			// Set Session
			$user = mysql_fetch_assoc($result);	
			$_SESSION['user'] = $user;						
			if ($_SESSION['user']['acl']==0) {
				header("Location:index.php?logout&locked");
			}	
		} else {
			/* If the 'mysql_num_rows' doesn't get a true result, then one assumes that it doesn't exist and thus the username and password must be wrong! */
			// Invalid username/password
			$smarty->assign('msg', getMsg("error", "Invalid Username/Password combination"));
		}
	}
}

/*
 * LOG ME OUT
 * **********************************/
if (isset($_GET['message']) && $_GET['message'] == 'loggedout') {
	if (isset($_GET['locked'])) {
		if (!empty($_GET['user'])) {
			$notifyuser = $_GET['user'].", ";
		} else {
			$notifyuser = "";
		}
		$smarty->assign('msg', getMsg("attention", "Erm, ".$notifyuser."there's no easy way of telling you this! Your account has been locked. Please contact an administrator"));
	} else {
		$smarty->assign('msg', getMsg("alert", "You have been logged out"));
	}
}
?>
