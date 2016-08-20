<?php
    include 'database.php';

    query(
        "UPDATE
			MME
		SET
			Code_MME=$_POST[Code_MME],
			Name='$_POST[Name]',
			MME_Type='$_POST[MME_Type]'
		WHERE
			Code_MME='$_POST[Code_MME]'"
        );
    Header ('Location: /db/views/modifyMME.php');
?>
