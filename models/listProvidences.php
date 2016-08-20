<?php  
    include_once 'database.php';

	function get_providences()
	{
		$sql = "SELECT * FROM PROVIDENCE";
		return query_array( $sql );
	}
?>