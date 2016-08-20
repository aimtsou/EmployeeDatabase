<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>GREX Employee Database</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/db/chromemenu/chrometheme/chromestyle.css" />

<script type="text/javascript" src="/db/chromemenu/chromejs/chrome.js">

/***********************************************
* Chrome CSS Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<html>
		<head>
			<title>GREX Employee Record Database</title>
			<meta
                		http-equiv="Content-Type"
                		content = "text/html; charset=utf-8;"
        		/>
			<link
        			rel = "stylesheet"
        			type = "text/css"
				href = "/db/css/style.css" />
			<link/>
		</head>
	</div>
	
	<body>
		<h1 id = "top">  Employee Database</h1>
		<?php
    			$myset = include "settings-local.php";
		?>
		
		<!--Main Menu-->
		<div class= "chromostyle" id="chromemenu">
			<ul>
			<li class="mainMenu"><a href="/db">HOME</a></li>
			<li><a href="#" rel="dropmenu1">EMPLOYEES</a></li>
			<li><a href="#" rel="dropmenu2">POSITIONS</a></li>
			<li><a href="#" rel="dropmenu3">OTHER</a></li>
			<li><a href="#" rel="dropmenu4">VIEWS</a></li>
			</ul>
		</div>

<!--1st drop down menu-->
		<div id="dropmenu1" class="dropmenudiv">
			<a href="/db/views/listEmployees.php">List</a>
			<a href="/db/views/modifyEmployees.php">Modify</a>
		</div>  

<!--2nd drop down menu-->
			<div id="dropmenu2" class="dropmenudiv">
			<a href="/db/views/listPositions.php">List</a>
			<a href="/db/views/modifyPositions.php">Modify</a>
		</div>

<!--3rd drop down menu-->
		<div id="dropmenu3" class="dropmenudiv">
			<a href="/db/views/listEvaluations.php">Evaluation</a>
			<a href="/db/views/listFinancial.php">Financial Summary</a>
			<a href="/db/views/listPayments.php">Payment</a>
			<a href="/db/views/listPromotions.php">Promotion</a>
			<a href="/db/views/listProvidences.php">Providence</a>
			<a href="/db/views/listRecruitments.php">Recruitment</a>
			<a href="/db/views/listMME.php">Media</a>
		</div>
		
<!--4th drop down menu-->
		<div id="dropmenu4" class="dropmenudiv">
			<a href="/db/views/listEmpPos.php">Employee-Position</a>
		</div>  
		
<!--javascript menu-->

		<script type="text/javascript">
			cssdropdown.startchrome("chromemenu")
		</script>
		<h2></h2>
	</body>