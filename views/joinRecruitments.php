<?php
    include "../header.php";
?>

<h2>Recruitments - Media</h2>


<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Θέσης</th>
<th>Ημ/νία</th>
<th>Κωδικός Μέσου</th>
<th>Όνομα</th>
<th>Τύπος Μέσου</th>
</tr>

<?php
	include "../models/joinRecruitments.php";
    $recs = get_recruitments();
	
    foreach( $recs as $rec ) {
        echo "\n<tr>";
        
        echo "<td>" .  $rec[ 'Code_Pos' ] . "</td>";
        echo "<td>" .  $rec[ 'Date_Pub' ] . "</td>";
        echo "<td>" .  $rec[ 'Code_MME' ] . "</td>";
		echo "<td>" .  $rec[ 'Name' ] . "</td>";
		echo "<td>" .  $rec[ 'MME_Type' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/joinRecruitments.php">JOIN WITH MEDIA</a></th> </h2>

<?php
    include "../footer.php";
?>