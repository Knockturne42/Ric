<?php

require_once('requete.php');

Class proposition{

	private $divDebut;
	private $contentProposition;
	private $idProposition;
	private $dateProposition;
	private $pseudoUtilisateur;
	private $divFin;
	private	$divDebutPrincipale;
	private	$divDebutExtend;

	public function __construct($contentProposition, $idProposition, $dateProposition, $pseudoUtilisateur)
	{
		$this->divDebut = '<div class="proposition">';
		$this->divDebutPrincipale = '<div class="propositionPrincipale">';
		$this->divDebutExtend = '<div class="propositionExtend">';
		$this->contentProposition = $contentProposition;
		$this->idProposition =$idProposition;
		$this->dateProposition = $dateProposition;
		$this->pseudoUtilisateur = $pseudoUtilisateur;
		$this->divFin = '</div>';
	}

	public function __set($property, $value)
	{
		if(property_exists('proposition', $property))
			$this->$property = $value;
		else
			throw new Exception("property invalid", 1);
	}

	public function __get($property)
	{
		if (property_exists('proposition', $property))
			return($this->$property);
		else
			throw new Exception("property invalid", 1);
	}

	public function displayProposition()
	{
		echo $this->divDebut;
		echo '<p>#'.$this->idProposition.'</p>';
		echo '<p>'.$this->contentProposition.'</p>';
		echo $this->divDebutExtend;
		echo '<p>par '.$this->pseudoUtilisateur.' il y a '.dateActuel($this->dateProposition).'</p>';
		echo $this->divFin;
		echo $this->divFin;
	}
	
}

$columnArray = array('proposition.contentProposition', 'proposition.idProposition', 'proposition.dateProposition', 'utilisateur.pseudoUtilisateur');
$valueArray = array('1', '9');
$dbConnectionArray = array('localhost', 'giletjaune', 'test', 'test00');
$conditionArray = array('');

$test = new requete($dbConnectionArray, $columnArray, $valueArray, 'proposition');

$test->selectDb();

while($try = $test->queryDb->fetch())
{
	$essay = new proposition($try['contentProposition'], $try['idProposition'], $try['dateProposition'], $try['pseudoUtilisateur']);
	$essay->displayProposition();
}

?>