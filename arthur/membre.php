<?php
session_start();
if($_SESSION['username'])
{
echo "Bienvenue".$_SESSION['username']."!</br><a href='deconnexion.php'>Se déconnecter</a>";
}else header('Location:login.php');
?>