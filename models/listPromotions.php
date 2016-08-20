<?php  
    include_once 'database.php';

	function get_promotions()
	{
		$sql = "SELECT * FROM PROMOTION";
		return query_array( $sql );
	}
?>