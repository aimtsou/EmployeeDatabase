<?php
    include "../header.php"
?>

<h2>Update Promotion</h2>

<form action="/db/models/updatePromotions.php" method="post">
<table id="playlist" class="input form">
	<tr class="odd"><td>ΑΦΜ:</td><td> <input type="int" readonly="readonly" name="AFM" value="<?php echo rtrim($_POST['AFM'],'/'); ?>"/></td></tr>
	<tr class="even"><td>Ημ/νία:</td><td> <input type="varchar" readonly="readonly" name="Date_Done" value="<?php echo rtrim($_POST['Date_Done'],'/'); ?>"/></td></tr>
	<tr class="odd"><td>Νέα Θέση:</td><td> <input type="varchar" name="New_Pos" value="<?php echo rtrim($_POST['New_Pos'],'/'); ?>"/></td></tr>
	
</table>

<input type='submit' value = 'Submit' title='Προσθήκη'/>

<th><a id='insert'  href="/db/views/modifyPromotions.php">Cancel</a></th>

</form>

<?php
    include "../footer.php"
?>
