<?php
    include "../header.php"
?>

<h2>Update Payment</h2>

<form action="/db/models/updatePayments.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Πληρωμής:</td><td> <input type="int" readonly="readonly" name="Code_Pay" value="<?php echo rtrim($_POST['Code_Pay'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Ημερομίσθιο:</td><td> <input type="int" name="Day_Pay" value="<?php echo rtrim($_POST['Day_Pay'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Ημέρες Εργασίας:</td><td> <input type="int" name="Days_Worked" value="<?php echo rtrim($_POST['Days_Worked'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Φόρος:</td><td> <input type="int" name="Tax" value="<?php echo rtrim($_POST['Tax'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Χαρτόσημο:</td><td> <input type="int" name="Chartosimo" value="<?php echo rtrim($_POST['Chartosimo'],'/'); ?>"/></td></tr>

</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyPayments.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
