<?php  
  include 'database.php';
  query(
    "INSERT INTO RECRUITMENT (
        Code_Pos,
		Code_MME,
		Date_Pub,
		Duration	
    )
    VALUES (
        $_POST[Code_Pos],
        $_POST[Code_MME],
		'$_POST[Date_Pub]',
        $_POST[Duration]
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyRecruitments.php');
?>