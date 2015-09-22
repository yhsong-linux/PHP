<?php
	require 'page.php';
	
	class ServicesPage extends page{
		private $row2buttons = array("Re-engineering" => "reengineering.php",
										"Standards Compliance" => "standards.php",
										"Buzzword Compliance" => "buzzword.php",
										"Mission Statements" => "mission.php"
										);
		public function Display(){
			echo "<html>\n<head>\n";
			$this->DisplayTitle();
			$this->DisplayKeywords();
			$this->DisplayStyles();
			echo "</head>\n<body>\n";
			$this->DisplayHeader();
			$this->DisplayMenu($this->buttons);
			$this->DisplayMenu($this->row2buttons);
			echo $this->content;
			$this->DisplayFooter();
			echo "</body>\n</html>\n";
		}
	}
	
	$services = new ServicesPage();
	
	$services->content = "At TLA Cousulting, we offer a number of services.
							Perhaps the productivity of your employee would improve
							if we re-engineering your business. Maybe all your busniess 
							needs is a fresh mission statment, or a new batch of buzzwords.";
	
	$services->Display();
?>