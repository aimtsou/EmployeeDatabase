<?php  
  include 'database.php';
  query(
    "INSERT INTO EVALUATION (
        AFM,
		Date_Done,
		Score
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Date_Done]',
        '$_POST[Score]'
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyEvaluations.php');
?>