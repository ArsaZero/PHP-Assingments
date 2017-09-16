<?php
	include 'robot_class.php';
	
	$robot1 = new Robot(rand());
	$robot2 = new Robot(rand());
	
	$robot1->go_to("R");
	$robot2->go_to("R");
	
	while($robot1->current_position != $robot2->current_position)
	{
		if($robot1->current_position == $robot2->start_position && $robot1->instuction != "S")
		{
			$robot1->go_to("S");
			if($robot2->instuction == "L")
			{
				$robot2->go_to("R");
			}
			else if ($robot2->instuction == "R")
			{
				$robot2->go_to("L");
			}
		}
		
		if($robot2->current_position == $robot1->start_position && $robot2->instuction != "S")
		{
			$robot2->go_to("S");
			if($robot1->instuction == "L")
			{
				$robot1->go_to("R");
			}
			else if ($robot1->instuction == "R")
			{
				$robot1->go_to("L");
			}
		}
		
		switch ($robot1->instuction) 
		{
			case "S":
				$robot1->stop();
				break;
			case "R":
				$robot1->goRight();
				break;
			case "L":
				$robot1->goLeft();
				break;
		}
		
		switch ($robot2->instuction) 
		{
			case "S":
				$robot2->stop();
				break;
			case "R":
				$robot2->goRight();
				break;
			case "L":
				$robot2->goLeft();
				break;
		}
	
	}
	echo "Two robots crashed!";
	
	
?>