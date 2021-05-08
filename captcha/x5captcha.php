<?php
include("../res/x5engine.php");
$nameList = array("mun","s7w","w8z","j6c","682","duh","kw6","w6l","rsh","wpc");
$charList = array("V","V","W","N","S","L","M","6","4","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
