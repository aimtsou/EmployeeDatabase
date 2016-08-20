<?php  
  include 'database.php';
  query(
    "INSERT INTO MME (
        Code_MME,
		Name,
		MME_Type
    )
    VALUES (
        $_POST[Code_MME],
        '$_POST[Name]',
        '$_POST[MME_Type]'
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyMME.php');
?>