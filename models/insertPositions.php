<?php  
  include 'database.php';
  query(
    "INSERT INTO POSITION (
        Code_Pos,
        Department,
        Speciality,
        P_Number,
        Empty_Pos,
        Code_Pay,
        Code_Prov
    )
    VALUES (
        $_POST[Code_Pos],
        '$_POST[Department]',
        '$_POST[Speciality]',
        '$_POST[P_Number]', 
        $_POST[Empty_Pos],
        $_POST[Code_Pay],
        '$_POST[Code_Prov]'
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyPositions.php');
?>