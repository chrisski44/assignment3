<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		public $name;
		public $city;
		public $sport;
		public $logo;
		public $stadium;

		public function __construct($name, $city, $sport, $logo, $stadium){
			$this->name = $name;
			$this->city = $city;
			$this->sport = $sport;
			$this->logo = $logo;
			$this->stadium = $stadium;
		}

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

		public function __toString(){
			$fullName = $this->getOldCity()." ".$this->getOldName();
			$stadiumName = $this->getStadium();

			return "Team Name: ".$fullName." <br> Sport: ".$this->getOldSport()."<br> Stadium: ".$stadiumName;
		}

		public function cloneObj($Object){
			$cloneObject = clone $Object;
			return $cloneObject;
		}
	}

