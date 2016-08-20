<?php
  include 'database.php';
  query("DELETE FROM POSITION WHERE Code_Pos = '$_POST[Code_Pos]'" );
  Header ('Location: /db/views/modifyPositions.php');
?>