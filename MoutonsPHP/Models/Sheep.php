<?php
class Sheep {
	private $name;
	private $value;
	
	function __construct(String $name, Int $value){
		$this->name = $name;
		$this->value = $value;
	}
	
	function getName(){
		return $this->name;
	}
	function getValue(){
		return $this->value;
	}
}