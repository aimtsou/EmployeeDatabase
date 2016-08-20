<?php  
    include_once 'database.php';
	
	
	function get_eps()
	{
		$sql = "SELECT * FROM EMPPOS";
		return query_array( $sql );
	}
