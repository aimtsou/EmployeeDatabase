<?php
    include 'database.php';

    query(
        "UPDATE
			EMPLOYEE
		SET
			Name='$_POST[Name]',
			Surname='$_POST[Surname]'
		WHERE
			AFM='$_POST[AFM]'"
        );
	query(
		"UPDATE
			POSITION
		SET
			Department='$_POST[Department]'
		WHERE
			Code_Pos='$_POST[Code_Pos]'"
	);
    Header ('Location: /db/views/modifyEmpPos.php');
?>