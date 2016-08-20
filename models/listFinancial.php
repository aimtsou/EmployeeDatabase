<?php  
    include_once 'database.php';

	function get_financial()
	{
		$sql = "SELECT * FROM FINANCIAL_SUMMARY";
		return query_array( $sql );
	}
?>