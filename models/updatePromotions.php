<?php
    include 'database.php';

    query(
        "UPDATE
			PROMOTION
		SET
			AFM=$_POST[AFM],
			Date_Done='$_POST[Date_Done]',
			New_Pos='$_POST[New_Pos]'
		WHERE
			AFM='$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'"
        );
    Header ('Location: /db/views/modifyPromotions.php');
?>
