<?php
    include 'database.php';

    query(
        "UPDATE
			FINANCIAL_SUMMARY
		SET
			AFM=$_POST[AFM],
			Financial_Year='$_POST[Financial_Year]',
			Miktes_Apodoxes_Etous=$_POST[Miktes_Apodoxes_Etous],
			Sunolo_Krathsewn_Etous=$_POST[Sunolo_Krathsewn_Etous]
		WHERE
			AFM='$_POST[AFM]' AND Financial_Year='$_POST[Financial_Year]'"
        );
    Header ('Location: /db/views/modifyFinancial.php');
?>
