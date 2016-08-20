<?php  
  include 'database.php';
  query(
    "INSERT INTO FINANCIAL_SUMMARY (
        AFM,
		Financial_Year,
		Miktes_Apodoxes_Etous,
		Sunolo_Krathsewn_Etous		
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Financial_Year]',
        $_POST[Miktes_Apodoxes_Etous],
		$_POST[Sunolo_Krathsewn_Etous]
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyFinancial.php');
?>