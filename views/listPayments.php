<?php
    include "../header.php";
?>

<h2>Payments</h2>

<h4><th><a id='insert'  href="/db/views/modifyPayments.php">MODIFY</a></th> </h4>

<table id="playlist" class = "content">
<tr class="even">
<th>������� ��������</th>
<th>�����������</th>
<th>������ ��������</th>
<th>�����</th>
<th>���������</th>
</tr>

<?php
	include "../models/listPayments.php";
    $pays = get_payments();
	
    foreach( $pays as $pay ) {
        echo "\n<tr>";
        
        echo "<td>" .  $pay[ 'Code_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Day_Pay' ] . "</td>";
        echo "<td>" .  $pay[ 'Days_Worked' ] . "</td>";
		echo "<td>" .  $pay[ 'Tax' ] . "</td>";
		echo "<td>" .  $pay[ 'Chartosimo' ] . "</td>";
		
		echo "</tr>";
    }
	 
?>
</table>

<h2><th><a id='insert'  href="/db/views/orderPayments.php">ORDER BY DAY PAY</a></th> </h2>

<?php
    include "../footer.php";
?>