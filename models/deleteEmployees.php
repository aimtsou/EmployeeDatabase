<?php
  include 'database.php';
  query("DELETE FROM EMPLOYEE WHERE AFM = '$_POST[AFM]'" );
  Header ('Location: /db/views/modifyEmployees.php');
?>