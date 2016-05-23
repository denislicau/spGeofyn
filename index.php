<?php
// include the template parser class
require('parser.php');
// instantiate a template Parser object
$parser=new htmlParser('loginPage.html');
// define the key-value array
$keyValueArray=array('title'=>'GEOFYN','header'=>'templates/header.php','maincontent'=>'templates/maincontent.php',
'footer'=>'templates/footer.php', 'login'=>'templates/login.php');

// replace placeholders with values
$parser->parseHtml($keyValueArray);
// display the page
echo $parser->outputDisplay();
?>
