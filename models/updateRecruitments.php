<?php
    include 'database.php';

    query(
        "UPDATE
			RECRUITMENT
		SET
			Code_Pos=$_POST[Code_Pos],
			Code_MME=$_POST[Code_MME],
			Date_Pub='$_POST[Date_Pub]',
			Duration='$_POST[Duration]'
		WHERE
			Code_Pos='$_POST[Code_Pos]' AND Code_MME='$_POST[Code_MME]' AND Date_Pub='$_POST[Date_Pub]'"
        );
    Header ('Location: /db/views/modifyRecruitments.php');
?>
