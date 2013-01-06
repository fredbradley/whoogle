<?php
if (isset($_POST) && $_POST['bugreport']=='1') {
	$report = $db->bugReport($_POST['username'], $_POST['bug']);
	if ($report==1) {
		$success = successMsg("Thanks for the Bug Report!");
		$smarty->assign('dbresult', $success);
	}
	
}
if (!function_exists('successMsg')) {
	function successMsg($message) {
		$output = "<div class=\"notification success png_bg\">";
		$output .= "<div>".$message."</div>";
		$output .= "</div>";
	return $output;
	}
}
?>