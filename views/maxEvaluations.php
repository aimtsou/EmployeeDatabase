<?php
    include "../header.php";
?>

<h2>Max Evaluations</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Ημ/νία</th>
<th>Μέγιστη Βαθμολογία</th>
</tr>

<?php
	include "../models/maxEvaluations.php";
    $evs = get_evaluations();
	
    foreach( $evs as $ev ) {
        echo "\n<tr>";
        
        echo "<td>" .  $ev[ 'AFM' ] . "</td>";
		echo "<td>" .  $ev[ 'Name' ] . "</td>";
		echo "<td>" .  $ev[ 'Surname' ] . "</td>";
        echo "<td>" .  $ev[ 'Date_Done' ] . "</td>";
        echo "<td>" .  $ev[ 'Max Evaluation' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>


<?php
    include "../footer.php";
?>