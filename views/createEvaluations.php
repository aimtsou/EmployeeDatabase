<?php
    include "../header.php"
?>

<h2>Insert Evaluation</h2>


<form action="/db/models/insertEvaluations.php" method="post">

    <table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td><select name="AFM"><?php
		include_once '../models/database.php';
		$emp_result = query_array("SELECT AFM FROM EMPLOYEE");
		foreach( $emp_result as $emp ) {
			echo '<option value="' . $emp['AFM'] . '">' . $emp['AFM'] . '</option>';
		}
	?></select></td></tr>
    <tr class = "even"><td>Ημ/νία:</td><td> <input type="varchar" name="Date_Done" /></td></tr>
    <tr class="odd"><td>Βαθμολογία:</td><td> <input type="varchar" name="Score" /></td></tr>
    
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyEvaluations.php' method='post'> 
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>