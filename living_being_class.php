<?php
	public class LivingBeing
	{
		public var $height;
		public var $weight;
		public var $number_of_legs;
		public var $habitant;
		public var $fly;
		public var $run;
		public var $jump;
		public var $walk;
		public var $swim;
		public var $gender;
		
		public function __construct($height,$weight,$number_of_legs,$habitant,$fly,$run,$jump,$walk,$swim,$gender)
		{
			$this->height = $height;
			$this->weight = $weight;
			$this->number_of_legs = $number_of_legs;
			$this->habitant = $habitant;
			$this->fly = $fly;
			$this->run = $run;
			$this->jump = $jump;
			$this->gender = $gender;
			$this->walk = $walk;
			$this->swim = $swim;
		}
		public function flying()
		{
			if ($this-> fly == true)
			{
				echo "Living being flies.";
			}
			else
			{
				echo "Living being can't fly.";
			}
		}
		
		public function running()
		{
			if ($this-> fly == true)
			{
				echo "Living being runs.";
			}
			else
			{
				echo "Living being can't run.";
			}
		}
		
		public function jumping
		{
			if ($this-> fly == true)
			{
				echo "Living being jumps.";
			}
			else
			{
				echo "Living being can't jump.";
			}
		}
		
		public function walk()
		{
			if ($this-> walk == true)
			{
				echo "Living being walks.";
			}
			else
			{
				echo "Living being can't walk.";
			}
		}
	}
	
?>