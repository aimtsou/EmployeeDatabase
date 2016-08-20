<?php
  include 'database.php';
  query("DELETE FROM FINANCIAL_SUMMARY WHERE AFM = '$_POST[AFM]' AND Financial_Year = '$_POST[Financial_Year]'" );
  Header ('Location: /db/views/modifyFinancial.php');
?>