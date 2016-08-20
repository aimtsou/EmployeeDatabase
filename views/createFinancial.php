<?php
    include "../header.php"
?>

<h2>Insert Financial Summary</h2>


<form action="/db/models/insertFinancial.php" method="post">

    <table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td><select name="AFM"><?php
		include_once '../models/database.php';
		$emp_result = query_array("SELECT AFM FROM EMPLOYEE");
		foreach( $emp_result as $emp ) {
			echo '<option value="' . $emp['AFM'] . '">' . $emp['AFM'] . '</option>';
		}
	?></select></td></tr>
    <tr class = "even"><td>Οικονομικό Έτος‚:</td><td> <input type="varchar" name="Financial_Year" /></td></tr>
    <tr class="odd"><td>Μικτές Αποδοχές Έτους:</td><td> <input type="int" name="Miktes_Apodoxes_Etous" /></td></tr>
	<tr class="even"><td>Σύνολο Κρατήσεων Έτους:</td><td> <input type="int" name="Sunolo_Krathsewn_Etous" /></td></tr>
    
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη·'/>                                                   

</form>

<form action='/db/views/modifyFinancial.php' method='post'> 
    <input type='submit' value='Cancel' title='¶κυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>