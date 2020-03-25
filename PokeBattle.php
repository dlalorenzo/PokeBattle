<?php

class Pokemon{

	public $name = '';
	public $energyType = '';
	public $health = 0;
	public $attacks = [];
	public $weakness = [];
	public $resistance = [];

	public function __construct($name, $energyType, $health, $attacks, $weakness, $resistance){

	$health = $hitpoints;
	$this->name = $name;
	$this->energyType = $energyType;
	$this->health = $health;
	$this->attacks = $attacks;
	$this->weakness = $weakness;
	$this->resistance = $resistance;
}
public function attack($enemy, $attack){
	$damage = $this->attacks[$attack][1];

	if ($this->energyType == $enemy->weakness[0]) {
		$damage = $damage * $enemy->weakness[1];
	}

	if($this->energyType == $enemy->resistance[0]){
		$damage -= $enemy->resistance[1];
	}
	$enemy->health=$damage;
}

}
?>