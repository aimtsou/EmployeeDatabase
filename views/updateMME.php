<?php
    include "../header.php"
?>

<h2>Update Media</h2>

<form action="/db/models/updateMME.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Μέσου:</td><td> <input type="int" readonly="readonly" name="Code_MME" value="<?php echo rtrim($_POST['Code_MME'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Όνομα:</td><td> <input type="varchar" name="Name" value="<?php echo rtrim($_POST['Name'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Τύπος Μέσου:</td><td> <input type="varchar" name="MME_Type" value="<?php echo rtrim($_POST['MME_Type'],'/'); ?>"/></td></tr>
	
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyMME.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
