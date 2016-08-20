<?php
    include 'database.php';

    query(
        "UPDATE
			PAYMENT
		SET
			Code_Pay=$_POST[Code_Pay],
			Day_Pay='$_POST[Day_Pay]',
			Days_Worked=$_POST[Days_Worked],
			Tax=$_POST[Tax],
			Chartosimo=$_POST[Chartosimo]			
		WHERE
			Code_Pay='$_POST[Code_Pay]'"
        );
    Header ('Location: /db/views/modifyPayments.php');
?>
