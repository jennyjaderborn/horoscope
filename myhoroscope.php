<?php
include 'header.php';
include 'classes.php';

//print_r($_COOKIE);
//echo "<br/><br/>";

$theUser = unserialize($_COOKIE['user']);

$username = new Person($theUser[0], $theUser[1], $theUser[2]);
$username->writePerson();
$username->checkHoroscope();

//$person = new Person($_COOKIE["user"]);
//$person->writePerson();