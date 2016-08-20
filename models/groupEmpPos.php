<?php  
    include_once 'database.php';

	function get_employees()
	{
		$sql = "SELECT Code_Pos, Department, count(Code_Pos) as 'Total' FROM EMPPOS GROUP BY Code_Pos";
		return query_array( $sql );
	}
?>
