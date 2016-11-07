<?php
	// This is the file for the parent class

	class ParentClass {
		private $n;
		private $c;
		private $s;
	
		//Magic method constructor
	  public function __construct($n, $c, $s){
		  $this->name = $n;
		  $this->city = $c;
		  $this->sport = $s;
	  }
	  //variable getters
	  public function getName(){
		  return $this->name;
	  }

	  public function getCity(){
	  	return $this->city;
	  }

	  public function getSport(){
		  return $this->sport;
	  }
    //Magic method toString
    public function __toString(){
      $fullName = $this->getCity()." ".$this->getName();

      return "Team Name: ".$fullName."<br> Sport: ".$this->getSport()."<br>";
    }
	}