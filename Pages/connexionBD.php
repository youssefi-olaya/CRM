<?php
try 
{
    $pdo = new PDO("mysql:host=localhost;dbname=details","root", "");
}catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>