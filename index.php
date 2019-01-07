<?php include_once 'php/session.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="billet"></div>
	<?php
	include 'php/proposition.php';
	include 'php/formulaire.php';

	$arrayInpName = array('contentProposition', 'submitProposition');
	$arrayInptype = array('textarea', 'submit');
	$tryForm = new formulaire('php/insertProposition.php', 'post', 'propositionForm', $arrayInpName, $arrayInptype);
	$tryForm->displayForm();
	if (isset($_SESSION['utilisateur'])) {
		var_dump($_SESSION['utilisateur']);
	}
?>
</body>
</html>