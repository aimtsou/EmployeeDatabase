<?php
    include "../header.php"
?>

<h2>Update Recruitment</h2>

<form action="/db/models/updateRecruitments.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Θέσης:</td><td> <input type="int" readonly="readonly" name="Code_Pos" value="<?php echo rtrim($_POST['Code_Pos'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Κωδικός Μέσου:</td><td><input type="int" readonly="readonly" name="Code_MME" value="<?php echo rtrim($_POST['Code_MME'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Ημ/νία:</td><td> <input type="varchar" readonly="readonly" name="Date_Pub" value="<?php echo rtrim($_POST['Date_Pub'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Διάρκεια:</td><td> <input type="int" name="Duration" value="<?php echo rtrim($_POST['Duration'],'/'); ?>"/></td></tr>
	
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyRecruitments.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
