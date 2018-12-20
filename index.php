<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="billet"></div>
<!-- 	<form action="php/requete.php" method="post">
		<input type="text" name="contentCommentaire">
		<input type="submit">
	</form> -->
	<?php
	include 'php/proposition.php';
	include 'php/formulaire.php';

	$arrayInpName = array('contentProposition', 'submitProposition');
	$arrayInptype = array('textarea', 'submit');
	$tryForm = new formulaire('php/insertProposition.php', 'post', 'propositionForm', $arrayInpName, $arrayInptype);
	$tryForm->displayForm();
	// include 'php/requete.php';

	// $columnArray = array('contentProposition', 'dateProposition');
	// $columnArray = array('idProposition', 'idUtilisateur', 'contentCommentaire', 'dateCommentaire',);
	// $valueArray = array('5', '3', 'CtetstsCCCbbbbbbbbbbbbAAAAAde nouveau un tesfdhrherheht mais POfg2eere', date("Y-m-d H:i:s"));
	// $dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
	// $conditionArray = array('idCommentaire = 4 AND');


	// $test = new requete($dbConnectionArray, $columnArray, $valueArray, 'commentaire');

	// $test->selectDb();
	// var_dump($test->queryDb->fetch());

?>
	<div class="proposition">
			<p>#2</p><p>tefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwtefgwwfe euhwekwhe iuw wih oho h oewh euihiowhieewhwiuwuwiuwuw</p>
			<div class="propositionExtend">
			<p>propose par  le 2018-12-18 23:03:50</p>
		</div>
	</div>
</body>
</html>