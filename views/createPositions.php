<?php
    include "../header.php"
?>

<h2>Insert Position</h2>


<form action="/db/models/insertPositions.php" method="post">

    <table id="playlist" class="input form">
    <tr class="odd"><td>Κωδικός Θέσης:</td><td> <input type="int" name="Code_Pos" /></td></tr>
    <tr class = "even"><td>Τμήμα:</td><td> <input type="varchar" name="Department" /></td></tr>
    <tr class="odd"><td>Ειδικότητα:</td><td> <input type="varchar" name="Speciality" /></td></tr>
    <tr class="even"><td>Αριθμός:</td><td> <input type="int" name="P_Number" /></td></tr>
    <tr class="odd"><td>Άδειες Θέσεις:</td><td> <input type="boolean" name="Empty_Pos" /></td></tr>
    <tr class = "even"><td>Κωδικός Πληρωμής:</td><td><select name="Code_Pay"><?php
		include_once '../models/database.php';
		$pay_result = query_array("SELECT Code_Pay FROM PAYMENT");
		foreach( $pay_result as $pay ) {
			echo '<option value="' . $pay['Code_Pay'] . '">' . $pay['Code_Pay'] . '</option>';
		}
	?></select></td></tr>
	<tr class="odd"><td>Κωδικός Παροχών:</td><td><select name="Code_Prov"><?php
		include_once '../models/database.php';
		$prov_result = query_array("SELECT Code_Prov FROM PROVIDENCE");
		foreach( $prov_result as $prov ) {
			echo '<option value="' . $prov['Code_Prov'] . '">' . $prov['Code_Prov'] . '</option>';
		}
	?></select></td></tr>

    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyPositions.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>