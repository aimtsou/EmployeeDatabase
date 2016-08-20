<?php  
    include_once 'database.php';

	function get_employees()
	{
		$sql = "SELECT * FROM EMPLOYEE";
		return query_array( $sql );
	}
?>