<?php
    include "../header.php"
?>

<h2>Update Position</h2>

<form action="/db/models/updatePositions.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Θέσης:</td><td> <input type="int" readonly="readonly" name="Code_Pos" value="<?php echo rtrim($_POST['Code_Pos'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Τμήμα:</td><td> <input type="varchar" name="Department" value="<?php echo rtrim($_POST['Department'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Ειδικότητα:</td><td> <input type="varchar" name="Speciality" value="<?php echo rtrim($_POST['Speciality'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Αριθμός:</td><td> <input type="int" name="P_Number" value="<?php echo rtrim($_POST['P_Number'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Άδειες Θέσεις:</td><td> <input type="boolean" name="Empty_Pos" value="<?php echo rtrim($_POST['Empty_Pos'],'/'); ?>"/></td></tr>
	
	<tr class="even"><td>Κωδικός Πληρωμής:</td><td> <input type="int" readonly="readonly" name="Code_Pay" value="<?php echo rtrim($_POST['Code_Pay'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Κωδικός Παροχών:</td><td> <input type="int" readonly="readonly" name="Code_Prov" value="<?php echo rtrim($_POST['Code_Prov'],'/'); ?>"/></td></tr>
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyPositions.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
