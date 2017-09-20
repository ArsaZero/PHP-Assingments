<?php

	include 'living_being_class.php';
	public class Human extends LivingBeing
	{	
		public var $name;
		public var $age;
		public var $hair_colour;
		public var $eye_colour;

		public function __construct($name,$age,$height,$weight,$hair_colour,$eye_colour,$gender)
		{
			parent::__construct($height,$weight,2,'land',false,true,true,true,true,$gender);
			$this->name = $name;
			$this->age = $age;
			$this->hair_colour = $hair_colour;
			$this->eye_colour = $eye_colour;
			
		}
		
		public function speak()
		{
			echo "Hello.";
		}
		
		public function learn()
		{
			echo "I am learing.";
		}
		public function go_to_work()
		{
			echo "It is time to go to work.";
		}
		public function wake_up()
		{
			echo "I am getting out of bed".;
		}
		public function go_to_sleep()
		{
			echo "I need to go to sleep. I am tired.";
		}
		public function eat()
		{
			echo "I am hungry.";
		}
	}

?>