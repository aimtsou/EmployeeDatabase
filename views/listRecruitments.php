<?php
    include "../header.php";
?>

<h2>Recruitments</h2>

<h4><th><a id='insert'  href="/db/views/modifyRecruitments.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Θέσης</th>
<th>Κωδικός Μέσου</th>
<th>Ημ/νία</th>
<th>Διάρκεια</th>
</tr>

<?php
	include "../models/listRecruitments.php";
    $recs = get_recruitments();
	
    foreach( $recs as $rec ) {
        echo "\n<tr>";
        
        echo "<td>" .  $rec[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $rec[ 'Code_MME' ] . "</td>";
        echo "<td>" .  $rec[ 'Date_Pub' ] . "</td>";
		echo "<td>" .  $rec[ 'Duration' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/joinRecruitments.php">JOIN WITH MEDIA</a></th> </h2>

<?php
    include "../footer.php";
?>