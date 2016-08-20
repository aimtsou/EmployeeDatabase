<?php
  include 'database.php';
  query("DELETE FROM MME WHERE Code_MME = '$_POST[Code_MME]'" );
  Header ('Location: /db/views/modifyMME.php');
?>