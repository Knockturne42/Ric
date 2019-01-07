<?php

include_once 'requete.php';
include_once 'session.php';

$columnArray = array('contentProposition', 'dateProposition');
$valueArray = array($_POST['contentProposition'], date("Y-m-d H:i:s"));
var_dump($valueArray);
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$condition = '';

$insertProposition = new requete($dbConnectionArray, $columnArray, $valueArray, 'proposition', '');

$insertProposition->insertDb();

$columnArray = array('idProposition');
$valueArray = array('1');
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$condition = 'contentProposition LIKE "'.$_POST['contentProposition'].'" ';

$selectProposition = new requete($dbConnectionArray, $columnArray, $valueArray, 'proposition', '', $condition);

$selectProposition->selectDb();
$idProposition = $selectProposition->queryDb->fetch();

var_dump($idProposition);
var_dump($_SESSION['utilisateur']['idUtilisateur']);

$columnArray = array('idProposition', 'idUtilisateur');
$valueArray = array($idProposition['idProposition'], $_SESSION['utilisateur']['idUtilisateur']);
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');

$insertQuiPropose = new requete($dbConnectionArray, $columnArray, $valueArray, 'quipropose', '');

var_dump($insertQuiPropose->insertDb());

?>