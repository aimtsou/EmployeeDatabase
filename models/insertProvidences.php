<?php  
  include 'database.php';
  query(
    "INSERT INTO PROVIDENCE (
        Code_Prov,
		Tameio_Prov,
		Eisfora_Kladou_Ygeias,
		Eisfora_Syntakshs,
		Eisfora_Efapaks,
		Krathseis_Ygeias,
		Krathseis_Syntakshs
    )
    VALUES (
        $_POST[Code_Prov],
        '$_POST[Tameio_Prov]',
        $_POST[Eisfora_Kladou_Ygeias],
		$_POST[Eisfora_Syntakshs],
		$_POST[Eisfora_Efapaks],
		$_POST[Krathseis_Ygeias],
		$_POST[Krathseis_Syntakshs]
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyProvidences.php');
?>