<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
	include 'formulaire.php';
	$arrayInpName = array('pseudoUtilisateur', 'passwordUtilisateur', 'adresseEmailUtilisateur', 'numeroUtilisateur', 'submitSignUp');
	$arrayInptype = array('text', 'text', 'text', 'password','submit');
	$tryForm = new formulaire('signUp.php', 'post', 'signUpForm', $arrayInpName, $arrayInptype);
	$tryForm->displayForm();

	$arrayInpName = array('pseudoUtilisateur', 'passwordUtilisateur', 'submitSignIn');
	$arrayInptype = array('text', 'password','submit');
	$tryForm = new formulaire('signIn.php', 'post', 'signInForm', $arrayInpName, $arrayInptype);
	$tryForm->displayForm();
?>
</body>
</html>