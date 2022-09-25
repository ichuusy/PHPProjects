<?php

$name = $_POST["name"];
$surname = $_POST["surname"];
$fake_session = 31069;
$version = 1.2;


// Idendity cannot be changed.

define("id",$_POST["identity"]);

// Print
echo "<h2>Welcome $name!</h2>";
echo "<h3>Name : $name</h3>";
echo "<h3>Surname : $surname</h3>";
echo "<h3>Identity : ".id."</h3>";
echo "<br><br><br><br><br>";
echo "<h4>Session ID : $fake_session</h4>";echo "<h4>Version : $version</h4>";
echo "<hr>";

?>
