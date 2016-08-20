<?php  
    include_once 'database.php';

	function get_employees()
	{
		$sql = "SELECT employee.AFM, employee.Name, employee.Surname, financial_summary.Financial_Year, financial_summary.Miktes_Apodoxes_Etous FROM EMPLOYEE JOIN FINANCIAL_SUMMARY ON employee.AFM = financial_summary.AFM";
		return query_array( $sql );
	}
?>