<?php  
    include_once 'database.php';

	function get_evaluations()
	{
		$sql = "SELECT employee.AFM, employee.Name, employee.Surname, evaluation.Date_Done, max(evaluation.Score) AS 'Max Evaluation' FROM EMPLOYEE JOIN EVALUATION ON employee.AFM = evaluation.AFM GROUP BY AFM";
		return query_array( $sql );
	}
?>