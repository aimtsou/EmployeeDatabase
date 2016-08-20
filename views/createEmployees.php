<?php
    include "../header.php"
?>

<h2>Insert an Employee</h2>


<form action="/db/models/insertEmployees.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>ΑΦΜ:</td><td> <input type="int" name="AFM" /></td></tr>
    <tr class = "even"><td>Όνομα:</td><td> <input type="int" name="Name" /></td></tr>
    <tr class="odd"><td>Επώνυμο:</td><td> <input type="int" name="Surname" /></td></tr>
    <tr class="even"><td>Οδός:</td><td> <input type="varchar" name="Street" /></td></tr>
    <tr class="odd"><td>Αριθμός:</td><td> <input type="varchar" name="S_Number" /></td></tr>
    <tr class = "even"><td>ΤΚ:</td><td> <input type="text" name="Postal_Code" /></td></tr>
	<tr class="odd"><td>Κωδικός Θέσης:</td><td><select name="Code_Pos"><?php
		include_once '../models/database.php';
		$position_result = query_array("SELECT Code_Pos FROM POSITION");
		foreach( $position_result as $pos ) {
			echo '<option value="' . $pos['Code_Pos'] . '">' . $pos['Code_Pos'] . '</option>';
		}
	
	?></select></td></tr>
    <tr class="even"><td>Ειδικότητα:</td><td> <input type="int" name="Speciality" /></td></tr>
    <tr class="odd"><td>Επίπεδο Εκπαίδευσης:</td><td> <input type="int" name="Train_Level" /></td></tr>
    <tr class="even"><td>Οικογενειακή Κατάσταση:</td><td> <input type="year" name="Family_Status" /></td></tr>
    <tr class="odd"><td>Αριθμός Τέκνων:</td><td> <input type="int" name="Children_No" /></td></tr>
    <tr class="even"><td>Ημ/νία Έναρξης:</td><td> <input type="int" name="Date_Start" /></td></tr>
	<tr class="odd"><td>Ημ/νία Λήξης:</td><td> <input type="int" name="Date_End" /></td></tr>
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyEmployees.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>