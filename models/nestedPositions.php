<?php  
    include_once 'database.php';

	function get_positions()
	{
		$sql = "SELECT Code_Pos, Department FROM POSITION WHERE Code_Prov IN (SELECT Code_Prov FROM PROVIDENCE WHERE Tameio_Prov = 'tameio1')";
		return query_array( $sql );
	}
?> 