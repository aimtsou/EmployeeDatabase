<?php  
    include_once 'database.php';

	function get_recruitments()
	{
		$sql = "SELECT * FROM RECRUITMENT";
		return query_array( $sql );
	}
?>