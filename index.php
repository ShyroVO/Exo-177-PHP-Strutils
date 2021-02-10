<?php
require './classes/StrUtils.php';

// TODO n'oubliez pas de créer votre classe dans le dossier classes.
$truc = new StrUtils("Text");
echo "Classique:<br>";
echo $truc->getStr() . "<br><br>";

echo "Bold:<br>";
$truc->bold('Text'). "<br><br>";

echo "Italic:<br>";
$truc->italic('Text'). "<br><br>";

echo "Underline:<br>";
$truc->underline('Text'). "<br><br>";

echo "Capitalize:<br>";
$truc->capitalize('Text'). "<br><br>";

echo "Uglify:<br>";
$truc->uglify('Text'). "<br><br>";