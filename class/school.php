<?php
session_start();
require('config.php');
class School {	
	public function adminLoginStatus (){
		if(empty($_SESSION["adminUserid"])) {
			header("Location: index.php");
		}
	}
}
?>