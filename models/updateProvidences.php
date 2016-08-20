<?php
    include 'database.php';

    query(
        "UPDATE
			PROVIDENCE
		SET
			Code_Prov=$_POST[Code_Prov],
			Tameio_Prov='$_POST[Tameio_Prov]',
			Eisfora_Kladou_Ygeias=$_POST[Eisfora_Kladou_Ygeias],
			Eisfora_Syntakshs=$_POST[Eisfora_Syntakshs],
			Eisfora_Efapaks=$_POST[Eisfora_Efapaks],
			Krathseis_Ygeias=$_POST[Krathseis_Ygeias],
			Krathseis_Syntakshs=$_POST[Krathseis_Syntakshs]
		WHERE
			Code_Prov='$_POST[Code_Prov]'"
        );
    Header ('Location: /db/views/modifyProvidences.php');
?>
