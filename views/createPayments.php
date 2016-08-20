<?php
    include "../header.php"
?>

<h2>Insert Payment</h2>


<form action="/db/models/insertPayments.php" method="post">

    <table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Πληρωμής:</td><td> <input type="int" name="Code_Pay" /></td></tr>
    <tr class = "even"><td>Ημερομίσθιο:</td><td> <input type="int" name="Day_Pay" /></td></tr>
    <tr class="odd"><td>Ημέρες Εργασίας:</td><td> <input type="int" name="Days_Worked" /></td></tr>
	<tr class="even"><td>Φόρος:</td><td> <input type="int" name="Tax" /></td></tr>
     <tr class="odd"><td>Χαρτόσημο:</td><td> <input type="int" name="Chartosimo" /></td></tr>
   
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyPayments.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>