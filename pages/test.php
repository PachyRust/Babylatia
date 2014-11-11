<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
   $file = 'babylXML.xml';
   $xml = simplexml_load_file('babylXML.xml');
   
   // Type-casting to convert object to string, so that it can be stored. May not be necessary here, but it's always better safe than sorry.
   $population = (string) $xml->POPULATION;
   $civil_rights = (string) $xml->FREEDOMSCORES->CIVILRIGHTS;

   echo 'Population: ' . $population . '<br />Civil Rights: ' . $civil_rights;
   // Outputs:
   //   Population: 18245
   //   Civil Rights: 74
?>
</body>

</html>
