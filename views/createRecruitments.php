<?php
    include "../header.php"
?>

<h2>Insert Recruitment</h2>


<form action="/db/models/insertRecruitments.php" method="post">

    <table id="playlist" class="input form">
	<tr class="odd"><td>Κωδικός Θέσης:</td><td><select name="Code_Pos"><?php
		include_once '../models/database.php';
		$pos_result = query_array("SELECT Code_Pos FROM POSITION");
		foreach( $pos_result as $pos ) {
			echo '<option value="' . $pos['Code_Pos'] . '">' . $pos['Code_Pos'] . '</option>';
		}
	?></select></td></tr>
	<tr class="even"><td>Κωδικός Μέσου:</td><td><select name="Code_MME"><?php
		include_once '../models/database.php';
		$mm_result = query_array("SELECT Code_MME FROM MME");
		foreach( $mm_result as $mm ) {
			echo '<option value="' . $mm['Code_MME'] . '">' . $mm['Code_MME'] . '</option>';
		}
	?></select></td></tr>
    <tr class="odd"><td>Ημ/νία:</td><td> <input type="varchar" name="Date_Pub" /></td></tr>
	<tr class = "even"><td>Διάρκεια:</td><td> <input type="int" name="Duration" /></td></tr>
	  
    </table>
    
    <input id = "koumpi" type='submit' value='Submit' title='Προσθήκη'/>                                                   

</form>

<form action='/db/views/modifyRecruitments.php' method='post'> 
    <input type='submit' value='Cancel' title='¶κυρο'/>                                                   
</form>


<?php
    include "../footer.php"
?>