<?php
    include "../header.php"
?>

<h2>Update Providence</h2>

<form action="/db/models/updateProvidences.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Παροχών:</td><td> <input type="int" readonly="readonly" name="Code_Prov" value="<?php echo rtrim($_POST['Code_Prov'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Ταμείο Παροχών:</td><td> <input type="varchar" name="Tameio_Prov" value="<?php echo rtrim($_POST['Tameio_Prov'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Εισφορά Κλάδου Υγείας:</td><td> <input type="int" name="Eisfora_Kladou_Ygeias" value="<?php echo rtrim($_POST['Eisfora_Kladou_Ygeias'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Εισφορά Σύνταξης:</td><td> <input type="int" name="Eisfora_Syntakshs" value="<?php echo rtrim($_POST['Eisfora_Syntakshs'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Εισφορά Εφάπαξ:</td><td> <input type="int" name="Eisfora_Efapaks" value="<?php echo rtrim($_POST['Eisfora_Efapaks'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Κρατήσεις Υγείας:</td><td> <input type="int" name="Krathseis_Ygeias" value="<?php echo rtrim($_POST['Krathseis_Ygeias'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Κρατήσεις Σύνταξης:</td><td> <input type="int" name="Krathseis_Syntakshs" value="<?php echo rtrim($_POST['Krathseis_Syntakshs'],'/'); ?>"/></td></tr>
	
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyProvidences.php">Cancel</a></th>
</form>

<?php
    include "../footer.php"
?>
