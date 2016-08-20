<?php  
    include_once 'database.php';

	function get_MME()
	{
		$sql = "SELECT * FROM MME";
		return query_array( $sql );
	}
?>