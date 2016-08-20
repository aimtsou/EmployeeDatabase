<?php  
    include_once 'database.php';

	function get_evaluations()
	{
		$sql = "SELECT * FROM EVALUATION";
		return query_array( $sql );
	}
?>