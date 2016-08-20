<?php
    include "../header.php"
?>

<h2>Update Employee-Position View</h2>

<form action="/db/models/updateEmpPos.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td> <input type="int" readonly="readonly" name="AFM" value="<?php echo rtrim($_POST['AFM'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Όνομα:</td><td> <input type="varchar" name="Name" value="<?php echo rtrim($_POST['Name'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Επώνυμο:</td><td> <input type="varchar" name="Surname" value="<?php echo rtrim($_POST['Surname'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Κωδικός Θέσης:</td><td> <input type="int" readonly="readonly" name="Code_Pos" value="<?php echo rtrim($_POST['Code_Pos'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Τμήμα:</td><td> <input type="varchar" name="Department" value="<?php echo rtrim($_POST['Department'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Κωδικός Πληρωμής:</td><td> <input type="int" readonly="readonly" name="Code_Pay" value="<?php echo rtrim($_POST['Code_Pay'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Κωδικός Παροχών:</td><td> <input type="int" readonly="readonly" name="Code_Prov" value="<?php echo rtrim($_POST['Code_Prov'],'/'); ?>"/></td></tr>
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>
<th><a id='insert'  href="/db/views/modifyEmpPos.php">Cancel</a></th>

</form>


<?php
    include "../footer.php"
?>