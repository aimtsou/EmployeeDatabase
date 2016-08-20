<?php  
  include 'database.php';
  query(
    "INSERT INTO PROMOTION (
        AFM,
		Date_Done,
		New_Pos	
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Date_Done]',
        '$_POST[New_Pos]'
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyPromotions.php');
?>