<?php  
  include 'database.php';
  query(
    "INSERT INTO PAYMENT (
        Code_Pay,
		Day_Pay,
		Days_Worked,
		Tax,
		Chartosimo
    )
    VALUES (
        $_POST[Code_Pay],
        '$_POST[Day_Pay]',
        $_POST[Days_Worked],
		$_POST[Tax],
		$_POST[Chartosimo]
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyPayments.php');
?>