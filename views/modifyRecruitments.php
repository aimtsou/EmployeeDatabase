<?php
    include "../header.php";
?>

<h2>Recruitments</h2>
<h4><th><a id='insert'  href="/db/views/createRecruitments.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Θέσης</th>
<th>Κωδικός Μέσου</th>
<th>Ημ/νία</th>
<th>Διάρκεια</th>
<th></th>
<th></th>
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
		
		echo "<td><form action='/db/views/updateRecruitments.php' method='post'>";
        echo "<input type='hidden' name='Code_Pos' value=" . $rec[ 'Code_Pos' ] . "/>";
        echo "<input type='hidden' name='Code_MME' value=" . $rec[ 'Code_MME' ] . "/>";      
		echo "<input type='hidden' name='Date_Pub' value=" . $rec[ 'Date_Pub' ] . "/>";
		echo "<input type='hidden' name='Duration' value=" . $rec[ 'Duration' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteRecruitments.php' method='post'>";
        echo "<input type='hidden' name='Code_Pos' value=" . $rec[ 'Code_Pos' ] . "/>";
		echo "<input type='hidden' name='Code_MME' value=" . $rec[ 'Code_MME' ] . "/>";
		echo "<input type='hidden' name='Date_Pub' value=" . $rec[ 'Date_Pub' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>