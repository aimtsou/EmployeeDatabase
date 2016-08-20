<?php
    include 'database.php';

    query(
        "UPDATE
			EMPLOYEE
		SET
			AFM=$_POST[AFM],
			Name='$_POST[Name]',
			Surname='$_POST[Surname]',
			Street='$_POST[Street]',
			S_Number=$_POST[S_Number],
			Postal_Code=$_POST[Postal_Code],
			Speciality='$_POST[Speciality]',
			Train_Level='$_POST[Train_Level]',
			Family_Status='$_POST[Family_Status]',
			Children_No=$_POST[Children_No],
			Code_Pos=$_POST[Code_Pos],
			Date_Start='$_POST[Date_Start]',
			Date_End='$_POST[Date_End]'
		WHERE
			AFM='$_POST[AFM]'"
        );
    Header ('Location: /db/views/modifyEmployees.php');
?>