<?php  
    include_once 'database.php';

	function get_employees()
	{
		$sql = "SELECT Name, Surname, Children_No, count(Children_No) as 'Total' FROM EMPLOYEE GROUP BY Children_No HAVING Children_No>0 ORDER BY Children_No";
		return query_array( $sql );
	}
?>
