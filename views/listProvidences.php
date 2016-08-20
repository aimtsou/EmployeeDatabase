<?php
    include "../header.php";
?>

<h2>Providences</h2>

<h4><th><a id='insert'  href="/db/views/modifyProvidences.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>Κωδικός Παροχών</th>
<th>Ταμείο Παροχών</th>
<th>Εισφορά Κλάδου Υγείας</th>
<th>Εισφορά Σύνταξης</th>
<th>Εισφορά Εφάπαξ</th>
<th>Κρατήσεις Υγείας</th>
<th>Κρατήσεις Σύνταξης</th>

</tr>

<?php
	include "../models/listProvidences.php";
    $provs = get_providences();
	
    foreach( $provs as $prov ) {
        echo "\n<tr>";
        
        echo "<td>" .  $prov[ 'Code_Prov' ] . "</td>";
        echo "<td>" .  $prov[ 'Tameio_Prov' ] . "</td>";
        echo "<td>" .  $prov[ 'Eisfora_Kladou_Ygeias' ] . "</td>";
		echo "<td>" .  $prov[ 'Eisfora_Syntakshs' ] . "</td>";
		echo "<td>" .  $prov[ 'Eisfora_Efapaks' ] . "</td>";
		echo "<td>" .  $prov[ 'Krathseis_Ygeias' ] . "</td>";
		echo "<td>" .  $prov[ 'Krathseis_Syntakshs' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>



<?php
    include "../footer.php";
?>