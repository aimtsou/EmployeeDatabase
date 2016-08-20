<?php
    include "../header.php"
?>

<h2>Update Evaluation</h2>

<form action="/db/models/updateEvaluations.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td> <input type="int" readonly="readonly" name="AFM" value="<?php echo rtrim($_POST['AFM'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Ημ/νία:</td><td> <input type="varchar" readonly="readonly" name="Date_Done" value="<?php echo rtrim($_POST['Date_Done'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Βαθμολογία:</td><td> <input type="varchar" name="Score" value="<?php echo rtrim($_POST['Score'],'/'); ?>"/></td></tr>
	
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyEvaluations.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
