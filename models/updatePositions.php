<?php
    include 'database.php';

    query(
        "UPDATE
			POSITION
		SET
			Code_Pos='$_POST[Code_Pos]',
			Department='$_POST[Department]',
			Speciality='$_POST[Speciality]',
			P_Number=$_POST[P_Number],
			Empty_Pos=$_POST[Empty_Pos],
			Code_Pay=$_POST[Code_Pay],
			Code_Prov=$_POST[Code_Prov]
		WHERE
			Code_Pos='$_POST[Code_Pos]'"
        );
    Header ('Location: /db/views/modifyPositions.php');
?>
