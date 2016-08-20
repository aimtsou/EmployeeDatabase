<?php  
    include_once 'database.php';

	function get_payments()
	{
		$sql = "SELECT * FROM PAYMENT";
		return query_array( $sql );
	}
?>