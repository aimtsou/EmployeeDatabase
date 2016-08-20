<?php
  include 'database.php';
  query("DELETE FROM RECRUITMENT WHERE Code_Pos = '$_POST[Code_Pos]' AND Code_MME='$_POST[Code_MME]' AND Date_Pub='$_POST[Date_Pub]'" );
  Header ('Location: /db/views/modifyRecruitments.php');
?>