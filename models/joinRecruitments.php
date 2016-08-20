<?php  
    include_once 'database.php';

	function get_recruitments()
	{
		$sql = "SELECT recruitment.Code_Pos, recruitment.Date_Pub, MME.Code_MME, MME.Name, MME.MME_Type FROM RECRUITMENT JOIN MME ON recruitment.Code_MME = MME.Code_MME";
		return query_array( $sql );
	}
?>