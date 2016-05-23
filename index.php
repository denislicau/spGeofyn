<?php
// include the template parser class
require('includes.php');
require('parser.php');
// instantiate a template Parser object
$parser=new htmlParser('loginPage.html');
// define the key-value array
$keyValueArray=array('title'=>'GEOFYN','header'=>'templates/header.php','maincontent'=>'templates/maincontent.php',
'footer'=>'templates/footer.php', 'login'=>'templates/login.php');

session_start();
if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1)) {
	$parser=new htmlParser('mainPage.html');
}
// replace placeholders with values
$parser->parseHtml($keyValueArray);
// display the page
echo $parser->outputDisplay();
?>
