<?php 
	function safeChecks($str) { return htmlspecialchars(addslashes(trim($str))); }
	$server='who.fredb.me';
			
	if ($_POST)
	{
		$g1 = safeChecks($_POST['guess1']);				
		$query_string='guess1='.stripslashes($g1);
		$xmlfile='http://'.$server.'/xml?'.$query_string;
		$xml=simplexml_load_file($xmlfile);
		if (isset($_GET['debug']))
		{
			echo '<pre>';
			var_dump($xml);
			echo '</pre>';
		}
	}
	else { $xml=''; }
	
	
?><!DOCTYPE html>
<!--[if IE 6]><html lang="en" class="ie ie6 lte-ie-7 lte-ie-8 lte-ie-9"><![endif]--><!--[if IE 7]><html lang="en" class="ie ie7 lte-ie-7 lte-ie-8 lte-ie-9"><![endif]--><!--[if IE 8]><html lang="en" class="ie ie8 lte-ie-8 lte-ie-9"><![endif]--><!--[if IE 9]><html lang="en" class="ie ie9 lte-ie-9"><![endif]--><!--[if gt IE 9]><html lang="en"><![endif]--><!--[if !IE]><!--><html lang="en"><!--<![endif]-->
    <head>
        <title>Who's on Heart</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="keywords" content="who's on heart" />
    	<meta name="description" content="Who's on Heart?" />
		<meta name="author" content="Global Radio" />
		
        <style type="text/css">
			* { margin: 0; padding: 0; }
			body { font-size: 10px; color: #333333; }
			a { color: #ff3333; text-decoration: none; }
			a:active, a:hover, a:focus { text-decoration: underline; outline: none; }
			a span, button span, .hidden { width: 0; height: 0; display: block; overflow: hidden; }
			a span.js-before, a span.js-after { width: auto; height: auto; overflow: visible; }
			a img { border: none; }
			hr { display: none; }
			button, .hover { cursor: pointer; }
			fieldset { border: none; }
			sup { font-size: 0.8em; vertical-align: text-top; }
			
			.ie6 .clearfix { height: 1%; overflow: visible; }
			.ie7 .clearfix { min-height: 1%; }
			.clearfix:after { clear: both; height: 0; content: ' '; font-size: 0; display: block; }
			
			body, input, button { font-family: Arial, Helvetica, sans-serif; }
			
			form { width: 438px; background: #f1f1f1; margin: 0 auto; padding: 30px 30px 20px 30px; text-align: center; border: 1px solid #f1f0f0; }
			form p, form dl { text-align: left; font-size: 1.2em; }
			form dt { clear: both; width: 140px; float: left; margin: 5px 10px 15px 0; }
			form dt label { font-weight: bold; }
			form dd { width: 288px; float: left; margin: 0 0 15px 0; }
			form dd input { width: 266px; background: -moz-linear-gradient(top, #d0caca, #FFFFFF 12%); background: -ms-linear-gradient(top, #d0caca, #FFFFFF 12%); background: -o-linear-gradient(top, #d0caca, #FFFFFF 12%); background: -webkit-gradient(linear, 0 0, 0 100%, from(#d0caca), color-stop(0.12, #FFFFFF)); background: -webkit-linear-gradient(top, #d0caca, #FFFFFF 12%); background: linear-gradient(top, #d0caca, #FFFFFF 12%); padding: 5px 10px; font-size: 1.0em; color: #3b3b3b; border: 1px solid #c1c1c1; border-top-color: #848484; box-shadow: 1px 1px 1px #FFFFFF; }
			form dd input::-webkit-input-placeholder  { color: #9b9b9b; font-style: italic; }
			form dd input:-moz-placeholder { color: #9b9b9b; font-style: italic; }
			
			form dd.guess { clear: both; width: 438px; float: none; margin: 10px 0 30px 0; }
			form dd p { font-size: 1.0em; }
			
			form p.cta { float: right; margin: 25px 0 0 0; }
			button { background: #b9b9b9; background: -moz-linear-gradient(top, #b5b5b5, #717171); padding: 3px 5px; font-size: 1.0em; color: #FFFFFF; font-weight: bold; border: 1px solid #414141; border-radius: 6px;  }
			button:hover, button:focus { background: #717171; }
		</style>
		<link rel="shortcut icon" href="img/favicon.ico"/>
    </head>
    
    <body class="no-js">
		
		<form name="whosonheart"  action="index.php" method="post" class="clearfix">
			<dl>
            	<dt><label for="guess1">Guess 1:</label></dt>
                <dd><input type="text" id="guess1" name="guess1" value="<?php echo stripslashes($xml->guesses->guess[0]->searched); ?>" /></dd>
				<?php echo (isset($g1) ? '<dd class="guess">'.$xml->guesses->guess[0]->output.'</dd>' : ''); ?>
               	
              	<dt><label for="guess2">Guess 2:</label></dt>
                <dd><input type="text" id="guess2" name="guess2" value="<?php echo stripslashes($xml->guesses->guess[1]->searched); ?>" /></dd>
				<?php echo (isset($g2) ? '<dd class="guess">'.$xml->guesses->guess[1]->output.'</dd>' : ''); ?>
                
                <dt><label for="guess3">Guess 3:</label></dt>
                <dd><input type="text" id="guess3" name="guess3" value="<?php echo stripslashes($xml->guesses->guess[2]->searched); ?>" /></dd>
				<?php echo (isset($g3) ? '<dd class="guess">'.$xml->guesses->guess[2]->output.'</dd>' : ''); ?>
          	</dl>
			<p class="cta"><button type="submit">Guess</button></p>
		</form>
	</body>
</html>