<?php
    include "../header.php";
?>

<h2>Evaluations</h2>

<h4><th><a id='insert'  href="/db/views/modifyEvaluations.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Ημ/νία</th>
<th>Βαθμολογία</th>
</tr>

<?php
	include "../models/listEvaluations.php";
    $evs = get_evaluations();
	
    foreach( $evs as $ev ) {
        echo "\n<tr>";
        
        echo "<td>" .  $ev[ 'AFM' ] . "</td>";
        echo "<td>" .  $ev[ 'Date_Done' ] . "</td>";
        echo "<td>" .  $ev[ 'Score' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/maxEvaluations.php">MAX EMPLOYEE EVALUATION</a></th> </h2>

<?php
    include "../footer.php";
?>