<?php  
  include 'database.php';
  query(
    "INSERT INTO EMPLOYEE (
        AFM,
        Name,
        Surname,
        Street,
        S_Number,
        Postal_Code,
        Speciality,
        Train_Level,
        Family_Status,
        Children_No,
		Code_Pos,
		Date_Start,
		Date_End
    )
    VALUES (
        $_POST[AFM],
        '$_POST[Name]',
        '$_POST[Surname]',
        '$_POST[Street]', 
        $_POST[S_Number],
        $_POST[Postal_Code],
        '$_POST[Speciality]',
        '$_POST[Train_Level]',
        '$_POST[Family_Status]',
        $_POST[Children_No],
		$_POST[Code_Pos],
		'$_POST[Date_Start]',
		'$_POST[Date_End]'
    )");
 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /db/views/modifyEmployees.php');
?>