<?php
	public class Robot
	{
		public var $start_position;
		public var $current_position;
		public var $instuction;
		
		public function __construct($start_position)
		{
			$this->start_position = $start_position;
			$this->current_position = $start_position;
			$this->instuction = "S";
		}
		public function goLeft()
		{
			$this->current_position -= 1;
			echo "L\n";
		}
		public function goRight()
		{
			$this->current_position += 1;
			echo "R\n";
		}
		public function stop()
		{
			echo "S\n";
		}
		public function go_to($instuction)
		{
			$this->instuction = $instuction;
			echo "G '$instuction'\n";
		}
	}
?>