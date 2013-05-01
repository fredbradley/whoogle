<?php
/***************************************
** (c) Fred Bradley                   **
** http://www.fredbradley.me          **
****************************************
** Site using Smarty                  **
** Fred Bradley +44 (0) 7867 953 849  **
** fred@fredbradley.co.uk             **
***************************************/

	/* Page Setup */
		session_start();

	/* LOAD CONFIG (each file) */
		require_once 'inc/config/siteconfigs.php';

	$guessoutput = array();
	if ($_GET) {
		// Create Hash for Stats
		$hash = (rand (2,9999999999))/2;
		$hash = dechex($hash).rand(1000,9999);
		foreach ($_GET as $guess) {
			if ($guess == "") {
				break;
			}
			$iguess = $db->searchGuesses(strtolower($guess));
 			$correctguess = $db->correctGuesses($guess);

			if ($correctguess != 0) {
				if (!empty($correctguess[4])) {
					$output = "<p>".$db->to_upper($correctguess[1])." is the person saying \"".$correctguess[5]."\" and was guessed by <a href=\"".$correctguess[4]."\" target=\"_blank\">".$correctguess[2].", who won &pound;".$correctguess[6]."</a>!</p>";
				} else {
					$output = "<p>".$db->to_upper($correctguess[1])." is the person saying &quot;".$correctguess[5]."&quot; and was guessed by ".$correctguess[2]." who won &pound;".$correctguess[6]."!</p>";
				}
				$return = $db->to_upper($correctguess[1]);
				//$output = $output."<p>Keep listening to Heart for more chances to win!</p>";
				$guessoutput[] = $output;
			} elseif (strtolower($guess) == "fergie") {
				$output = "<p>Fergie from the Black Eyed Peas has already been guessed. If you meant another \"Fergie\" please type their full name. </p>";
				$guessoutput[] = $output;
				$return = "The Fergie Problem";
			} else {
				if ($iguess['guess']['error'] OR $iguess['error']) {
					$output = "<p>It looks like ".stripslashes($db->to_upper($guess))." hasn't been guessed yet, so you should call in ". $db->nextPlay(date("w"), date("Hi"))."! Make sure you've spelt it right though!</p>";
					$return = "Not Guessed Yet";
				} else {
					// PUT IN GOOGLE API CODE HERE
					$output = "<p>".trim($db->to_upper($iguess[0]['guess']['name']['full_name']))." has been guessed ".pluralise($iguess[0]['guess']['timesguess'])." before!</p>";
					$return = trim($db->to_upper($iguess[0]['guess']['name']['full_name']));
				}
				//$output = $output."<p>Keep listening to Heart for more chances to win!</p>";

				$guessoutput[] = $output;
			}
			//The search unique hash gets saved in the db class file
			$saveSearch = $db->guessMade($guess, $return, $hash);
		}
	}

	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");

$nextplay = $db->nextPlay(date("w"), date("Hi"));
	/* SMARTY ASSIGNS */
		$smarty->assign('nextplay', $nextplay);
		$smarty->assign('guesses', $guessoutput);
		$smarty->assign('return', $returns);
		$smarty->assign('guess', $_GET);
//		$smarty->assign('SITE', $site);
//		$smarty->assign('TITLE', $site['title']);
//		$smarty->assign('error', $debug);
//		$smarty->assign('FACEPAGE', $fanpage);

	/* DISPLAY PAGE */
	if (isset($_GET['xml'])) {
		$smarty->display('site_xml.tpl');
	} else {
		$smarty->display('site_output.tpl');
	}


function pluralise($int) {
	if ($int > 2) {
		return $int ." times";
	} elseif ($int == 1) {
		return "once";
	} elseif ($int == 2) {
		return "twice";
	} elseif ($int < 1) {
		return $int ." times";
	}
}
?>
