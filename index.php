<?php
// include the template parser class
require('parser.php');
// instantiate a template Parser object
$parser=new htmlParser('template_login.html');
// define the key-value array
$keyValueArray=array('title'=>'GEOFYN','header'=>'header.php','maincontent'=>'maincontent.php',
'footer'=>'footer.php');

// replace placeholders with values
$parser->parseHtml($keyValueArray);
// display the page
echo $parser->outputDisplay();
?>