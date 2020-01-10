<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=ppe_slam2', 'root', '');
if(isset($_POST['submit']))
{
	$sexe=$_POST['drone'];
	$prenom=$_POST['Prénom'];
    $nom=$_POST['Nom'];
    $username=htmlentities(trim($_POST['username']));
    $mail=$_POST['mail'];
    $password=htmlentities(trim($_POST['password']));
    $repeatpassword=htmlentities(trim($_POST['repeatpassword']));
    $telephone=$_POST['numero de telephone'];

    if($username&&$password&&$repeatpassword)
    {
    	if ($password==$repeatpassword) 
    	{
    		$password=md5(password);
    		$connect=mysql_connect('localhost','root','')or die('Error');
    		mysql_select_db('inscritpion');
    		$reg=mysql_query("SELECT *FROM inscription WHERE username='$username'";)
    		$rows=mysql_num_rows($reg);
    		if($rows==0)
    		{
    		$query=mysql_query("INSERT INTO inscription VALUES(",'$sexe','$prenom','$nom','$username','$mail','$password','$repeatpassword','$telephone');
    		die("Inscritpion terminée "<a href='login.php' connectez vous</a>);
    	}else echo "Ce pseudo n'est pas disponible";
    	}else echo "Les deux mots de passe doivent être identiques!";

    }else echo "Veuillez saisir tous les champs";

}
?>
<html>
    <head>
        <title> Inscription </title>
            <meta name="description" content="site web" />
    <meta name="keywords" content="Raphael Chevochot, Chevochot Raphael, Chevochot Raphaël, Raphaël Chevochot" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <script src="javas.js"></script>
         <meta charset= "utf-8">
    </head>
    <body>
        <h1> Inscription</h1>
<form method="POST" action="inscritpion.php">
    <fieldset>
            <section id="un">
            Homme<input type="radio" id="homme" name="drone" value="Homme">
            Femme<input type="radio" id="femme" name="drone" value="Femme">
            Autre<input type="radio" id="autre" name="drone" value="Autre">
            </section>

            <section id="deux">
                        Prénom:<input type="text" name="Prénom"><br>
                        Nom de Famille:<input type="text" name="Nom"><br></section>
            <section id="trois">
Adresse mail: <input type="email" name="mail"><br>
Votre pseudo: <input type="text" name="username">
    <label for="pass">Mot de passe (8 caractères minimum):</label>
    <input type="password" id="pass" name="password"
           minlength="8">
           <label for="pass">Répetez votre mot de passe</label>
           <input type="password" name="repeatpassword">
            </section>

            <section id="quatre">
                <label for="phone">Entrer votre numéro de téléphone:</label>
<input type="tel" id="phone" name="Numéro de téléphone"
       pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
<small>Format:0?-??-??-??-??</small>
            </section>
</fieldset>

<fieldset>
            <section id="cinq">
<input type="submit" name="submit" value="S'inscrire" >
            </section>
        </form>
    </fieldset>
<form name="x" action="paged'accueil.html"method="post">
<input type="submit" value="retour">
</form>
    <a href="paged'accueil.html" title="retour"></a>
        </fieldset>
</form>
</body>
    </html>