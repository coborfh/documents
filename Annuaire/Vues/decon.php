<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=esaticforum', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
session_start();
session_destroy();
header("location: ../index.php");

?>
