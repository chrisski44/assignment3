<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		//Global variables
		public $name;
		public $city;
		public $sport;
		public $logo;
		public $stadium;

		//Constructor magic method
		public function __construct($name, $city, $sport, $logo, $stadium){
			$this->name = $name;
			$this->city = $city;
			$this->sport = $sport;
			$this->logo = $logo;
			$this->stadium = $stadium;
		}
		//Inherit parent getters
		public function getOldName(){
			return parent::getName();
		}

		public function setName($newName){
			$this->name = $newName;
		}

		public function getOldCity(){
			return parent::getCity();
		}

		public function setCity($newCity){
			$this->city = $newCity;
		}

		public function getOldSport(){
			return parent::getSport();
		}

		public function setLogo($newLogo){
			$this->logo = $newLogo;
		}

		public function getLogo(){
			return $this->logo;
		}

		public function setStadium($newStadium){
			$this->stadium = $newStadium;
		}

		public function getStadium(){
			return $this->stadium;
		}
		//toString magic method to show object data
		public function __toString(){
			$fullName = $this->getOldCity()." ".$this->getOldName();
			$stadiumName = $this->getStadium();

			return "Team Name: ".$fullName." <br> Sport: ".$this->getOldSport()."<br> Stadium: ".$stadiumName;
		}
		//Make a clone of object if needed
		public function cloneObj($Object){
			$cloneObject = clone $Object;
			return $cloneObject;
		}
	}

