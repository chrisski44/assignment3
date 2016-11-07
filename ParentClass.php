<?php
	// This is the file for the parent class

	class ParentClass {
		private $n;
		private $c;
		private $s;
	

	  public function __construct($n, $c, $s){
		  $this->name = $n;
		  $this->city = $c;
		  $this->sport = $s;
	  }

	  public function getName(){
		  return $this->name;
	  }

	  public function getCity(){
	  	return $this->city;
	  }

	  public function getSport(){
		  return $this->sport;
	  }
    
    public function __toString(){
      $fullName = $this->getCity()." ".$this->getName();

      return "Team Name: ".$fullName."<br> Sport: ".$this->getSport()."<br>";
    }
	}