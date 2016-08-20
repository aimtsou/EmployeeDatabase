<?php
    include 'database.php';

    query(
        "UPDATE
			EVALUATION
		SET
			AFM='$_POST[AFM]',
			Date_Done='$_POST[Date_Done]',
			Score='$_POST[Score]'
		WHERE
			AFM='$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'"
        );
    Header ('Location: /db/views/modifyEvaluations.php');
?>
