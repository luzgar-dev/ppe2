<?php 
session_start();
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username&&$password)
	{
		$password=md5($password);
		$connect=mysql_connect('localhost','root','');
		mysql_select_db('inscritpion');

		$query=mysql_query("SELECT*FROM inscritpion WHERE username='$username'&&password='$password'");
		$rows=mysql_num_rows($query);

	if ($rows==1) 
	{
		$_SESSION['username']=$username;
		header('Location:membre.php');
	}else echo "Pseudo ou mot de passe incorrect!";

	}else echo "Veuillez saisir tous les champs!";
}


 ?>



<form method="POST" action="inscritpion.php">

Votre pseudo: <input type="text" name="username">
    <label for="pass">Mot de passe (8 caractères minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8">
    <input type="submit" name="submit" value="S'inscrire" >
</form>