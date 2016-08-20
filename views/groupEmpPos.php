<?php
    include "../header.php";
?>

<h2>Employee-Position View</h2>



<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Θέσης</th>
<th>Τμήμα</th>
<th>Σύνολο</th>
</tr>

<?php
	include "../models/groupEmpPos.php";
    $employees = get_employees();
	
    foreach( $employees as $employee ) {
        echo "\n<tr>";
                
		echo "<td>" .  $employee[ 'Code_Pos' ] . "</td>";
		echo "<td>" .  $employee[ 'Department' ] . "</td>";
		echo "<td>" .  $employee[ 'Total' ] . "</td>";

        echo "</tr>";
    }
	 
?>
</table>


<?php
    include "../footer.php";
?>