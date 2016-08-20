<?php  
    include_once 'database.php';

	function get_employees()
	{
		$sql = "SELECT * FROM INSEMP";
		return query_array( $sql );
	}
?>