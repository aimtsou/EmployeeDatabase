<?php
  include 'database.php';
  query("DELETE FROM PROMOTION WHERE AFM = '$_POST[AFM]' AND Date_Done='$_POST[Date_Done]'" );
  Header ('Location: /db/views/modifyPromotions.php');
?>