<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Body Counts - Confirmation</title>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="table2excel.js"></script>

</head><body>

<?php
//initialize variables
$outcome = '';
$submit_header = '';
$submissions = '';
$correction = '';
$date = '';
$a8centralSeating2 = $a8centralComputers2 = $a8ada204 = $a8publicStations2 = $a8leftSeating2 = $a8study207 = $a8study212 = $a8rightSeating2 = $a8isLab = $a8greatHall = $a8other2 = $a8studyLoft = $a8centralSeating3 = $a8study302 = $a8study303 = $a8leftCarrels = $a8study306 = $a8study312 = $a8rightCarrels = $a8study315 = $a8study316 = $a8study317 = $a8other3 = '';
$a9centralSeating2 = $a9centralComputers2 = $a9ada204 = $a9publicStations2 = $a9leftSeating2 = $a9study207 = $a9study212 = $a9rightSeating2 = $a9isLab = $a9greatHall = $a9other2 = $a9studyLoft = $a9centralSeating3 = $a9study302 = $a9study303 = $a9leftCarrels = $a9study306 = $a9study312 = $a9rightCarrels = $a9study315 = $a9study316 = $a9study317 = $a9other3 = '';
$a10centralSeating2 = $a10centralComputers2 = $a10ada204 = $a10publicStations2 = $a10leftSeating2 = $a10study207 = $a10study212 = $a10rightSeating2 = $a10isLab = $a10greatHall = $a10other2 = $a10studyLoft = $a10centralSeating3 = $a10study302 = $a10study303 = $a10leftCarrels = $a10study306 = $a10study312 = $a10rightCarrels = $a10study315 = $a10study316 = $a10study317 = $a10other3 = '';
$a11centralSeating2 = $a11centralComputers2 = $a11ada204 = $a11publicStations2 = $a11leftSeating2 = $a11study207 = $a11study212 = $a11rightSeating2 = $a11isLab = $a11greatHall = $a11other2 = $a11studyLoft = $a11centralSeating3 = $a11study302 = $a11study303 = $a11leftCarrels = $a11study306 = $a11study312 = $a11rightCarrels = $a11study315 = $a11study316 = $a11study317 = $a11other3 = '';
$p12centralSeating2 = $p12centralComputers2 = $p12ada204 = $p12publicStations2 = $p12leftSeating2 = $p12study207 = $p12study212 = $p12rightSeating2 = $p12isLab = $p12greatHall = $p12other2 = $p12studyLoft = $p12centralSeating3 = $p12study302 = $p12study303 = $p12leftCarrels = $p12study306 = $p12study312 = $p12rightCarrels = $p12study315 = $p12study316 = $p12study317 = $p12other3 = '';
$p1centralSeating2 = $p1centralComputers2 = $p1ada204 = $p1publicStations2 = $p1leftSeating2 = $p1study207 = $p1study212 = $p1rightSeating2 = $p1isLab = $p1greatHall = $p1other2 = $p1studyLoft = $p1centralSeating3 = $p1study302 = $p1study303 = $p1leftCarrels = $p1study306 = $p1study312 = $p1rightCarrels = $p1study315 = $p1study316 = $p1study317 = $p1other3 = '';
$p2centralSeating2 = $p2centralComputers2 = $p2ada204 = $p2publicStations2 = $p2leftSeating2 = $p2study207 = $p2study212 = $p2rightSeating2 = $p2isLab = $p2greatHall = $p2other2 = $p2studyLoft = $p2centralSeating3 = $p2study302 = $p2study303 = $p2leftCarrels = $p2study306 = $p2study312 = $p2rightCarrels = $p2study315 = $p2study316 = $p12study317 = $p2other3 = '';
$p3centralSeating2 = $p3centralComputers2 = $p3ada204 = $p3publicStations2 = $p3leftSeating2 = $p3study207 = $p3study212 = $p3rightSeating2 = $p3isLab = $p3greatHall = $p3other2 = $p3studyLoft = $p3centralSeating3 = $p3study302 = $p3study303 = $p3leftCarrels = $p3study306 = $p3study312 = $p3rightCarrels = $p3study315 = $p3study316 = $p3study317 = $p3other3 = '';
$p4centralSeating2 = $p4centralComputers2 = $p4ada204 = $p4publicStations2 = $p4leftSeating2 = $p4study207 = $p4study212 = $p4rightSeating2 = $p4isLab = $p4greatHall = $p4other2 = $p4studyLoft = $p4centralSeating3 = $p4study302 = $p4study303 = $p4leftCarrels = $p4study306 = $p4study312 = $p4rightCarrels = $p4study315 = $p4study316 = $p4study317 = $p4other3 = '';
$p5centralSeating2 = $p5centralComputers2 = $p5ada204 = $p5publicStations2 = $p5leftSeating2 = $p5study207 = $p5study212 = $p5rightSeating2 = $p5isLab = $p5greatHall = $p5other2 = $p5studyLoft = $p5centralSeating3 = $p5study302 = $p5study303 = $p5leftCarrels = $p5study306 = $p5study312 = $p5rightCarrels = $p5study315 = $p5study316 = $p5study317 = $p5other3 = '';
$p6centralSeating2 = $p6centralComputers2 = $p6ada204 = $p6publicStations2 = $p6leftSeating2 = $p6study207 = $p6study212 = $p6rightSeating2 = $p6isLab = $p6greatHall = $p6other2 = $p6studyLoft = $p6centralSeating3 = $p6study302 = $p6study303 = $p6leftCarrels = $p6study306 = $p6study312 = $p6rightCarrels = $p6study315 = $p6study316 = $p6study317 = $p6other3 = '';
$p7centralSeating2 = $p7centralComputers2 = $p7ada204 = $p7publicStations2 = $p7leftSeating2 = $p7study207 = $p7study212 = $p7rightSeating2 = $p7isLab = $p7greatHall = $p7other2 = $p7studyLoft = $p7centralSeating3 = $p7study302 = $p7study303 = $p7leftCarrels = $p7study306 = $p7study312 = $p7rightCarrels = $p7study315 = $p7study316 = $p7study317 = $p7other3 = '';
$p8centralSeating2 = $p8centralComputers2 = $p8ada204 = $p8publicStations2 = $p8leftSeating2 = $p8study207 = $p8study212 = $p8rightSeating2 = $p8isLab = $p8greatHall = $p8other2 = $p8studyLoft = $p8centralSeating3 = $p8study302 = $p8study303 = $p8leftCarrels = $p8study306 = $p8study312 = $p8rightCarrels = $p8study315 = $p8study316 = $p8study317 = $p8other3 = '';
$p9centralSeating2 = $p9centralComputers2 = $p9ada204 = $p9publicStations2 = $p9leftSeating2 = $p9study207 = $p9study212 = $p9rightSeating2 = $p9isLab = $p9greatHall = $p9other2 = $p9studyLoft = $p9centralSeating3 = $p9study302 = $p9study303 = $p9leftCarrels = $p9study306 = $p9study312 = $p9rightCarrels = $p9study315 = $p9study316 = $p9study317 = $p9other3 = '';
$p10centralSeating2 = $p10centralComputers2 = $p10ada204 = $p10publicStations2 = $p10leftSeating2 = $p10study207 = $p10study212 = $p10rightSeating2 = $p10isLab = $p10greatHall = $p10other2 = $p10studyLoft = $p10centralSeating3 = $p10study302 = $p10study303 = $p10leftCarrels = $p10study306 = $p10study312 = $p10rightCarrels = $p10study315 = $p10study316 = $p10study317 = $p10other3 = '';
$p11centralSeating2 = $p11centralComputers2 = $p11ada204 = $p11publicStations2 = $p11leftSeating2 = $p11study207 = $p11study212 = $p11rightSeating2 = $p11isLab = $p11greatHall = $p11other2 = $p11studyLoft = $p11centralSeating3 = $p11study302 = $p11study303 = $p11leftCarrels = $p11study306 = $p11study312 = $p11rightCarrels = $p11study315 = $p11study316 = $p11study317 = $p11other3 = '';

	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}	
		
if($_SERVER['REQUEST_METHOD']=='POST') {
	//retrieve variables
	$date = $_POST['date'];
	$date = date("Y-m-d", strtotime($date));
	$day = date('l', strtotime( $date));
	$month = date("F");
	$a8centralSeating2 = test_input($_POST["a8centralSeating2"]);
	$a8centralComputers2 = test_input($_POST['a8centralComputers2']);
	$a8ada204 = test_input($_POST['a8ada204']);
	$a8publicStations2 = test_input($_POST['a8publicStations2']);
	$a8leftSeating2 = test_input($_POST['a8leftSeating2']);
	$a8study207 = test_input($_POST['a8study207']);
	$a8study212 = test_input($_POST['a8study212']);
	$a8rightSeating2 = test_input($_POST['a8rightSeating2']);
	$a8isLab = test_input($_POST['a8isLab']);
	$a8greatHall = test_input($_POST['a8greatHall']);
	$a8other2 = test_input($_POST['a8other2']);
	$a8studyLoft = test_input($_POST['a8studyLoft']);
	$a8centralSeating3 = test_input($_POST['a8centralSeating3']);
	$a8study302 = test_input($_POST['a8study302']);
	$a8study303 = test_input($_POST['a8study303']);
	$a8leftCarrels = test_input($_POST['a8leftCarrels']);
	$a8study306 = test_input($_POST['a8study306']);
	$a8study312 = test_input($_POST['a8study312']);
	$a8rightCarrels = test_input($_POST['a8rightCarrels']);
	$a8study315 = test_input($_POST['a8study315']);
	$a8study316 = test_input($_POST['a8study316']);
	$a8study317 = test_input($_POST['a8study317']);
	$a8other3 = test_input($_POST['a8other3']);
	$a9centralSeating2 = test_input($_POST['a9centralSeating2']);
	$a9centralComputers2 = test_input($_POST['a9centralComputers2']);
	$a9ada204 = test_input($_POST['a9ada204']);
	$a9publicStations2 = test_input($_POST['a9publicStations2']);
	$a9leftSeating2 = test_input($_POST['a9leftSeating2']);
	$a9study207 = test_input($_POST['a9study207']);
	$a9study212 = test_input($_POST['a9study212']);
	$a9rightSeating2 = test_input($_POST['a9rightSeating2']);
	$a9isLab = test_input($_POST['a9isLab']);
	$a9greatHall = test_input($_POST['a9greatHall']);
	$a9other2 = test_input($_POST['a9other2']);
	$a9studyLoft = test_input($_POST['a9studyLoft']);
	$a9centralSeating3 = test_input($_POST['a9centralSeating3']);
	$a9study302 = test_input($_POST['a9study302']);
	$a9study303 = test_input($_POST['a9study303']);
	$a9leftCarrels = test_input($_POST['a9leftCarrels']);
	$a9study306 = test_input($_POST['a9study306']);
	$a9study312 = test_input($_POST['a9study312']);
	$a9rightCarrels = test_input($_POST['a9rightCarrels']);
	$a9study315 = test_input($_POST['a9study315']);
	$a9study316 = test_input($_POST['a9study316']);
	$a9study317 = test_input($_POST['a9study317']);
	$a9other3 = test_input($_POST['a9other3']);	
	$a10centralSeating2 = test_input($_POST['a10centralSeating2']);
	$a10centralComputers2 = test_input($_POST['a10centralComputers2']);
	$a10ada204 = test_input($_POST['a10ada204']);
	$a10publicStations2 = test_input($_POST['a10publicStations2']);
	$a10leftSeating2 = test_input($_POST['a10leftSeating2']);
	$a10study207 = test_input($_POST['a10study207']);
	$a10study212 = test_input($_POST['a10study212']);
	$a10rightSeating2 = test_input($_POST['a10rightSeating2']);
	$a10isLab = test_input($_POST['a10isLab']);
	$a10greatHall = test_input($_POST['a10greatHall']);
	$a10other2 = test_input($_POST['a10other2']);
	$a10studyLoft = test_input($_POST['a10studyLoft']);
	$a10centralSeating3 = test_input($_POST['a10centralSeating3']);
	$a10study302 = test_input($_POST['a10study302']);
	$a10study303 = test_input($_POST['a10study303']);
	$a10leftCarrels = test_input($_POST['a10leftCarrels']);
	$a10study306 = test_input($_POST['a10study306']);
	$a10study312 = test_input($_POST['a10study312']);
	$a10rightCarrels = test_input($_POST['a10rightCarrels']);
	$a10study315 = test_input($_POST['a10study315']);
	$a10study316 = test_input($_POST['a10study316']);
	$a10study317 = test_input($_POST['a10study317']);
	$a10other3 = test_input($_POST['a10other3']);
	$a11centralSeating2 = test_input($_POST['a11centralSeating2']);
	$a11centralComputers2 = test_input($_POST['a11centralComputers2']);
	$a11ada204 = test_input($_POST['a11ada204']);
	$a11publicStations2 = test_input($_POST['a11publicStations2']);
	$a11leftSeating2 = test_input($_POST['a11leftSeating2']);
	$a11study207 = test_input($_POST['a11study207']);
	$a11study212 = test_input($_POST['a11study212']);
	$a11rightSeating2 = test_input($_POST['a11rightSeating2']);
	$a11isLab = test_input($_POST['a11isLab']);
	$a11greatHall = test_input($_POST['a11greatHall']);
	$a11other2 = test_input($_POST['a11other2']);
	$a11studyLoft = test_input($_POST['a11studyLoft']);
	$a11centralSeating3 = test_input($_POST['a11centralSeating3']);
	$a11study302 = test_input($_POST['a11study302']);
	$a11study303 = test_input($_POST['a11study303']);
	$a11leftCarrels = test_input($_POST['a11leftCarrels']);
	$a11study306 = test_input($_POST['a11study306']);
	$a11study312 = test_input($_POST['a11study312']);
	$a11rightCarrels = test_input($_POST['a11rightCarrels']);
	$a11study315 = test_input($_POST['a11study315']);
	$a11study316 = test_input($_POST['a11study316']);
	$a11study317 = test_input($_POST['a11study317']);
	$a11other3 = test_input($_POST['a11other3']);
	$p12centralSeating2 = test_input($_POST['p12centralSeating2']);
	$p12centralComputers2 = test_input($_POST['p12centralComputers2']);
	$p12ada204 = test_input($_POST['p12ada204']);
	$p12publicStations2 = test_input($_POST['p12publicStations2']);
	$p12leftSeating2 = test_input($_POST['p12leftSeating2']);
	$p12study207 = test_input($_POST['p12study207']);
	$p12study212 = test_input($_POST['p12study212']);
	$p12rightSeating2 = test_input($_POST['p12rightSeating2']);
	$p12isLab = test_input($_POST['p12isLab']);
	$p12greatHall = test_input($_POST['p12greatHall']);
	$p12other2 = test_input($_POST['p12other2']);
	$p12studyLoft = test_input($_POST['p12studyLoft']);
	$p12centralSeating3 = test_input($_POST['p12centralSeating3']);
	$p12study302 = test_input($_POST['p12study302']);
	$p12study303 = test_input($_POST['p12study303']);
	$p12leftCarrels = test_input($_POST['p12leftCarrels']);
	$p12study306 = test_input($_POST['p12study306']);
	$p12study312 = test_input($_POST['p12study312']);
	$p12rightCarrels = test_input($_POST['p12rightCarrels']);
	$p12study315 = test_input($_POST['p12study315']);
	$p12study316 = test_input($_POST['p12study316']);
	$p12study317 = test_input($_POST['p12study317']);
	$p12other3 = test_input($_POST['p12other3']);
	$p1centralSeating2 = test_input($_POST['p1centralSeating2']);
	$p1centralComputers2 = test_input($_POST['p1centralComputers2']);
	$p1ada204 = test_input($_POST['p1ada204']);
	$p1publicStations2 = test_input($_POST['p1publicStations2']);
	$p1leftSeating2 = test_input($_POST['p1leftSeating2']);
	$p1study207 = test_input($_POST['p1study207']);
	$p1study212 = test_input($_POST['p1study212']);
	$p1rightSeating2 = test_input($_POST['p1rightSeating2']);
	$p1isLab = test_input($_POST['p1isLab']);
	$p1greatHall = test_input($_POST['p1greatHall']);
	$p1other2 = test_input($_POST['p1other2']);
	$p1studyLoft = test_input($_POST['p1studyLoft']);
	$p1centralSeating3 = test_input($_POST['p1centralSeating3']);
	$p1study302 = test_input($_POST['p1study302']);
	$p1study303 = test_input($_POST['p1study303']);
	$p1leftCarrels = test_input($_POST['p1leftCarrels']);
	$p1study306 = test_input($_POST['p1study306']);
	$p1study312 = test_input($_POST['p1study312']);
	$p1rightCarrels = test_input($_POST['p1rightCarrels']);
	$p1study315 = test_input($_POST['p1study315']);
	$p1study316 = test_input($_POST['p1study316']);
	$p1study317 = test_input($_POST['p1study317']);
	$p1other3 = test_input($_POST['p1other3']);
	$p2centralSeating2 = test_input($_POST['p2centralSeating2']);
	$p2centralComputers2 = test_input($_POST['p2centralComputers2']);
	$p2ada204 = test_input($_POST['p2ada204']);
	$p2publicStations2 = test_input($_POST['p2publicStations2']);
	$p2leftSeating2 = test_input($_POST['p2leftSeating2']);
	$p2study207 = test_input($_POST['p2study207']);
	$p2study212 = test_input($_POST['p2study212']);
	$p2rightSeating2 = test_input($_POST['p2rightSeating2']);
	$p2isLab = test_input($_POST['p2isLab']);
	$p2greatHall = test_input($_POST['p2greatHall']);
	$p2other2 = test_input($_POST['p2other2']);
	$p2studyLoft = test_input($_POST['p2studyLoft']);
	$p2centralSeating3 = test_input($_POST['p2centralSeating3']);
	$p2study302 = test_input($_POST['p2study302']);
	$p2study303 = test_input($_POST['p2study303']);
	$p2leftCarrels = test_input($_POST['p2leftCarrels']);
	$p2study306 = test_input($_POST['p2study306']);
	$p2study312 = test_input($_POST['p2study312']);
	$p2rightCarrels = test_input($_POST['p2rightCarrels']);
	$p2study315 = test_input($_POST['p2study315']);
	$p2study316 = test_input($_POST['p2study316']);
	$p2study317 = test_input($_POST['p2study317']);
	$p2other3 = test_input($_POST['p2other3']);
	$p3centralSeating2 = test_input($_POST['p3centralSeating2']);
	$p3centralComputers2 = test_input($_POST['p3centralComputers2']);
	$p3ada204 = test_input($_POST['p3ada204']);
	$p3publicStations2 = test_input($_POST['p3publicStations2']);
	$p3leftSeating2 = test_input($_POST['p3leftSeating2']);
	$p3study207 = test_input($_POST['p3study207']);
	$p3study212 = test_input($_POST['p3study212']);
	$p3rightSeating2 = test_input($_POST['p3rightSeating2']);
	$p3isLab = test_input($_POST['p3isLab']);
	$p3greatHall = test_input($_POST['p3greatHall']);
	$p3other2 = test_input($_POST['p3other2']);
	$p3studyLoft = test_input($_POST['p3studyLoft']);
	$p3centralSeating3 = test_input($_POST['p3centralSeating3']);
	$p3study302 = test_input($_POST['p3study302']);
	$p3study303 = test_input($_POST['p3study303']);
	$p3leftCarrels = test_input($_POST['p3leftCarrels']);
	$p3study306 = test_input($_POST['p3study306']);
	$p3study312 = test_input($_POST['p3study312']);
	$p3rightCarrels = test_input($_POST['p3rightCarrels']);
	$p3study315 = test_input($_POST['p3study315']);
	$p3study316 = test_input($_POST['p3study316']);
	$p3study317 = test_input($_POST['p3study317']);
	$p3other3 = test_input($_POST['p3other3']);
	$p4centralSeating2 = test_input($_POST['p4centralSeating2']);
	$p4centralComputers2 = test_input($_POST['p4centralComputers2']);
	$p4ada204 = test_input($_POST['p4ada204']);
	$p4publicStations2 = test_input($_POST['p4publicStations2']);
	$p4leftSeating2 = test_input($_POST['p4leftSeating2']);
	$p4study207 = test_input($_POST['p4study207']);
	$p4study212 = test_input($_POST['p4study212']);
	$p4rightSeating2 = test_input($_POST['p4rightSeating2']);
	$p4isLab = test_input($_POST['p4isLab']);
	$p4greatHall = test_input($_POST['p4greatHall']);
	$p4other2 = test_input($_POST['p4other2']);
	$p4studyLoft = test_input($_POST['p4studyLoft']);
	$p4centralSeating3 = test_input($_POST['p4centralSeating3']);
	$p4study302 = test_input($_POST['p4study302']);
	$p4study303 = test_input($_POST['p4study303']);
	$p4leftCarrels = test_input($_POST['p4leftCarrels']);
	$p4study306 = test_input($_POST['p4study306']);
	$p4study312 = test_input($_POST['p4study312']);
	$p4rightCarrels = test_input($_POST['p4rightCarrels']);
	$p4study315 = test_input($_POST['p4study315']);
	$p4study316 = test_input($_POST['p4study316']);
	$p4study317 = test_input($_POST['p4study317']);
	$p4other3 = test_input($_POST['p4other3']);
	$p5centralSeating2 = test_input($_POST['p5centralSeating2']);
	$p5centralComputers2 = test_input($_POST['p5centralComputers2']);
	$p5ada204 = test_input($_POST['p5ada204']);
	$p5publicStations2 = test_input($_POST['p5publicStations2']);
	$p5leftSeating2 = test_input($_POST['p5leftSeating2']);
	$p5study207 = test_input($_POST['p5study207']);
	$p5study212 = test_input($_POST['p5study212']);
	$p5rightSeating2 = test_input($_POST['p5rightSeating2']);
	$p5isLab = test_input($_POST['p5isLab']);
	$p5greatHall = test_input($_POST['p5greatHall']);
	$p5other2 = test_input($_POST['p5other2']);
	$p5studyLoft = test_input($_POST['p5studyLoft']);
	$p5centralSeating3 = test_input($_POST['p5centralSeating3']);
	$p5study302 = test_input($_POST['p5study302']);
	$p5study303 = test_input($_POST['p5study303']);
	$p5leftCarrels = test_input($_POST['p5leftCarrels']);
	$p5study306 = test_input($_POST['p5study306']);
	$p5study312 = test_input($_POST['p5study312']);
	$p5rightCarrels = test_input($_POST['p5rightCarrels']);
	$p5study315 = test_input($_POST['p5study315']);
	$p5study316 = test_input($_POST['p5study316']);
	$p5study317 = test_input($_POST['p5study317']);
	$p5other3 = test_input($_POST['p5other3']);
	$p6centralSeating2 = test_input($_POST['p6centralSeating2']);
	$p6centralComputers2 = test_input($_POST['p6centralComputers2']);
	$p6ada204 = test_input($_POST['p6ada204']);
	$p6publicStations2 = test_input($_POST['p6publicStations2']);
	$p6leftSeating2 = test_input($_POST['p6leftSeating2']);
	$p6study207 = test_input($_POST['p6study207']);
	$p6study212 = test_input($_POST['p6study212']);
	$p6rightSeating2 = test_input($_POST['p6rightSeating2']);
	$p6isLab = test_input($_POST['p6isLab']);
	$p6greatHall = test_input($_POST['p6greatHall']);
	$p6other2 = test_input($_POST['p6other2']);
	$p6studyLoft = test_input($_POST['p6studyLoft']);
	$p6centralSeating3 = test_input($_POST['p6centralSeating3']);
	$p6study302 = test_input($_POST['p6study302']);
	$p6study303 = test_input($_POST['p6study303']);
	$p6leftCarrels = test_input($_POST['p6leftCarrels']);
	$p6study306 = test_input($_POST['p6study306']);
	$p6study312 = test_input($_POST['p6study312']);
	$p6rightCarrels = test_input($_POST['p6rightCarrels']);
	$p6study315 = test_input($_POST['p6study315']);
	$p6study316 = test_input($_POST['p6study316']);
	$p6study317 = test_input($_POST['p6study317']);
	$p6other3 = test_input($_POST['p6other3']);
	$p7centralSeating2 = test_input($_POST['p7centralSeating2']);
	$p7centralComputers2 = test_input($_POST['p7centralComputers2']);
	$p7ada204 = test_input($_POST['p7ada204']);
	$p7publicStations2 = test_input($_POST['p7publicStations2']);
	$p7leftSeating2 = test_input($_POST['p7leftSeating2']);
	$p7study207 = test_input($_POST['p7study207']);
	$p7study212 = test_input($_POST['p7study212']);
	$p7rightSeating2 = test_input($_POST['p7rightSeating2']);
	$p7isLab = test_input($_POST['p7isLab']);
	$p7greatHall = test_input($_POST['p7greatHall']);
	$p7other2 = test_input($_POST['p7other2']);
	$p7studyLoft = test_input($_POST['p7studyLoft']);
	$p7centralSeating3 = test_input($_POST['p7centralSeating3']);
	$p7study302 = test_input($_POST['p7study302']);
	$p7study303 = test_input($_POST['p7study303']);
	$p7leftCarrels = test_input($_POST['p7leftCarrels']);
	$p7study306 = test_input($_POST['p7study306']);
	$p7study312 = test_input($_POST['p7study312']);
	$p7rightCarrels = test_input($_POST['p7rightCarrels']);
	$p7study315 = test_input($_POST['p7study315']);
	$p7study316 = test_input($_POST['p7study316']);
	$p7study317 = test_input($_POST['p7study317']);
	$p7other3 = test_input($_POST['p7other3']);
	$p8centralSeating2 = test_input($_POST['p8centralSeating2']);
	$p8centralComputers2 = test_input($_POST['p8centralComputers2']);
	$p8ada204 = test_input($_POST['p8ada204']);
	$p8publicStations2 = test_input($_POST['p8publicStations2']);
	$p8leftSeating2 = test_input($_POST['p8leftSeating2']);
	$p8study207 = test_input($_POST['p8study207']);
	$p8study212 = test_input($_POST['p8study212']);
	$p8rightSeating2 = test_input($_POST['p8rightSeating2']);
	$p8isLab = test_input($_POST['p8isLab']);
	$p8greatHall = test_input($_POST['p8greatHall']);
	$p8other2 = test_input($_POST['p8other2']);
	$p8studyLoft = test_input($_POST['p8studyLoft']);
	$p8centralSeating3 = test_input($_POST['p8centralSeating3']);
	$p8study302 = test_input($_POST['p8study302']);
	$p8study303 = test_input($_POST['p8study303']);
	$p8leftCarrels = test_input($_POST['p8leftCarrels']);
	$p8study306 = test_input($_POST['p8study306']);
	$p8study312 = test_input($_POST['p8study312']);
	$p8rightCarrels = test_input($_POST['p8rightCarrels']);
	$p8study315 = test_input($_POST['p8study315']);
	$p8study316 = test_input($_POST['p8study316']);
	$p8study317 = test_input($_POST['p8study317']);
	$p8other3 = test_input($_POST['p8other3']);
	$p9centralSeating2 = test_input($_POST['p9centralSeating2']);
	$p9centralComputers2 = test_input($_POST['p9centralComputers2']);
	$p9ada204 = test_input($_POST['p9ada204']);
	$p9publicStations2 = test_input($_POST['p9publicStations2']);
	$p9leftSeating2 = test_input($_POST['p9leftSeating2']);
	$p9study207 = test_input($_POST['p9study207']);
	$p9study212 = test_input($_POST['p9study212']);
	$p9rightSeating2 = test_input($_POST['p9rightSeating2']);
	$p9isLab = test_input($_POST['p9isLab']);
	$p9greatHall = test_input($_POST['p9greatHall']);
	$p9other2 = test_input($_POST['p9other2']);
	$p9studyLoft = test_input($_POST['p9studyLoft']);
	$p9centralSeating3 = test_input($_POST['p9centralSeating3']);
	$p9study302 = test_input($_POST['p9study302']);
	$p9study303 = test_input($_POST['p9study303']);
	$p9leftCarrels = test_input($_POST['p9leftCarrels']);
	$p9study306 = test_input($_POST['p9study306']);
	$p9study312 = test_input($_POST['p9study312']);
	$p9rightCarrels = test_input($_POST['p9rightCarrels']);
	$p9study315 = test_input($_POST['p9study315']);
	$p9study316 = test_input($_POST['p9study316']);
	$p9study317 = test_input($_POST['p9study317']);
	$p9other3 = test_input($_POST['p9other3']);
	$p10centralSeating2 = test_input($_POST['p10centralSeating2']);
	$p10centralComputers2 = test_input($_POST['p10centralComputers2']);
	$p10ada204 = test_input($_POST['p10ada204']);
	$p10publicStations2 = test_input($_POST['p10publicStations2']);
	$p10leftSeating2 = test_input($_POST['p10leftSeating2']);
	$p10study207 = test_input($_POST['p10study207']);
	$p10study212 = test_input($_POST['p10study212']);
	$p10rightSeating2 = test_input($_POST['p10rightSeating2']);
	$p10isLab = test_input($_POST['p10isLab']);
	$p10greatHall = test_input($_POST['p10greatHall']);
	$p10other2 = test_input($_POST['p10other2']);
	$p10studyLoft = test_input($_POST['p10studyLoft']);
	$p10centralSeating3 = test_input($_POST['p10centralSeating3']);
	$p10study302 = test_input($_POST['p10study302']);
	$p10study303 = test_input($_POST['p10study303']);
	$p10leftCarrels = test_input($_POST['p10leftCarrels']);
	$p10study306 = test_input($_POST['p10study306']);
	$p10study312 = test_input($_POST['p10study312']);
	$p10rightCarrels = test_input($_POST['p10rightCarrels']);
	$p10study315 = test_input($_POST['p10study315']);
	$p10study316 = test_input($_POST['p10study316']);
	$p10study317 = test_input($_POST['p10study317']);
	$p10other3 = test_input($_POST['p10other3']);
	$p11centralSeating2 = test_input($_POST['p11centralSeating2']);
	$p11centralComputers2 = test_input($_POST['p11centralComputers2']);
	$p11ada204 = test_input($_POST['p11ada204']);
	$p11publicStations2 = test_input($_POST['p11publicStations2']);
	$p11leftSeating2 = test_input($_POST['p11leftSeating2']);
	$p11study207 = test_input($_POST['p11study207']);
	$p11study212 = test_input($_POST['p11study212']);
	$p11rightSeating2 = test_input($_POST['p11rightSeating2']);
	$p11isLab = test_input($_POST['p11isLab']);
	$p11greatHall = test_input($_POST['p11greatHall']);
	$p11other2 = test_input($_POST['p11other2']);
	$p11studyLoft = test_input($_POST['p11studyLoft']);
	$p11centralSeating3 = test_input($_POST['p11centralSeating3']);
	$p11study302 = test_input($_POST['p11study302']);
	$p11study303 = test_input($_POST['p11study303']);
	$p11leftCarrels = test_input($_POST['p11leftCarrels']);
	$p11study306 = test_input($_POST['p11study306']);
	$p11study312 = test_input($_POST['p11study312']);
	$p11rightCarrels = test_input($_POST['p11rightCarrels']);
	$p11study315 = test_input($_POST['p11study315']);
	$p11study316 = test_input($_POST['p11study316']);
	$p11study317 = test_input($_POST['p11study317']);
	$p11other3 = test_input($_POST['p11other3']);
	$correction = $_POST['correction'];
		
		//get AY info
	$ay = '';
	$thisyear = substr($date,2,2);
	$nextyear = intval($thisyear)+1;
	$nextyear = strval($nextyear);
	$lastyear = intval($thisyear)-1;
	$lastyear = strval($lastyear);
	$getmonth = substr($date,5,2);
	$getmonth = intval($getmonth);

	if ($getmonth >= 06){
			$ay = "AY" . $thisyear . $nextyear; 
		} else {
			$ay = "AY" . $lastyear . $thisyear;
	}

		//check database 
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";


		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}

if ($correction == 'correction'){
	
	$sql = "UPDATE counts SET

`centralSeating2` = CASE
WHEN `hour`='8:00am' THEN '$a8centralSeating2'
WHEN `hour`='9:00am' THEN '$a9centralSeating2'
WHEN `hour`='10:00am' THEN '$a10centralSeating2'
WHEN `hour`='11:00am' THEN '$a11centralSeating2'
WHEN `hour`='12:00pm' THEN '$p12centralSeating2'
WHEN `hour`='1:00pm' THEN '$p1centralSeating2'
WHEN `hour`='2:00pm' THEN '$p2centralSeating2'
WHEN `hour`='3:00pm' THEN '$p3centralSeating2'
WHEN `hour`='4:00pm' THEN '$p4centralSeating2'
WHEN `hour`='5:00pm' THEN '$p5centralSeating2'
WHEN `hour`='6:00pm' THEN '$p6centralSeating2'
WHEN `hour`='7:00pm' THEN '$p7centralSeating2'
WHEN `hour`='8:00pm' THEN '$p8centralSeating2'
WHEN `hour`='9:00pm' THEN '$p9centralSeating2'
WHEN `hour`='10:00pm' THEN '$p10centralSeating2'
WHEN `hour`='11:00pm' THEN '$p11centralSeating2'
ELSE `centralSeating2` END,

`centralComputers2` = CASE
WHEN `hour`='8:00am' THEN '$a8centralComputers2'
WHEN `hour`='9:00am' THEN '$a9centralComputers2'
WHEN `hour`='10:00am' THEN '$a10centralComputers2'
WHEN `hour`='11:00am' THEN '$a11centralComputers2'
WHEN `hour`='12:00pm' THEN '$p12centralComputers2'
WHEN `hour`='1:00pm' THEN '$p1centralComputers2'
WHEN `hour`='2:00pm' THEN '$p2centralComputers2'
WHEN `hour`='3:00pm' THEN '$p3centralComputers2'
WHEN `hour`='4:00pm' THEN '$p4centralComputers2'
WHEN `hour`='5:00pm' THEN '$p5centralComputers2'
WHEN `hour`='6:00pm' THEN '$p6centralComputers2'
WHEN `hour`='7:00pm' THEN '$p7centralComputers2'
WHEN `hour`='8:00pm' THEN '$p8centralComputers2'
WHEN `hour`='9:00pm' THEN '$p9centralComputers2'
WHEN `hour`='10:00pm' THEN '$p10centralComputers2'
WHEN `hour`='11:00pm' THEN '$p11centralComputers2'
ELSE `centralComputers2` END,

`ada204` = CASE
WHEN `hour`='8:00am' THEN '$a8ada204'
WHEN `hour`='9:00am' THEN '$a9ada204'
WHEN `hour`='10:00am' THEN '$a10ada204'
WHEN `hour`='11:00am' THEN '$a11ada204'
WHEN `hour`='12:00pm' THEN '$p12ada204'
WHEN `hour`='1:00pm' THEN '$p1ada204'
WHEN `hour`='2:00pm' THEN '$p2ada204'
WHEN `hour`='3:00pm' THEN '$p3ada204'
WHEN `hour`='4:00pm' THEN '$p4ada204'
WHEN `hour`='5:00pm' THEN '$p5ada204'
WHEN `hour`='6:00pm' THEN '$p6ada204'
WHEN `hour`='7:00pm' THEN '$p7ada204'
WHEN `hour`='8:00pm' THEN '$p8ada204'
WHEN `hour`='9:00pm' THEN '$p9ada204'
WHEN `hour`='10:00pm' THEN '$p10ada204'
WHEN `hour`='11:00pm' THEN '$p11ada204'
ELSE `ada204` END,

`publicStations2` = CASE
WHEN `hour`='8:00am' THEN '$a8publicStations2'
WHEN `hour`='9:00am' THEN '$a9publicStations2'
WHEN `hour`='10:00am' THEN '$a10publicStations2'
WHEN `hour`='11:00am' THEN '$a11publicStations2'
WHEN `hour`='12:00pm' THEN '$p12publicStations2'
WHEN `hour`='1:00pm' THEN '$p1publicStations2'
WHEN `hour`='2:00pm' THEN '$p2publicStations2'
WHEN `hour`='3:00pm' THEN '$p3publicStations2'
WHEN `hour`='4:00pm' THEN '$p4publicStations2'
WHEN `hour`='5:00pm' THEN '$p5publicStations2'
WHEN `hour`='6:00pm' THEN '$p6publicStations2'
WHEN `hour`='7:00pm' THEN '$p7publicStations2'
WHEN `hour`='8:00pm' THEN '$p8publicStations2'
WHEN `hour`='9:00pm' THEN '$p9publicStations2'
WHEN `hour`='10:00pm' THEN '$p10publicStations2'
WHEN `hour`='11:00pm' THEN '$p11publicStations2'
ELSE `publicStations2` END,

`leftSeating2` = CASE
WHEN `hour`='8:00am' THEN '$a8leftSeating2'
WHEN `hour`='9:00am' THEN '$a9leftSeating2'
WHEN `hour`='10:00am' THEN '$a10leftSeating2'
WHEN `hour`='11:00am' THEN '$a11leftSeating2'
WHEN `hour`='12:00pm' THEN '$p12leftSeating2'
WHEN `hour`='1:00pm' THEN '$p1leftSeating2'
WHEN `hour`='2:00pm' THEN '$p2leftSeating2'
WHEN `hour`='3:00pm' THEN '$p3leftSeating2'
WHEN `hour`='4:00pm' THEN '$p4leftSeating2'
WHEN `hour`='5:00pm' THEN '$p5leftSeating2'
WHEN `hour`='6:00pm' THEN '$p6leftSeating2'
WHEN `hour`='7:00pm' THEN '$p7leftSeating2'
WHEN `hour`='8:00pm' THEN '$p8leftSeating2'
WHEN `hour`='9:00pm' THEN '$p9leftSeating2'
WHEN `hour`='10:00pm' THEN '$p10leftSeating2'
WHEN `hour`='11:00pm' THEN '$p11leftSeating2'
ELSE `leftSeating2` END,

`study207` = CASE
WHEN `hour`='8:00am' THEN '$a8study207'
WHEN `hour`='9:00am' THEN '$a9study207'
WHEN `hour`='10:00am' THEN '$a10study207'
WHEN `hour`='11:00am' THEN '$a11study207'
WHEN `hour`='12:00pm' THEN '$p12study207'
WHEN `hour`='1:00pm' THEN '$p1study207'
WHEN `hour`='2:00pm' THEN '$p2study207'
WHEN `hour`='3:00pm' THEN '$p3study207'
WHEN `hour`='4:00pm' THEN '$p4study207'
WHEN `hour`='5:00pm' THEN '$p5study207'
WHEN `hour`='6:00pm' THEN '$p6study207'
WHEN `hour`='7:00pm' THEN '$p7study207'
WHEN `hour`='8:00pm' THEN '$p8study207'
WHEN `hour`='9:00pm' THEN '$p9study207'
WHEN `hour`='10:00pm' THEN '$p10study207'
WHEN `hour`='11:00pm' THEN '$p11study207'
ELSE `study207` END,

`study212` = CASE
WHEN `hour`='8:00am' THEN '$a8study212'
WHEN `hour`='9:00am' THEN '$a9study212'
WHEN `hour`='10:00am' THEN '$a10study212'
WHEN `hour`='11:00am' THEN '$a11study212'
WHEN `hour`='12:00pm' THEN '$p12study212'
WHEN `hour`='1:00pm' THEN '$p1study212'
WHEN `hour`='2:00pm' THEN '$p2study212'
WHEN `hour`='3:00pm' THEN '$p3study212'
WHEN `hour`='4:00pm' THEN '$p4study212'
WHEN `hour`='5:00pm' THEN '$p5study212'
WHEN `hour`='6:00pm' THEN '$p6study212'
WHEN `hour`='7:00pm' THEN '$p7study212'
WHEN `hour`='8:00pm' THEN '$p8study212'
WHEN `hour`='9:00pm' THEN '$p9study212'
WHEN `hour`='10:00pm' THEN '$p10study212'
WHEN `hour`='11:00pm' THEN '$p11study212'
ELSE `study212` END,

`rightSeating2` = CASE
WHEN `hour`='8:00am' THEN '$a8rightSeating2'
WHEN `hour`='9:00am' THEN '$a9rightSeating2'
WHEN `hour`='10:00am' THEN '$a10rightSeating2'
WHEN `hour`='11:00am' THEN '$a11rightSeating2'
WHEN `hour`='12:00pm' THEN '$p12rightSeating2'
WHEN `hour`='1:00pm' THEN '$p1rightSeating2'
WHEN `hour`='2:00pm' THEN '$p2rightSeating2'
WHEN `hour`='3:00pm' THEN '$p3rightSeating2'
WHEN `hour`='4:00pm' THEN '$p4rightSeating2'
WHEN `hour`='5:00pm' THEN '$p5rightSeating2'
WHEN `hour`='6:00pm' THEN '$p6rightSeating2'
WHEN `hour`='7:00pm' THEN '$p7rightSeating2'
WHEN `hour`='8:00pm' THEN '$p8rightSeating2'
WHEN `hour`='9:00pm' THEN '$p9rightSeating2'
WHEN `hour`='10:00pm' THEN '$p10rightSeating2'
WHEN `hour`='11:00pm' THEN '$p11rightSeating2'
ELSE `rightSeating2` END,

`isLab` = CASE
WHEN `hour`='8:00am' THEN '$a8isLab'
WHEN `hour`='9:00am' THEN '$a9isLab'
WHEN `hour`='10:00am' THEN '$a10isLab'
WHEN `hour`='11:00am' THEN '$a11isLab'
WHEN `hour`='12:00pm' THEN '$p12isLab'
WHEN `hour`='1:00pm' THEN '$p1isLab'
WHEN `hour`='2:00pm' THEN '$p2isLab'
WHEN `hour`='3:00pm' THEN '$p3isLab'
WHEN `hour`='4:00pm' THEN '$p4isLab'
WHEN `hour`='5:00pm' THEN '$p5isLab'
WHEN `hour`='6:00pm' THEN '$p6isLab'
WHEN `hour`='7:00pm' THEN '$p7isLab'
WHEN `hour`='8:00pm' THEN '$p8isLab'
WHEN `hour`='9:00pm' THEN '$p9isLab'
WHEN `hour`='10:00pm' THEN '$p10isLab'
WHEN `hour`='11:00pm' THEN '$p11isLab'
ELSE `isLab` END,

`greatHall` = CASE
WHEN `hour`='8:00am' THEN '$a8greatHall'
WHEN `hour`='9:00am' THEN '$a9greatHall'
WHEN `hour`='10:00am' THEN '$a10greatHall'
WHEN `hour`='11:00am' THEN '$a11greatHall'
WHEN `hour`='12:00pm' THEN '$p12greatHall'
WHEN `hour`='1:00pm' THEN '$p1greatHall'
WHEN `hour`='2:00pm' THEN '$p2greatHall'
WHEN `hour`='3:00pm' THEN '$p3greatHall'
WHEN `hour`='4:00pm' THEN '$p4greatHall'
WHEN `hour`='5:00pm' THEN '$p5greatHall'
WHEN `hour`='6:00pm' THEN '$p6greatHall'
WHEN `hour`='7:00pm' THEN '$p7greatHall'
WHEN `hour`='8:00pm' THEN '$p8greatHall'
WHEN `hour`='9:00pm' THEN '$p9greatHall'
WHEN `hour`='10:00pm' THEN '$p10greatHall'
WHEN `hour`='11:00pm' THEN '$p11greatHall'
ELSE `greatHall` END,

`other2` = CASE
WHEN `hour`='8:00am' THEN '$a8other2'
WHEN `hour`='9:00am' THEN '$a9other2'
WHEN `hour`='10:00am' THEN '$a10other2'
WHEN `hour`='11:00am' THEN '$a11other2'
WHEN `hour`='12:00pm' THEN '$p12other2'
WHEN `hour`='1:00pm' THEN '$p1other2'
WHEN `hour`='2:00pm' THEN '$p2other2'
WHEN `hour`='3:00pm' THEN '$p3other2'
WHEN `hour`='4:00pm' THEN '$p4other2'
WHEN `hour`='5:00pm' THEN '$p5other2'
WHEN `hour`='6:00pm' THEN '$p6other2'
WHEN `hour`='7:00pm' THEN '$p7other2'
WHEN `hour`='8:00pm' THEN '$p8other2'
WHEN `hour`='9:00pm' THEN '$p9other2'
WHEN `hour`='10:00pm' THEN '$p10other2'
WHEN `hour`='11:00pm' THEN '$p11other2'
ELSE `other2` END,

`studyLoft3` = CASE
WHEN `hour`='8:00am' THEN '$a8studyLoft'
WHEN `hour`='9:00am' THEN '$a9studyLoft'
WHEN `hour`='10:00am' THEN '$a10studyLoft'
WHEN `hour`='11:00am' THEN '$a11studyLoft'
WHEN `hour`='12:00pm' THEN '$p12studyLoft'
WHEN `hour`='1:00pm' THEN '$p1studyLoft'
WHEN `hour`='2:00pm' THEN '$p2studyLoft'
WHEN `hour`='3:00pm' THEN '$p3studyLoft'
WHEN `hour`='4:00pm' THEN '$p4studyLoft'
WHEN `hour`='5:00pm' THEN '$p5studyLoft'
WHEN `hour`='6:00pm' THEN '$p6studyLoft'
WHEN `hour`='7:00pm' THEN '$p7studyLoft'
WHEN `hour`='8:00pm' THEN '$p8studyLoft'
WHEN `hour`='9:00pm' THEN '$p9studyLoft'
WHEN `hour`='10:00pm' THEN '$p10studyLoft'
WHEN `hour`='11:00pm' THEN '$p11studyLoft'
ELSE `studyLoft3` END,

`centralSeating3` = CASE
WHEN `hour`='8:00am' THEN '$a8centralSeating3'
WHEN `hour`='9:00am' THEN '$a9centralSeating3'
WHEN `hour`='10:00am' THEN '$a10centralSeating3'
WHEN `hour`='11:00am' THEN '$a11centralSeating3'
WHEN `hour`='12:00pm' THEN '$p12centralSeating3'
WHEN `hour`='1:00pm' THEN '$p1centralSeating3'
WHEN `hour`='2:00pm' THEN '$p2centralSeating3'
WHEN `hour`='3:00pm' THEN '$p3centralSeating3'
WHEN `hour`='4:00pm' THEN '$p4centralSeating3'
WHEN `hour`='5:00pm' THEN '$p5centralSeating3'
WHEN `hour`='6:00pm' THEN '$p6centralSeating3'
WHEN `hour`='7:00pm' THEN '$p7centralSeating3'
WHEN `hour`='8:00pm' THEN '$p8centralSeating3'
WHEN `hour`='9:00pm' THEN '$p9centralSeating3'
WHEN `hour`='10:00pm' THEN '$p10centralSeating3'
WHEN `hour`='11:00pm' THEN '$p11centralSeating3'
ELSE `centralSeating3` END,

`study302` = CASE
WHEN `hour`='8:00am' THEN '$a8study302'
WHEN `hour`='9:00am' THEN '$a9study302'
WHEN `hour`='10:00am' THEN '$a10study302'
WHEN `hour`='11:00am' THEN '$a11study302'
WHEN `hour`='12:00pm' THEN '$p12study302'
WHEN `hour`='1:00pm' THEN '$p1study302'
WHEN `hour`='2:00pm' THEN '$p2study302'
WHEN `hour`='3:00pm' THEN '$p3study302'
WHEN `hour`='4:00pm' THEN '$p4study302'
WHEN `hour`='5:00pm' THEN '$p5study302'
WHEN `hour`='6:00pm' THEN '$p6study302'
WHEN `hour`='7:00pm' THEN '$p7study302'
WHEN `hour`='8:00pm' THEN '$p8study302'
WHEN `hour`='9:00pm' THEN '$p9study302'
WHEN `hour`='10:00pm' THEN '$p10study302'
WHEN `hour`='11:00pm' THEN '$p11study302'
ELSE `study302` END,

`study303` = CASE
WHEN `hour`='8:00am' THEN '$a8study303'
WHEN `hour`='9:00am' THEN '$a9study303'
WHEN `hour`='10:00am' THEN '$a10study303'
WHEN `hour`='11:00am' THEN '$a11study303'
WHEN `hour`='12:00pm' THEN '$p12study303'
WHEN `hour`='1:00pm' THEN '$p1study303'
WHEN `hour`='2:00pm' THEN '$p2study303'
WHEN `hour`='3:00pm' THEN '$p3study303'
WHEN `hour`='4:00pm' THEN '$p4study303'
WHEN `hour`='5:00pm' THEN '$p5study303'
WHEN `hour`='6:00pm' THEN '$p6study303'
WHEN `hour`='7:00pm' THEN '$p7study303'
WHEN `hour`='8:00pm' THEN '$p8study303'
WHEN `hour`='9:00pm' THEN '$p9study303'
WHEN `hour`='10:00pm' THEN '$p10study303'
WHEN `hour`='11:00pm' THEN '$p11study303'
ELSE `study303` END,

`leftCarrels3` = CASE
WHEN `hour`='8:00am' THEN '$a8leftCarrels'
WHEN `hour`='9:00am' THEN '$a9leftCarrels'
WHEN `hour`='10:00am' THEN '$a10leftCarrels'
WHEN `hour`='11:00am' THEN '$a11leftCarrels'
WHEN `hour`='12:00pm' THEN '$p12leftCarrels'
WHEN `hour`='1:00pm' THEN '$p1leftCarrels'
WHEN `hour`='2:00pm' THEN '$p2leftCarrels'
WHEN `hour`='3:00pm' THEN '$p3leftCarrels'
WHEN `hour`='4:00pm' THEN '$p4leftCarrels'
WHEN `hour`='5:00pm' THEN '$p5leftCarrels'
WHEN `hour`='6:00pm' THEN '$p6leftCarrels'
WHEN `hour`='7:00pm' THEN '$p7leftCarrels'
WHEN `hour`='8:00pm' THEN '$p8leftCarrels'
WHEN `hour`='9:00pm' THEN '$p9leftCarrels'
WHEN `hour`='10:00pm' THEN '$p10leftCarrels'
WHEN `hour`='11:00pm' THEN '$p11leftCarrels'
ELSE `leftCarrels3` END,

`study306` = CASE
WHEN `hour`='8:00am' THEN '$a8study306'
WHEN `hour`='9:00am' THEN '$a9study306'
WHEN `hour`='10:00am' THEN '$a10study306'
WHEN `hour`='11:00am' THEN '$a11study306'
WHEN `hour`='12:00pm' THEN '$p12study306'
WHEN `hour`='1:00pm' THEN '$p1study306'
WHEN `hour`='2:00pm' THEN '$p2study306'
WHEN `hour`='3:00pm' THEN '$p3study306'
WHEN `hour`='4:00pm' THEN '$p4study306'
WHEN `hour`='5:00pm' THEN '$p5study306'
WHEN `hour`='6:00pm' THEN '$p6study306'
WHEN `hour`='7:00pm' THEN '$p7study306'
WHEN `hour`='8:00pm' THEN '$p8study306'
WHEN `hour`='9:00pm' THEN '$p9study306'
WHEN `hour`='10:00pm' THEN '$p10study306'
WHEN `hour`='11:00pm' THEN '$p11study306'
ELSE `study306` END,

`study312` = CASE
WHEN `hour`='8:00am' THEN '$a8study312'
WHEN `hour`='9:00am' THEN '$a9study312'
WHEN `hour`='10:00am' THEN '$a10study312'
WHEN `hour`='11:00am' THEN '$a11study312'
WHEN `hour`='12:00pm' THEN '$p12study312'
WHEN `hour`='1:00pm' THEN '$p1study312'
WHEN `hour`='2:00pm' THEN '$p2study312'
WHEN `hour`='3:00pm' THEN '$p3study312'
WHEN `hour`='4:00pm' THEN '$p4study312'
WHEN `hour`='5:00pm' THEN '$p5study312'
WHEN `hour`='6:00pm' THEN '$p6study312'
WHEN `hour`='7:00pm' THEN '$p7study312'
WHEN `hour`='8:00pm' THEN '$p8study312'
WHEN `hour`='9:00pm' THEN '$p9study312'
WHEN `hour`='10:00pm' THEN '$p10study312'
WHEN `hour`='11:00pm' THEN '$p11study312'
ELSE `study312` END,

`rightCarrels3` = CASE
WHEN `hour`='8:00am' THEN '$a8rightCarrels'
WHEN `hour`='9:00am' THEN '$a9rightCarrels'
WHEN `hour`='10:00am' THEN '$a10rightCarrels'
WHEN `hour`='11:00am' THEN '$a11rightCarrels'
WHEN `hour`='12:00pm' THEN '$p12rightCarrels'
WHEN `hour`='1:00pm' THEN '$p1rightCarrels'
WHEN `hour`='2:00pm' THEN '$p2rightCarrels'
WHEN `hour`='3:00pm' THEN '$p3rightCarrels'
WHEN `hour`='4:00pm' THEN '$p4rightCarrels'
WHEN `hour`='5:00pm' THEN '$p5rightCarrels'
WHEN `hour`='6:00pm' THEN '$p6rightCarrels'
WHEN `hour`='7:00pm' THEN '$p7rightCarrels'
WHEN `hour`='8:00pm' THEN '$p8rightCarrels'
WHEN `hour`='9:00pm' THEN '$p9rightCarrels'
WHEN `hour`='10:00pm' THEN '$p10rightCarrels'
WHEN `hour`='11:00pm' THEN '$p11rightCarrels'
ELSE `rightCarrels3` END,

`study315` = CASE
WHEN `hour`='8:00am' THEN '$a8study315'
WHEN `hour`='9:00am' THEN '$a9study315'
WHEN `hour`='10:00am' THEN '$a10study315'
WHEN `hour`='11:00am' THEN '$a11study315'
WHEN `hour`='12:00pm' THEN '$p12study315'
WHEN `hour`='1:00pm' THEN '$p1study315'
WHEN `hour`='2:00pm' THEN '$p2study315'
WHEN `hour`='3:00pm' THEN '$p3study315'
WHEN `hour`='4:00pm' THEN '$p4study315'
WHEN `hour`='5:00pm' THEN '$p5study315'
WHEN `hour`='6:00pm' THEN '$p6study315'
WHEN `hour`='7:00pm' THEN '$p7study315'
WHEN `hour`='8:00pm' THEN '$p8study315'
WHEN `hour`='9:00pm' THEN '$p9study315'
WHEN `hour`='10:00pm' THEN '$p10study315'
WHEN `hour`='11:00pm' THEN '$p11study315'
ELSE `study315` END,

`study316` = CASE
WHEN `hour`='8:00am' THEN '$a8study316'
WHEN `hour`='9:00am' THEN '$a9study316'
WHEN `hour`='10:00am' THEN '$a10study316'
WHEN `hour`='11:00am' THEN '$a11study316'
WHEN `hour`='12:00pm' THEN '$p12study316'
WHEN `hour`='1:00pm' THEN '$p1study316'
WHEN `hour`='2:00pm' THEN '$p2study316'
WHEN `hour`='3:00pm' THEN '$p3study316'
WHEN `hour`='4:00pm' THEN '$p4study316'
WHEN `hour`='5:00pm' THEN '$p5study316'
WHEN `hour`='6:00pm' THEN '$p6study316'
WHEN `hour`='7:00pm' THEN '$p7study316'
WHEN `hour`='8:00pm' THEN '$p8study316'
WHEN `hour`='9:00pm' THEN '$p9study316'
WHEN `hour`='10:00pm' THEN '$p10study316'
WHEN `hour`='11:00pm' THEN '$p11study316'
ELSE `study316` END,

`study317` = CASE
WHEN `hour`='8:00am' THEN '$a8study317'
WHEN `hour`='9:00am' THEN '$a9study317'
WHEN `hour`='10:00am' THEN '$a10study317'
WHEN `hour`='11:00am' THEN '$a11study317'
WHEN `hour`='12:00pm' THEN '$p12study317'
WHEN `hour`='1:00pm' THEN '$p1study317'
WHEN `hour`='2:00pm' THEN '$p2study317'
WHEN `hour`='3:00pm' THEN '$p3study317'
WHEN `hour`='4:00pm' THEN '$p4study317'
WHEN `hour`='5:00pm' THEN '$p5study317'
WHEN `hour`='6:00pm' THEN '$p6study317'
WHEN `hour`='7:00pm' THEN '$p7study317'
WHEN `hour`='8:00pm' THEN '$p8study317'
WHEN `hour`='9:00pm' THEN '$p9study317'
WHEN `hour`='10:00pm' THEN '$p10study317'
WHEN `hour`='11:00pm' THEN '$p11study317'
ELSE `study317` END,

`other3` = CASE
WHEN `hour`='8:00am' THEN '$a8other3'
WHEN `hour`='9:00am' THEN '$a9other3'
WHEN `hour`='10:00am' THEN '$a10other3'
WHEN `hour`='11:00am' THEN '$a11other3'
WHEN `hour`='12:00pm' THEN '$p12other3'
WHEN `hour`='1:00pm' THEN '$p1other3'
WHEN `hour`='2:00pm' THEN '$p2other3'
WHEN `hour`='3:00pm' THEN '$p3other3'
WHEN `hour`='4:00pm' THEN '$p4other3'
WHEN `hour`='5:00pm' THEN '$p5other3'
WHEN `hour`='6:00pm' THEN '$p6other3'
WHEN `hour`='7:00pm' THEN '$p7other3'
WHEN `hour`='8:00pm' THEN '$p8other3'
WHEN `hour`='9:00pm' THEN '$p9other3'
WHEN `hour`='10:00pm' THEN '$p10other3'
WHEN `hour`='11:00pm' THEN '$p11other3'
ELSE `other3` END

WHERE date = '$date';";
}

		
else if ($correction == 'not'){
			
		$submit_check = "SELECT * FROM counts WHERE date = '$date'";
			
		$check_result = mysqli_query($connect,$submit_check);

        if ( mysqli_num_rows ( $check_result ) >= 1 ) {
       		$dupe = "<h3><strong><span style='color:red'>You have already submitted counts for " . $date . ".</span><br>Do you want to <a href='http://ollulib.heliohost.org/bodycounts/correct.php'>Submit a Correction</a> instead?</strong><br><br>";
			$submit_header = "Error!";
			print "<h1 id='header_counts'>" . $submit_header . "</h1><br><br><br>";
			print $dupe;
			exit;
        
		} else {			
			
		$sql = "INSERT INTO counts
VALUES ('$date', '$ay', '$month', '$day', '8:00am', '$a8centralSeating2', '$a8centralComputers2', '$a8ada204', '$a8publicStations2', '$a8leftSeating2', '$a8study207', '$a8study212', '$a8rightSeating2', '$a8isLab', '$a8greatHall', '$a8other2', '$a8studyLoft', '$a8centralSeating3', '$a8study302', '$a8study303', '$a8leftCarrels', '$a8study306', '$a8study312', '$a8rightCarrels', '$a8study315', '$a8study316', '$a8study317', '$a8other3'),
('$date', '$ay', '$month', '$day', '9:00am', '$a9centralSeating2', '$a9centralComputers2', '$a9ada204', '$a9publicStations2', '$a9leftSeating2', '$a9study207', '$a9study212', '$a9rightSeating2', '$a9isLab', '$a9greatHall', '$a9other2', '$a9studyLoft', '$a9centralSeating3', '$a9study302', '$a9study303', '$a9leftCarrels', '$a9study306', '$a9study312', '$a9rightCarrels', '$a9study315', '$a9study316', '$a9study317', '$a9other3'),
('$date', '$ay', '$month', '$day', '10:00am', '$a10centralSeating2', '$a10centralComputers2', '$a10ada204', '$a10publicStations2', '$a10leftSeating2', '$a10study207', '$a10study212', '$a10rightSeating2', '$a10isLab', '$a10greatHall', '$a10other2', '$a10studyLoft', '$a10centralSeating3', '$a10study302', '$a10study303', '$a10leftCarrels', '$a10study306', '$a10study312', '$a10rightCarrels', '$a10study315', '$a10study316', '$a10study317', '$a10other3'),
('$date', '$ay', '$month', '$day', '11:00am', '$a11centralSeating2', '$a11centralComputers2', '$a11ada204', '$a11publicStations2', '$a11leftSeating2', '$a11study207', '$a11study212', '$a11rightSeating2', '$a11isLab', '$a11greatHall', '$a11other2', '$a11studyLoft', '$a11centralSeating3', '$a11study302', '$a11study303', '$a11leftCarrels', '$a11study306', '$a11study312', '$a11rightCarrels', '$a11study315', '$a11study316', '$a11study317', '$a11other3'),
('$date', '$ay', '$month', '$day', '12:00pm', '$p12centralSeating2', '$p12centralComputers2', '$p12ada204', '$p12publicStations2', '$p12leftSeating2', '$p12study207', '$p12study212', '$p12rightSeating2', '$p12isLab', '$p12greatHall', '$p12other2', '$p12studyLoft', '$p12centralSeating3', '$p12study302', '$p12study303', '$p12leftCarrels', '$p12study306', '$p12study312', '$p12rightCarrels', '$p12study315', '$p12study316', '$p12study317', '$p12other3'),
('$date', '$ay', '$month', '$day', '1:00pm', '$p1centralSeating2', '$p1centralComputers2', '$p1ada204', '$p1publicStations2', '$p1leftSeating2', '$p1study207', '$p1study212', '$p1rightSeating2', '$p1isLab', '$p1greatHall', '$p1other2', '$p1studyLoft', '$p1centralSeating3', '$p1study302', '$p1study303', '$p1leftCarrels', '$p1study306', '$p1study312', '$p1rightCarrels', '$p1study315', '$p1study316', '$p1study317', '$p1other3'),
('$date', '$ay', '$month', '$day', '2:00pm', '$p2centralSeating2', '$p2centralComputers2', '$p2ada204', '$p2publicStations2', '$p2leftSeating2', '$p2study207', '$p2study212', '$p2rightSeating2', '$p2isLab', '$p2greatHall', '$p2other2', '$p2studyLoft', '$p2centralSeating3', '$p2study302', '$p2study303', '$p2leftCarrels', '$p2study306', '$p2study312', '$p2rightCarrels', '$p2study315', '$p2study316', '$p2study317', '$p2other3'),
('$date', '$ay', '$month', '$day', '3:00pm', '$p3centralSeating2', '$p3centralComputers2', '$p3ada204', '$p3publicStations2', '$p3leftSeating2', '$p3study207', '$p3study212', '$p3rightSeating2', '$p3isLab', '$p3greatHall', '$p3other2', '$p3studyLoft', '$p3centralSeating3', '$p3study302', '$p3study303', '$p3leftCarrels', '$p3study306', '$p3study312', '$p3rightCarrels', '$p3study315', '$p3study316', '$p3study317', '$p3other3'),
('$date', '$ay', '$month', '$day', '4:00pm', '$p4centralSeating2', '$p4centralComputers2', '$p4ada204', '$p4publicStations2', '$p4leftSeating2', '$p4study207', '$p4study212', '$p4rightSeating2', '$p4isLab', '$p4greatHall', '$p4other2', '$p4studyLoft', '$p4centralSeating3', '$p4study302', '$p4study303', '$p4leftCarrels', '$p4study306', '$p4study312', '$p4rightCarrels', '$p4study315', '$p4study316', '$p4study317', '$p4other3'),
('$date', '$ay', '$month', '$day', '5:00pm', '$p5centralSeating2', '$p5centralComputers2', '$p5ada204', '$p5publicStations2', '$p5leftSeating2', '$p5study207', '$p5study212', '$p5rightSeating2', '$p5isLab', '$p5greatHall', '$p5other2', '$p5studyLoft', '$p5centralSeating3', '$p5study302', '$p5study303', '$p5leftCarrels', '$p5study306', '$p5study312', '$p5rightCarrels', '$p5study315', '$p5study316', '$p5study317', '$p5other3'),
('$date', '$ay', '$month', '$day', '6:00pm', '$p6centralSeating2', '$p6centralComputers2', '$p6ada204', '$p6publicStations2', '$p6leftSeating2', '$p6study207', '$p6study212', '$p6rightSeating2', '$p6isLab', '$p6greatHall', '$p6other2', '$p6studyLoft', '$p6centralSeating3', '$p6study302', '$p6study303', '$p6leftCarrels', '$p6study306', '$p6study312', '$p6rightCarrels', '$p6study315', '$p6study316', '$p6study317', '$p6other3'),
('$date', '$ay', '$month', '$day', '7:00pm', '$p7centralSeating2', '$p7centralComputers2', '$p7ada204', '$p7publicStations2', '$p7leftSeating2', '$p7study207', '$p7study212', '$p7rightSeating2', '$p7isLab', '$p7greatHall', '$p7other2', '$p7studyLoft', '$p7centralSeating3', '$p7study302', '$p7study303', '$p7leftCarrels', '$p7study306', '$p7study312', '$p7rightCarrels', '$p7study315', '$p7study316', '$p7study317', '$p7other3'),
('$date', '$ay', '$month', '$day', '8:00pm', '$p8centralSeating2', '$p8centralComputers2', '$p8ada204', '$p8publicStations2', '$p8leftSeating2', '$p8study207', '$p8study212', '$p8rightSeating2', '$p8isLab', '$p8greatHall', '$p8other2', '$p8studyLoft', '$p8centralSeating3', '$p8study302', '$p8study303', '$p8leftCarrels', '$p8study306', '$p8study312', '$p8rightCarrels', '$p8study315', '$p8study316', '$p8study317', '$p8other3'),
('$date', '$ay', '$month', '$day', '9:00pm', '$p9centralSeating2', '$p9centralComputers2', '$p9ada204', '$p9publicStations2', '$p9leftSeating2', '$p9study207', '$p9study212', '$p9rightSeating2', '$p9isLab', '$p9greatHall', '$p9other2', '$p9studyLoft', '$p9centralSeating3', '$p9study302', '$p9study303', '$p9leftCarrels', '$p9study306', '$p9study312', '$p9rightCarrels', '$p9study315', '$p9study316', '$p9study317', '$p9other3'),
('$date', '$ay', '$month', '$day', '10:00pm', '$p10centralSeating2', '$p10centralComputers2', '$p10ada204', '$p10publicStations2', '$p10leftSeating2', '$p10study207', '$p10study212', '$p10rightSeating2', '$p10isLab', '$p10greatHall', '$p10other2', '$p10studyLoft', '$p10centralSeating3', '$p10study302', '$p10study303', '$p10leftCarrels', '$p10study306', '$p10study312', '$p10rightCarrels', '$p10study315', '$p10study316', '$p10study317', '$p10other3'),
('$date', '$ay', '$month', '$day', '11:00pm', '$p11centralSeating2', '$p11centralComputers2', '$p11ada204', '$p11publicStations2', '$p11leftSeating2', '$p11study207', '$p11study212', '$p11rightSeating2', '$p11isLab', '$p11greatHall', '$p11other2', '$p11studyLoft', '$p11centralSeating3', '$p11study302', '$p11study303', '$p11leftCarrels', '$p11study306', '$p11study312', '$p11rightCarrels', '$p11study315', '$p11study316', '$p11study317', '$p11other3')";

		} 
}
		
			if ($connect->query($sql) === TRUE) {
				if ($correction == 'not'){
					$outcome = "<h3 style='color:red'><strong>Counts successfully submitted for " . $date . "</strong></h3><br><br>";
					$submit_header = "Submission Confirmation";
				} else if ($correction == 'correction') {
					$outcome = "<h3 style='color:red'><strong>Counts successfully updated for " . $date . "</strong></h3><br><br>";
					$submit_header = "Submission Confirmation";
				}	
			}
			else {
				$outcome = "Error: " . $sql . "<br>" . $connect->error;
			}

			$connect->close();

print "<h1 id='header_counts'>" . $submit_header . "</h1><br><br><br>";
print $outcome;
}
?>					   
	
<h4 class="subheader"><strong>Additional Options:</strong></h4><br>
<p><strong><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<a href="http://ollulib.heliohost.org/bodycounts/submit.php">Submit additional counts</a></strong></p><br>
<p><strong><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<a href="http://ollulib.heliohost.org/bodycounts/correct.php">Submit a correction</a></strong></p><br>
<p><strong><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;<a href="http://ollulib.heliohost.org/bodycounts/stats.php">View body count statistics</a></strong></p><br>



	</body></html>