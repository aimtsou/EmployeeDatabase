<?php
    include "../header.php";
?>

<h2>Evaluations</h2>
<h4><th><a id='insert'  href="/db/views/createEvaluations.php">INSERT</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Ημ/νία</th>
<th>Βαθμολογία</th>
<th></th>
<th></th>
</tr>

<?php
	include "../models/listEvaluations.php";
    $evaluations = get_evaluations();
	
    foreach( $evaluations as $evaluation ) {
        echo "\n<tr>";
        
        echo "<td>" .  $evaluation[ 'AFM' ] . "</td>";
        echo "<td>" .  $evaluation[ 'Date_Done' ] . "</td>";
        echo "<td>" .  $evaluation[ 'Score' ] . "</td>";
		
		echo "<td><form action='/db/views/updateEvaluations.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $evaluation[ 'AFM' ] . "/>";
        echo "<input type='hidden' name='Date_Done' value=" . $evaluation[ 'Date_Done' ] . "/>";
        echo "<input type='hidden' name='Score' value=" . $evaluation[ 'Score' ] . "/>";
		echo "<input class = 'button' type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";

        echo "<td><form action='/db/models/deleteEvaluations.php' method='post'>";
        echo "<input type='hidden' name='AFM' value=" . $evaluation[ 'AFM' ] . "/>";
		echo "<input type='hidden' name='Date_Done' value=" . $evaluation[ 'Date_Done' ] . "/>";
        echo "<input class = 'button' type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
		
        echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>