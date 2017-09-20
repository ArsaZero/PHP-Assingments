<?php
	include 'human_class.php';
	include 'living_being_class.php';
	
	$human = new Human("Milos",22,180,80,'black','brown','male');
	if(date("h:i:s") == "07:00:00am")
	{
		$human->speak();
		$human->wake_up();
	}
	if(date("h:i:s") == "08:00:00am")
	{
		$human->go_to_work();
	}
	if(date("h:i:s") == "03:00:00pm")
	{
		$human->eat();
	}
	if(date("h:i:s") == "05:00:00pm")
	{
		$human->learn();
	}
	if(date("h:i:s") == "10:00:00pm")
	{
		$human->go_to_sleep();
	}
?>