<?php
    include "../header.php"
?>

<h2>Insert Promotion</h2>


<form action="/db/models/insertPromotions.php" method="post">

    <table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td><select name="AFM"><?php
		include_once '../models/database.php';
		$emp_result = query_array("SELECT AFM FROM EMPLOYEE");
		foreach( $emp_result as $emp ) {
			echo '<option value="' . $emp['AFM'] . '">' . $emp['AFM'] . '</option>';
		}
	?></select></td></tr>
    <tr class = "even"><td>Ημ/νία:</td><td> <input type="varchar" name="Date_Done" /></td></tr>
    <tr class="odd"><td>Νέα Θέση:</td><td> <input type="varchar" name="New_Pos" /></td></tr>
	  
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyPromotions.php' method='post'> 
    <input type='submit' value='Cancel' title='¶κυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>