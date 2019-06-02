<?php

	function logged_in(){

		if(isset($_SESSION['username'])){
			
			return true;

		}else{
			
			return false;
		}
	}

?>