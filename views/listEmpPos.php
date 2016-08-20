<?php
    include "../header.php";
?>

<h2>Employee-Position View</h2>
<h4><th><a id='insert'  href="/db/views/modifyEmpPos.php">MODIFY</a></th> </h4>


<table id="playlist" class = "content">
<tr class="even">
<th>ΑΦΜ</th>
<th>Όνομα</th>
<th>Επώνυμο</th>
<th>Κωδικός Θέσης</th>
<th>Τμήμα</th>
<th>Κωδικός Πληρωμής</th>
<th>Κωδικός Παροχών</th>
</tr>

<?php
	include "../models/listEmpPos.php";
    $eps = get_eps();
	
    foreach( $eps as $ep ) {
        echo "\n<tr>";
        
        echo "<td>" .  $ep[ 'AFM' ] . "</td>";
        echo "<td>" .  $ep[ 'Name' ] . "</td>";
        echo "<td>" .  $ep[ 'Surname' ] . "</td>";
        echo "<td>" .  $ep[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $ep[ 'Department' ] . "</td>"; 
        echo "<td>" .  $ep[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $ep[ 'Code_Prov' ] . "</td>";

        echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/groupEmpPos.php">GROUP BY DEPARTMENT</a></th> </h2>

<?php
    include "../footer.php";
?>