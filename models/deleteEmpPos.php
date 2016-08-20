<?php
  include 'database.php';
  query("DELETE FROM EMPLOYEE WHERE AFM = '$_POST[AFM]'" );
  query("DELETE FROM POSITION WHERE Code_Pos = '$_POST[Code_Pos]'" );
  Header ('Location: /db/views/modifyEmpPos.php');
?>