<?php
  include 'database.php';
  query("DELETE FROM PROVIDENCE WHERE Code_Prov = '$_POST[Code_Prov]'" );
  Header ('Location: /db/views/modifyProvidences.php');
?>