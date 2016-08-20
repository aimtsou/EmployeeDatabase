<?php
    include "../header.php"
?>

<h2>Update an Employee</h2>

<form action="/db/models/updateEmployees.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td> <input type="int" readonly="readonly" name="AFM" value="<?php echo rtrim($_POST['AFM'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Όνομα:</td><td> <input type="varchar" name="Name" value="<?php echo rtrim($_POST['Name'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Επώνυμο:</td><td> <input type="varchar" name="Surname" value="<?php echo rtrim($_POST['Surname'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Οδός:</td><td> <input type="varchar" name="Street" value="<?php echo rtrim($_POST['Street'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Αριθμός:</td><td> <input type="int" name="S_Number" value="<?php echo rtrim($_POST['S_Number'],'/'); ?>"/></td></tr>
	<tr class="even"><td>ΤΚ:</td><td> <input type="varchar" name="Postal_Code" value="<?php echo rtrim($_POST['Postal_Code'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Ειδικότητα:</td><td> <input type="varchar" name="Speciality" value="<?php echo rtrim($_POST['Speciality'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Επίπεδο Εκπαίδευσης:</td><td> <input type="varchar" name="Train_Level" value="<?php echo rtrim($_POST['Train_Level'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Οικογενειακή Κατάσταση:</td><td> <input type="varchar" name="Family_Status" value="<?php echo rtrim($_POST['Family_Status'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Αριθμός Τέκνων:</td><td> <input type="varchar" name="Children_No" value="<?php echo rtrim($_POST['Children_No'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Κωδικός Θέσης:</td><td> <input type="int" readonly="readonly" name="Code_Pos" value="<?php echo rtrim($_POST['Code_Pos'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Ημ/νία Έναρξης:</td><td> <input type="varchar" name="Date_Start" value="<?php echo rtrim($_POST['Date_Start'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Ημ/νία Λήξης:</td><td> <input type="varchar" name="Date_End" value="<?php echo rtrim($_POST['Date_End'],'/'); ?>"/></td></tr>
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>
<th><a id='insert'  href="/db/views/modifyEmployees.php">Cancel</a></th>

</form>


<?php
    include "../footer.php"
?>