<?php
  include 'database.php';
  query("DELETE FROM PAYMENT WHERE Code_Pay = '$_POST[Code_Pay]'" );
  Header ('Location: /db/views/modifyPayments.php');
?>