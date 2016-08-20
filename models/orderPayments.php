<?php  
    include_once 'database.php';

	function get_payments()
	{
		$sql = "SELECT * FROM PAYMENT ORDER BY Day_Pay";
		return query_array( $sql );
	}
?>