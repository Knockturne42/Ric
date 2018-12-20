<?php

class formulaire {
	


	public function __construct($actionForm, $methodForm, $nameForm, $arrayInput)
	{
		$this->formDebut = '<form action="'.$actionForm.'" method="'.$methodForm.'" name="'.$nameForm.'">';
		$this->formFin = '</form>';
	}

	public function __set($property, $value)
	{
		if(property_exists('formulaire', $property))
			$this->$property = $value;
		else
			throw new Exception("property invalid", 1);
	}

	public function __get($property)
	{
		if (property_exists('formulaire', $property))
			return($this->$property);
		else
			throw new Exception("property invalid", 1);
	}
}

class input {
	
	private $nameInput;
	private $typeInput;

	public function __construct($nameInput, $typeInput)
	{
		$this->$nameInput = $nameInput;
		$this->$typeInput = $typeInput;
	}

	public function __set($property, $value)
	{
		if(property_exists('input', $property))
			$this->$property = $value;
		else
			throw new Exception("property invalid", 1);
	}

	public function __get($property)
	{
		if (property_exists('input', $property))
			return($this->$property);
		else
			throw new Exception("property invalid", 1);
	}

	public assembleInput()
	{
		$this->input = '<input type="'.$this->typeInput.'" name="'.$this->nameInput.'">'
	}
}

?>