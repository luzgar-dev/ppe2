<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=ppe_slam2', 'root', '');
if(isset($_POST['submit']))
{
	$accepté=$_POST['accepté'];
	$refuser=$_POST['refuser'];
    

    if($accepté&&$refuser)
    
    else echo "Veuillez saisir une proposition";

    
}
?>
