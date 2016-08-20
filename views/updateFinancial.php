<?php
    include "../header.php"
?>

<h2>Update Financial Summary</h2>

<form action="/db/models/updateFinancial.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td><input type="int" readonly="readonly" name="AFM" value="<?php echo rtrim($_POST['AFM'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Οικονομικό Έτος:</td><td> <input type="varchar" readonly="readonly" name="Financial_Year" value="<?php echo rtrim($_POST['Financial_Year'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Μικτές Αποδοχές Έτους:</td><td> <input type="int" name="Miktes_Apodoxes_Etous" value="<?php echo rtrim($_POST['Miktes_Apodoxes_Etous'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Σύνολο Κρατήσεων Έτους:</td><td> <input type="int" name="Sunolo_Krathsewn_Etous" value="<?php echo rtrim($_POST['Sunolo_Krathsewn_Etous'],'/'); ?>"/></td></tr>

</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyFinancial.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
