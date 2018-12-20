<?php

function arrayPrepare($array, $signe) {

	$result = '';

	foreach ($array as $key => $value) {
		if ($key)
			$result .= ', '.$signe.$value.'';
		else
			$result .= ''.$signe.$value.'';
	}

	return $result;
}

function arrayExecute($columnArray, $valueArray)
{
	$newArray = array();

	foreach ($columnArray as $key => $value) {
		$bindParam = '":'.$value.'" => "'.$valueArray[$key].'"';
		array_push($newArray, $bindParam);
	}
	var_dump($newArray);
	return $newArray;
}

function setArrayFct($column, $value)
{
	$array = array();
	if (count($column) === count($value))
	{
		for ($i = count($value) - 1; $i >= 0 ; $i--) { 
			array_push($array, $column[$i].' = "'.$value[$i].'"');
		}
	}
	return $array;
}

function dateActuel($datePost)
{
	$now = new dateTime(date("Y-m-d H:i:s"));
	$datePost = new dateTime($datePost);
	$diff = $now->diff($datePost);
	if($diff->d > 0)
		return $diff->format("%d jours");
	elseif ($diff->h > 0) {
		return $diff->format("%h heures");
	}
	elseif ($diff->i > 0) {
		return $diff->format("%i minutes");
	}
	elseif ($diff->s > 0) {
		return $diff->format("%s secondes");
	}
	else {
		return "0 secondes";
	}
}

?>