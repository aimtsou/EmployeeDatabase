<?php  
    include_once 'database.php';

	function get_positions()
	{
		$sql = "SELECT * FROM POSITION";
		return query_array( $sql );
	}
?>