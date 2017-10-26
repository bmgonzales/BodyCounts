<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Library Body Counts Statistics</title>

<script>
  $( function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  minDate: new Date(2012, 4, 02),
	  maxDate: +0,
      format: 'yyyy-mm-dd'
    });
  } );
</script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
<script type='text/javascript'>

 $(document).ready(function() { 
   $('input[name=optionDay]').change(function(){
        $('form').submit();
   });
  });

</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="table2excel.js"></script>

</head><body>

<h1>Body Count Statistics</h1>
<br><br><br>

<?php
//initalize variables
$option = '';
$date = '';
$submissions = '';
$range1a = '';
$range1b = '';
$range2a = '';
$range2b = '';
$total1 = '';
$total2 = '';
$hour1a = '';
$hour1b = '';
$hour2 = '';
$ay1 = '';
$ay2 = '';
$rangeyr = array();
$yrlist = '';
$optionDay = '';
$crossData = '';
$output = '';



		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//retrieve variables
		$option = $_POST['option'];
		
		
		if ($option == 'opt0') {
			$date = $_POST['date'];
			$date = date("Y-m-d", strtotime($date));

		//retrieve db results
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";


		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}
	
		$results = mysqli_query($connect,"SELECT hour, centralSeating2, centralComputers2, ada204, publicStations2, leftSeating2, study207, study212, rightSeating2, isLab, greatHall, other2, studyLoft3, centralSeating3, study302, study303, leftCarrels3, study306, study312, rightCarrels3, study315, study316, study317, other3 FROM counts WHERE date = '$date' ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm')");


		if  (mysqli_num_rows($results) > 0) {
			while($row = mysqli_fetch_assoc($results)) {
		$submissions .= "<tr><td>" . $row['hour'] . "</td><td>" . $row['centralSeating2'] . "</td><td>" . $row['centralComputers2'] . "</td><td>" . $row['ada204'] . "</td><td>" . $row['publicStations2'] . "</td><td>" . $row['leftSeating2'] . "</td><td>" . $row['study207'] . "</td><td>" . $row['study212'] . "</td><td>" . $row['rightSeating2'] . "</td><td>" . $row['isLab'] . "</td><td>" . $row['greatHall'] . "</td><td>" . $row['other2'] . "</td><td>" . $row['studyLoft3'] . "</td><td>" . $row['centralSeating3'] . "</td><td>" . $row['study302'] . "</td><td>" . $row['study303'] . "</td><td>" . $row['leftCarrels3'] . "</td><td>" . $row['study306'] . "</td><td>" . $row['study312'] . "</td><td>" . $row['rightCarrels3'] . "</td><td>" . $row['study315'] . "</td><td>" . $row['study316'] . "</td><td>" . $row['study317'] . "</td><td>" . $row['other3'] . "</td></tr>";
			}
		} 	
	
		$connect->close();
		
		}
		
		
		if ($option == 'opt1') {
			$range1a = $_POST['range1a'];
			$range1a = date("Y-m-d", strtotime($range1a));
			$range1b = $_POST['range1b'];
			$range1b = date("Y-m-d", strtotime($range1b));
			
		//retrieve db results
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";

		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}

			//total 1
			$totalbyrange1 = mysqli_query($connect,"SELECT SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 + rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 + study312 + rightCarrels3 + study315 + study316 + study317 + other3) AS total FROM counts WHERE date >= '$range1a' AND date <= '$range1b'");

			while ($row = $totalbyrange1->fetch_assoc()) {
			$total1 = $row['total'];
			$total1 = number_format($total1);
			}
			
			//total by hour 1
			$totalbyhour1 = mysqli_query($connect,"SELECT hour, SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3)
			AS total
			FROM counts WHERE date >= '$range1a' AND date <= '$range1b' GROUP BY hour ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm')");

			if  (mysqli_num_rows($totalbyhour1) > 0) {
				while($row = mysqli_fetch_assoc($totalbyhour1)) {
				$hour1a .= "<th>" . $row['hour'] . "</th>";
				$hour1b .= "<td style='text-align:center;'>" . $row['total'] . "</td>";
				}
			}
			
			//total by day 1
			$totalbyday1 = mysqli_query($connect,"SELECT  SUM(CASE WHEN day='Monday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as monday,
	SUM(CASE WHEN day='Tuesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as tuesday,
	SUM(CASE WHEN day='Wednesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as wednesday,
	SUM(CASE WHEN day='Thursday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as thursday,
	SUM(CASE WHEN day='Friday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as friday,
	SUM(CASE WHEN day='Saturday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as saturday,
	SUM(CASE WHEN day='Sunday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as sunday
	FROM counts WHERE date >= '$range1a' AND date <= '$range1b';");

			if  (mysqli_num_rows($totalbyday1) > 0) {
				while($row = mysqli_fetch_assoc($totalbyday1)) {
				$mon1 = $row['monday'];
				$tue1 = $row['tuesday'];
				$wed1 = $row['wednesday'];
				$thu1 = $row['thursday'];
				$fri1 = $row['friday'];
				$sat1 = $row['saturday'];
				$sun1 = $row['sunday'];
				}	
			} 
			
			//total by month 1
			$totalbymonth1 = mysqli_query($connect,"SELECT  SUM(CASE WHEN month='January' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as january,
	SUM(CASE WHEN month='February' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as february,
	SUM(CASE WHEN month='March' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as march,
	SUM(CASE WHEN month='April' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as april,
	SUM(CASE WHEN month='May' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as may,
	SUM(CASE WHEN month='June' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as june,
	SUM(CASE WHEN month='July' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as july,
	SUM(CASE WHEN month='August' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as august,
	SUM(CASE WHEN month='September' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as september,
	SUM(CASE WHEN month='October' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as october,
	SUM(CASE WHEN month='November' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as november,
	SUM(CASE WHEN month='December' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as december
	FROM counts WHERE date >= '$range1a' AND date <= '$range1b';");

			if  (mysqli_num_rows($totalbymonth1) > 0) {
				while($row = mysqli_fetch_assoc($totalbymonth1)) {
				$jan1 = $row['january'];
				$feb1 = $row['february'];
				$mar1 = $row['march'];
				$apr1 = $row['april'];
				$may1 = $row['may'];
				$jun1 = $row['june'];
				$jul1 = $row['july'];
				$aug1 = $row['august'];
				$sep1 = $row['september'];
				$oct1 = $row['october'];
				$nov1 = $row['november'];
				$dec1 = $row['december'];
				}	
			} 
			
			//total by Location 1
			$totalbylocation1 = mysqli_query($connect,"SELECT SUM(centralSeating2) as centralSeating2, SUM(centralComputers2) as centralComputers2, SUM(ada204) as ada204, SUM(publicStations2) as publicStations2, SUM(leftSeating2) as leftSeating2, SUM(study207) as study207, SUM(study212) as study212, SUM(rightSeating2) as rightSeating2, SUM(isLab) as isLab, SUM(greatHall) as greatHall, SUM(other2) as other2, SUM(studyLoft3) as studyLoft3, SUM(centralSeating3) as centralSeating3, SUM(study302) as study302, SUM(study303) as study303, SUM(leftCarrels3) as leftCarrels3, SUM(study306) as study306, SUM(study312) as study312, SUM(rightCarrels3) as rightCarrels3, SUM(study315) as study315, SUM(study316) as study316, SUM(study317) as study317, SUM(other3) as other3
			FROM counts WHERE date >= '$range1a' AND date <= '$range1b'");

			if  (mysqli_num_rows($totalbylocation1) > 0) {
				while($row = mysqli_fetch_assoc($totalbylocation1)) {
				$loca1 = $row['centralSeating2'];
				$locb1 = $row['centralComputers2'];
				$locc1 = $row['ada204'];
				$locd1 = $row['publicStations2'];
				$loce1 = $row['leftSeating2'];
				$locf1 = $row['study207'];
				$locg1 = $row['study212'];
				$loch1 = $row['rightSeating2'];
				$loci1 = $row['isLab'];
				$locj1 = $row['greatHall'];
				$lock1 = $row['other2'];
				$locl1 = $row['studyLoft3'];
				$locm1 = $row['centralSeating3'];
				$locn1 = $row['study302'];
				$loco1 = $row['study303'];
				$locp1 = $row['leftCarrels3'];
				$locq1 = $row['study306'];
				$locr1 = $row['study312'];
				$locs1 = $row['rightCarrels3'];
				$loct1 = $row['study315'];
				$locu1 = $row['study316'];
				$locv1 = $row['study317'];
				$locw1 = $row['other3'];
				}	
			} 	
			
		$connect->close();	
		
		} else if ($option == 'opt2') {
		$range1a = $_POST['range1a'];
		$range1a = date("Y-m-d", strtotime($range1a));
		$range1b = $_POST['range1b'];
		$range1b = date("Y-m-d", strtotime($range1b));
		$range2a = $_POST['range2a'];
		$range2a = date("Y-m-d", strtotime($range2a));
		$range2b = $_POST['range2b'];
		$range2b = date("Y-m-d", strtotime($range2b));
		
		//retrieve db results
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";

		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}
		
			//total 1
			$totalbyrange1 = mysqli_query($connect,"SELECT SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 + rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 + study312 + rightCarrels3 + study315 + study316 + study317 + other3) AS total FROM counts WHERE date >= '$range1a' AND date <= '$range1b'");

			while ($row = $totalbyrange1->fetch_assoc()) {
			$total1 = $row['total'];
			$total1 = number_format($total1);
			}
			
			//total 2
			$totalbyrange2 = mysqli_query($connect,"SELECT SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 + rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 + study312 + rightCarrels3 + study315 + study316 + study317 + other3) AS total FROM counts WHERE date >= '$range2a' AND date <= '$range2b'");

			while ($row = $totalbyrange2->fetch_assoc()) {
			$total2 = $row['total'];
			$total2 = number_format($total2);
			}
			
			//total by hour 1
			$totalbyhour1 = mysqli_query($connect,"SELECT hour, SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3)
			AS total
			FROM counts WHERE date >= '$range1a' AND date <= '$range1b' GROUP BY hour ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm')");

			if  (mysqli_num_rows($totalbyhour1) > 0) {
				while($row = mysqli_fetch_assoc($totalbyhour1)) {
				$hour1a .= "<th>" . $row['hour'] . "</th>";
				$hour1b .= "<td style='text-align:center;'>" . $row['total'] . "</td>";
				}
			}
			
			//total by hour 2
			$totalbyhour2 = mysqli_query($connect,"SELECT hour, SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3)
			AS total
			FROM counts WHERE date >= '$range2a' AND date <= '$range2b' GROUP BY hour ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm')");

			if  (mysqli_num_rows($totalbyhour2) > 0) {
				while($row = mysqli_fetch_assoc($totalbyhour2)) {
				$hour2 .= "<td style='text-align:center;'>" . $row['total'] . "</td>";
				}
			}
			
			//total by day 1
		$totalbyday1 = mysqli_query($connect,"SELECT  SUM(CASE WHEN day='Monday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as monday,
	SUM(CASE WHEN day='Tuesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as tuesday,
	SUM(CASE WHEN day='Wednesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as wednesday,
	SUM(CASE WHEN day='Thursday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as thursday,
	SUM(CASE WHEN day='Friday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as friday,
	SUM(CASE WHEN day='Saturday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as saturday,
	SUM(CASE WHEN day='Sunday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as sunday
	FROM counts WHERE date >= '$range1a' AND date <= '$range1b';");

			if  (mysqli_num_rows($totalbyday1) > 0) {
				while($row = mysqli_fetch_assoc($totalbyday1)) {
				$mon1 = $row['monday'];
				$tue1 = $row['tuesday'];
				$wed1 = $row['wednesday'];
				$thu1 = $row['thursday'];
				$fri1 = $row['friday'];
				$sat1 = $row['saturday'];
				$sun1 = $row['sunday'];
				}	
			} 
			
			//total by day 2
			$totalbyday2 = mysqli_query($connect,"SELECT  SUM(CASE WHEN day='Monday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as monday,
	SUM(CASE WHEN day='Tuesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as tuesday,
	SUM(CASE WHEN day='Wednesday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as wednesday,
	SUM(CASE WHEN day='Thursday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as thursday,
	SUM(CASE WHEN day='Friday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as friday,
	SUM(CASE WHEN day='Saturday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as saturday,
	SUM(CASE WHEN day='Sunday' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as sunday
	FROM counts WHERE date >= '$range2a' AND date <= '$range2b';");

			if  (mysqli_num_rows($totalbyday2) > 0) {
				while($row = mysqli_fetch_assoc($totalbyday2)) {
				$mon2 = $row['monday'];
				$tue2 = $row['tuesday'];
				$wed2 = $row['wednesday'];
				$thu2 = $row['thursday'];
				$fri2 = $row['friday'];
				$sat2 = $row['saturday'];
				$sun2 = $row['sunday'];
				}	
			} 
			
			
			//total by month 1
					$totalbymonth1 = mysqli_query($connect,"SELECT  SUM(CASE WHEN month='January' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as january,
	SUM(CASE WHEN month='February' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as february,
	SUM(CASE WHEN month='March' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as march,
	SUM(CASE WHEN month='April' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as april,
	SUM(CASE WHEN month='May' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as may,
	SUM(CASE WHEN month='June' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as june,
	SUM(CASE WHEN month='July' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as july,
	SUM(CASE WHEN month='August' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as august,
	SUM(CASE WHEN month='September' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as september,
	SUM(CASE WHEN month='October' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as october,
	SUM(CASE WHEN month='November' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as november,
	SUM(CASE WHEN month='December' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as december
	FROM counts WHERE date >= '$range1a' AND date <= '$range1b';");

			if  (mysqli_num_rows($totalbymonth1) > 0) {
				while($row = mysqli_fetch_assoc($totalbymonth1)) {
				$jan1 = $row['january'];
				$feb1 = $row['february'];
				$mar1 = $row['march'];
				$apr1 = $row['april'];
				$may1 = $row['may'];
				$jun1 = $row['june'];
				$jul1 = $row['july'];
				$aug1 = $row['august'];
				$sep1 = $row['september'];
				$oct1 = $row['october'];
				$nov1 = $row['november'];
				$dec1 = $row['december'];
				}	
			} 
			
			//total by month 2
			$totalbymonth2 = mysqli_query($connect,"SELECT  SUM(CASE WHEN month='January' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as january,
	SUM(CASE WHEN month='February' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as february,
	SUM(CASE WHEN month='March' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as march,
	SUM(CASE WHEN month='April' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as april,
	SUM(CASE WHEN month='May' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as may,
	SUM(CASE WHEN month='June' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as june,
	SUM(CASE WHEN month='July' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as july,
	SUM(CASE WHEN month='August' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as august,
	SUM(CASE WHEN month='September' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as september,
	SUM(CASE WHEN month='October' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as october,
	SUM(CASE WHEN month='November' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as november,
	SUM(CASE WHEN month='December' THEN (centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3) ELSE 0 END) as december
	FROM counts WHERE date >= '$range2a' AND date <= '$range2b';");

			if  (mysqli_num_rows($totalbymonth2) > 0) {
				while($row = mysqli_fetch_assoc($totalbymonth2)) {
				$jan2 = $row['january'];
				$feb2 = $row['february'];
				$mar2 = $row['march'];
				$apr2 = $row['april'];
				$may2 = $row['may'];
				$jun2 = $row['june'];
				$jul2 = $row['july'];
				$aug2 = $row['august'];
				$sep2 = $row['september'];
				$oct2 = $row['october'];
				$nov2 = $row['november'];
				$dec2 = $row['december'];
				}	
			} 	
			
			//total by Location 1
			$totalbylocation1 = mysqli_query($connect,"SELECT SUM(centralSeating2) as centralSeating2, SUM(centralComputers2) as centralComputers2, SUM(ada204) as ada204, SUM(publicStations2) as publicStations2, SUM(leftSeating2) as leftSeating2, SUM(study207) as study207, SUM(study212) as study212, SUM(rightSeating2) as rightSeating2, SUM(isLab) as isLab, SUM(greatHall) as greatHall, SUM(other2) as other2, SUM(studyLoft3) as studyLoft3, SUM(centralSeating3) as centralSeating3, SUM(study302) as study302, SUM(study303) as study303, SUM(leftCarrels3) as leftCarrels3, SUM(study306) as study306, SUM(study312) as study312, SUM(rightCarrels3) as rightCarrels3, SUM(study315) as study315, SUM(study316) as study316, SUM(study317) as study317, SUM(other3) as other3
			FROM counts WHERE date >= '$range1a' AND date <= '$range1b'");

			if  (mysqli_num_rows($totalbylocation1) > 0) {
				while($row = mysqli_fetch_assoc($totalbylocation1)) {
				$loca1 = $row['centralSeating2'];
				$locb1 = $row['centralComputers2'];
				$locc1 = $row['ada204'];
				$locd1 = $row['publicStations2'];
				$loce1 = $row['leftSeating2'];
				$locf1 = $row['study207'];
				$locg1 = $row['study212'];
				$loch1 = $row['rightSeating2'];
				$loci1 = $row['isLab'];
				$locj1 = $row['greatHall'];
				$lock1 = $row['other2'];
				$locl1 = $row['studyLoft3'];
				$locm1 = $row['centralSeating3'];
				$locn1 = $row['study302'];
				$loco1 = $row['study303'];
				$locp1 = $row['leftCarrels3'];
				$locq1 = $row['study306'];
				$locr1 = $row['study312'];
				$locs1 = $row['rightCarrels3'];
				$loct1 = $row['study315'];
				$locu1 = $row['study316'];
				$locv1 = $row['study317'];
				$locw1 = $row['other3'];
				}	
			} 	
			
			//total by location 2
			$totalbylocation2 = mysqli_query($connect,"SELECT SUM(centralSeating2) as centralSeating2, SUM(centralComputers2) as centralComputers2, SUM(ada204) as ada204, SUM(publicStations2) as publicStations2, SUM(leftSeating2) as leftSeating2, SUM(study207) as study207, SUM(study212) as study212, SUM(rightSeating2) as rightSeating2, SUM(isLab) as isLab, SUM(greatHall) as greatHall, SUM(other2) as other2, SUM(studyLoft3) as studyLoft3, SUM(centralSeating3) as centralSeating3, SUM(study302) as study302, SUM(study303) as study303, SUM(leftCarrels3) as leftCarrels3, SUM(study306) as study306, SUM(study312) as study312, SUM(rightCarrels3) as rightCarrels3, SUM(study315) as study315, SUM(study316) as study316, SUM(study317) as study317, SUM(other3) as other3
			FROM counts WHERE date >= '$range2a' AND date <= '$range2b'");

			if  (mysqli_num_rows($totalbylocation2) > 0) {
				while($row = mysqli_fetch_assoc($totalbylocation2)) {
				$loca2 = $row['centralSeating2'];
				$locb2 = $row['centralComputers2'];
				$locc2 = $row['ada204'];
				$locd2 = $row['publicStations2'];
				$loce2 = $row['leftSeating2'];
				$locf2 = $row['study207'];
				$locg2 = $row['study212'];
				$loch2 = $row['rightSeating2'];
				$loci2 = $row['isLab'];
				$locj2 = $row['greatHall'];
				$lock2 = $row['other2'];
				$locl2 = $row['studyLoft3'];
				$locm2 = $row['centralSeating3'];
				$locn2 = $row['study302'];
				$loco2 = $row['study303'];
				$locp2 = $row['leftCarrels3'];
				$locq2 = $row['study306'];
				$locr2 = $row['study312'];
				$locs2 = $row['rightCarrels3'];
				$loct2 = $row['study315'];
				$locu2 = $row['study316'];
				$locv2 = $row['study317'];
				$locw2 = $row['other3'];
				}	
			} 
		
		$connect->close();
		}
		
		
		
		if ($option == 'opt3'){
			$rangeyr = $_POST['rangeyr'];
			$yearct = count($rangeyr);

			for($x = 0; $x < $yearct; $x++) {
				$yrlist .= "'" . $rangeyr[$x] . "',";
				}

			$yrlist = rtrim($yrlist,",");
			$sql_yrs = "(" . $yrlist . ")";
			
		//retrieve db results
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";

		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}	
			
		//total by AY
		$totalbyay = mysqli_query($connect,"SELECT ay, SUM(centralSeating2 + centralComputers2 + ada204 + publicStations2 + leftSeating2 + study207 + study212 +  rightSeating2 + isLab + greatHall + other2 + studyLoft3 + centralSeating3 + study302 + study303 + leftCarrels3 + study306 +  study312 + rightCarrels3 + study315 + study316 + study317 + other3)
		AS total FROM counts WHERE ay in $sql_yrs GROUP BY ay");

		if  (mysqli_num_rows($totalbyay) > 0) {
			while($row = mysqli_fetch_assoc($totalbyay)) {
				$ay1 .= "<th>" . $row['ay'] . "</th>";
				$ay2 .= "<td>" . $row['total'] . "</td>";		
			}
		} 
		
		$connect->close();
		}
		
		if ($option == 'opt4'){
		
			$range1a = $_POST['range1a'];
			$range1a = date("Y-m-d", strtotime($range1a));
			$range1b = $_POST['range1b'];
			$range1b = date("Y-m-d", strtotime($range1b));
			$optionDay = $_POST['optionDay'];
		
		//retrieve db results
				$servername = "server_name";
                $username = "user_name";
                $password = "server_pw";
                $dbname = "db_name";

		$connect = new mysqli($servername, $username, $password, $dbname);
			if ($connect->connect_error) {
				die("Connection Failed: " . $connect->connect_error);
			}	
			
			if ($optionDay == 'All'){
				$optionDay = 'All Day';
			//crossdata - All
			$results = mysqli_query($connect,"SELECT * FROM
	(SELECT IFNULL(hour, 'Total') AS hour, 
  SUM(centralSeating2) AS centralSeating2, 
  SUM(centralComputers2) AS centralComputers2, 
  SUM(ada204) AS ada204, 
  SUM(publicStations2) AS publicStations2, 
  SUM(leftSeating2) AS leftSeating2, 
  SUM(study207) AS study207, 
  SUM(study212) AS study212, 
  SUM(rightSeating2) AS rightSeating2, 
  SUM(isLab) AS isLab, 
  SUM(greatHall) AS greatHall, 
  SUM(other2) AS other2, 
  SUM(studyLoft3) AS studyLoft3, 
  SUM(centralSeating3) AS centralSeating3, 
  SUM(study302) AS study302, 
  SUM(study303) AS study303, 
  SUM(leftCarrels3) AS leftCarrels3,
  SUM(study306) AS study306, 
  SUM(study312) AS study312, 
  SUM(rightCarrels3) AS rightCarrels3, 
  SUM(study315) AS study315,   
  SUM(study316) AS study316, 
  SUM(study317) AS study317, 
  SUM(other3) AS other3, 
SUM(centralSeating2)+SUM(centralComputers2)+SUM(ada204)+SUM(publicStations2)+SUM(leftSeating2)+SUM(study207)+SUM(study212)+SUM(rightSeating2)+SUM(isLab)+SUM(greatHall)+SUM(other2)+SUM(studyLoft3)+SUM(centralSeating3)+SUM(study302)+SUM(study303)+SUM(leftCarrels3)+SUM(study306)+SUM(study312)+SUM(rightCarrels3)+SUM(study315)+SUM(study316)+SUM(study317)+SUM(other3) AS Total
FROM counts 
WHERE date >= '$range1a' AND date <= '$range1b'
GROUP BY hour WITH ROLLUP) as crossdata
ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm','Total')");
			} else {
				//crossdata - One Day
			$results = mysqli_query($connect,"SELECT * FROM
(SELECT IFNULL(hour, 'Total') AS hour, 
  SUM(centralSeating2) AS centralSeating2, 
  SUM(centralComputers2) AS centralComputers2, 
  SUM(ada204) AS ada204, 
  SUM(publicStations2) AS publicStations2, 
  SUM(leftSeating2) AS leftSeating2, 
  SUM(study207) AS study207, 
  SUM(study212) AS study212, 
  SUM(rightSeating2) AS rightSeating2, 
  SUM(isLab) AS isLab, 
  SUM(greatHall) AS greatHall, 
  SUM(other2) AS other2, 
  SUM(studyLoft3) AS studyLoft3, 
  SUM(centralSeating3) AS centralSeating3, 
  SUM(study302) AS study302, 
  SUM(study303) AS study303, 
  SUM(leftCarrels3) AS leftCarrels3,
  SUM(study306) AS study306, 
  SUM(study312) AS study312, 
  SUM(rightCarrels3) AS rightCarrels3, 
  SUM(study315) AS study315,   
  SUM(study316) AS study316, 
  SUM(study317) AS study317, 
  SUM(other3) AS other3, 
SUM(centralSeating2)+SUM(centralComputers2)+SUM(ada204)+SUM(publicStations2)+SUM(leftSeating2)+SUM(study207)+SUM(study212)+SUM(rightSeating2)+SUM(isLab)+SUM(greatHall)+SUM(other2)+SUM(studyLoft3)+SUM(centralSeating3)+SUM(study302)+SUM(study303)+SUM(leftCarrels3)+SUM(study306)+SUM(study312)+SUM(rightCarrels3)+SUM(study315)+SUM(study316)+SUM(study317)+SUM(other3) AS Total
FROM counts 
WHERE date >= '$range1a' AND date <= '$range1b' AND day = '$optionDay'
GROUP BY hour WITH ROLLUP) as crossdata
ORDER BY FIELD (hour,'8:00am','9:00am','10:00am','11:00am','12:00pm','1:00pm','2:00pm','3:00pm','4:00pm','5:00pm','6:00pm','7:00pm','8:00pm','9:00pm','10:00pm','11:00pm','Total')");
	}

		if  (mysqli_num_rows($results) > 0) {
			while($row = mysqli_fetch_assoc($results)) {
		$crossData .= "<tr><td>" . $row['hour'] . "</td><td>" . $row['centralSeating2'] . "</td><td>" . $row['centralComputers2'] . "</td><td>" . $row['ada204'] . "</td><td>" . $row['publicStations2'] . "</td><td>" . $row['leftSeating2'] . "</td><td>" . $row['study207'] . "</td><td>" . $row['study212'] . "</td><td>" . $row['rightSeating2'] . "</td><td>" . $row['isLab'] . "</td><td>" . $row['greatHall'] . "</td><td>" . $row['other2'] . "</td><td>" . $row['studyLoft3'] . "</td><td>" . $row['centralSeating3'] . "</td><td>" . $row['study302'] . "</td><td>" . $row['study303'] . "</td><td>" . $row['leftCarrels3'] . "</td><td>" . $row['study306'] . "</td><td>" . $row['study312'] . "</td><td>" . $row['rightCarrels3'] . "</td><td>" . $row['study315'] . "</td><td>" . $row['study316'] . "</td><td>" . $row['study317'] . "</td><td>" . $row['other3'] . "</td><td>" . $row['Total'] . "</td></tr>";
			}
		} 	
		
		$connect->close();
		}

  }
?>
<?php
//Code for Results Display
//option 0
if ($option == 'opt0') {
	ob_start();
print "<h4 class='subheader'><strong>Body Count Statistics</strong></h4><br>";
print "<table width='100%' class='results_table'><tr><th>" . $date . "</th><th>Central Seating</th><th>Central Computers</th><th>ADA Room 204</th><th>Public Stations</th>";
print "<th>Left Seating</th><th>Study Room 207</th><th>Study Room 212</th><th>Right Seating</th><th>IS Lab</th><th>Great Hall</th><th>Other</th><th>Study Loft</th><th>Central Seating</th><th>Study Room 302</th>";
print "<th>Study Room 303</th><th>Left Study Carrels</th><th>Study Room 306</th><th>Study Room 312</th><th>Right Study Carrels</th><th>Study Room 315</th><th>Study Room 316</th><th>Study Room 317</th><th>Other</th></tr>";		
print $submissions;
print "</table>";	
$output = ob_get_clean();
} // End Option 0
?>
<?php
//option 1 & 2
if (($option == 'opt1') || ($option == 'opt2')):
	ob_start();
print "<h4 class='subheader'><strong>Body Count Statistics</strong></h4><br>";
print "<div id='opt1_results'>";
print "<table class='results_table table2exel' id='rangeTable' style='width:50%;'><tr><th>Range 1: </th><td><strong>" . $range1a . "</strong> to <strong>" . $range1b . "</strong></td><td>" . $total1 . " total counts</td></tr>";
if ($option == 'opt2') {
	print "<tr><th>Range 2: </th><td><strong>" . $range2a . "</strong> to <strong>" . $range2b . "</strong></td><td>" . $total2 . " total counts</td></tr>";
}
print "</table><br>";
print "<br><br><br><br>";

print "<div id='hour_chart' style='height:400px;width:75%;margin:auto;'></div>";
print "<div id='hour_data'><strong>Body Counts by Hour</strong>";
print "<table class='results_table table2excel' id='byhour'>";
print "<thead><tr><th>Hour</th>";
print $hour1a;
print "</tr></thead><tbody>";
print "<tr><th>Range 1</th>" . $hour1b . "</tr>";
if ($option == 'opt2') {
	print "<tr><th>Range 2</th>" . $hour2 . "</tr>";
}
print "</tbody></table><br><br><br></div>";

print "<div id='day_chart' style='height:400px;width:75%;margin:auto;'></div>";
print "<div id='day_data'><strong>Body Counts by Day</strong>";
print "<table class='results_table table2excel' id='byday'>";
print "<thead><tr><th>Day</th>";
print "<th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th>";
print "<th>Friday</th><th>Saturday</th><th>Sunday</th></tr></thead><tbody>";
print "<tr><th>Range 1</th><td>" . $mon1 . "</td><td>" . $tue1 . "</td><td>" . $wed1 . "</td><td>" . $thu1 . "</td>";
print "<td>" . $fri1 . "</td><td>" . $sat1 . "</td><td>" . $sun1 . "</td></tr>";
if ($option == 'opt2') {
	print "<tr><th>Range 2</th><td>" . $mon2 . "</td><td>" . $tue2 . "</td><td>" . $wed2 . "</td><td>" . $thu2 . "</td>";
	print "<td>" . $fri2 . "</td><td>" . $sat2 . "</td><td>" . $sun2 . "</td></tr>";
}
print "</tbody></table><br><br><br></div>";

print "<div id='month_chart' style='height:400px;width:75%;margin:auto;'></div>";
print "<div id='month_data'><strong>Body Counts by Month</strong>";
print "<table class='results_table table2excel' id='bymonth'>";
print "<thead><tr><th>Month</th>";
print "<th>January</th><th>February</th><th>March</th><th>April</th>";
print "<th>May</th><th>June</th><th>July</th><th>August</th>";
print "<th>September</th><th>October</th><th>November</th><th>December</th></tr></thead><tbody>";
print "<tr><th>Range 1</th><td>" . $jan1 . "</td><td>" . $feb1 . "</td><td>" . $mar1 . "</td><td>" . $apr1 . "</td>";
print "<td>" . $may1 . "</td><td>" . $jun1 . "</td><td>" . $jul1 . "</td><td>" . $aug1 . "</td>";
print "<td>" . $sep1 . "</td><td>" . $oct1 . "</td><td>" . $nov1 . "</td><td>" . $dec1 . "</td></tr>";
if ($option == 'opt2') {
	print "<tr><th>Range 2</th><td>" . $jan2 . "</td><td>" . $feb2 . "</td><td>" . $mar2 . "</td><td>" . $apr2 . "</td>";
	print "<td>" . $may2 . "</td><td>" . $jun2 . "</td><td>" . $jul2 . "</td><td>" . $aug2 . "</td>";
	print "<td>" . $sep2 . "</td><td>" . $oct2 . "</td><td>" . $nov2 . "</td><td>" . $dec2 . "</td></tr>";
}
print "</tbody></table><br><br><br></div>";

print "<div id='location_chart' style='height:600px;width:75%;margin:auto;'></div>";
print "<div id='location_data'><strong>Body Counts by Location</strong>";
print "<table class='results_table table2excel' id='bylocation'>";
print "<thead><tr><th>Location</th>";
print "<th>Central Seating</th><th>Central Computers</th><th>ADA Room 204</th><th>Public Stations</th><th>Left Seating</th>";
print "<th>Study Room 207</th><th>Study Room 212</th><th>Right Seating</th><th>IS Lab</th><th>Great Hall</th>";
print "<th>Other</th><th>Study Loft</th><th>Central Seating</th><th>Study Room 302</th><th>Study Room 303</th>";
print "<th>Left Carrels</th><th>Study Room 306</th><th>Study Room 312</th><th>Right Carrels</th>";
print "<th>Study Room 315</th><th>Study Room 316</th><th>Study Room 317</th><th>Other</th></tr></thead><tbody>";
print "<tr><th>Range 1</th><td>" . $loca1 . "</td><td>" . $locb1 . "</td>";
print "<td>" . $locc1 . "</td><td>" . $locd1 . "</td><td>" . $loce1 . "</td><td>" . $locf1 . "</td><td>" . $locg1 . "</td>";
print "<td>" . $loch1 . "</td><td>" . $loci1 . "</td><td>" . $locj1 . "</td><td>" . $lock1 . "</td><td>" . $locl1 . "</td>";
print "<td>" . $locm1 . "</td><td>" . $locn1 . "</td><td>" . $loco1 . "</td><td>" . $locp1 . "</td><td>" . $locq1 . "</td>";
print "<td>" . $locr1 . "</td><td>" . $locs1 . "</td><td>" . $loct1 . "</td><td>" . $locu1 . "</td><td>" . $locv1 . "</td>";
print "<td>" . $locw1 . "</td></tr>";
if ($option == 'opt2') {
	print "<tr><th>Range 2</th><td>" . $loca2 . "</td><td>" . $locb2 . "</td>";
	print "<td>" . $locc2 . "</td><td>" . $locd2 . "</td><td>" . $loce2 . "</td><td>" . $locf2 . "</td><td>" . $locg2 . "</td>";
	print "<td>" . $loch2 . "</td><td>" . $loci2 . "</td><td>" . $locj2 . "</td><td>" . $lock2 . "</td><td>" . $locl2 . "</td>";
	print "<td>" . $locm2 . "</td><td>" . $locn2 . "</td><td>" . $loco2 . "</td><td>" . $locp2 . "</td><td>" . $locq2 . "</td>";
	print "<td>" . $locr2 . "</td><td>" . $locs2 . "</td><td>" . $loct2 . "</td><td>" . $locu2 . "</td><td>" . $locv2 . "</td>";
	print "<td>" . $locw2 . "</td></tr>";
}
print "</tbody></table><br><br><br></div></div><br><br>";
print "<button  class='submitex' onclick=\"tablesToExcel(['rangeTable','byhour','byday','bymonth','bylocation'], ['DateRangeTotals','CountsByHour','CountsByDay','CountsByMonth','CountsByLocation'], 'BodyCounts.xls', 'Excel')\">Export to Excel</button>";
$output = ob_get_clean();	
// End Option 1/2
?>
<script>
$(function () { 
    Highcharts.chart('hour_chart', {
    data: {
        table: 'byhour',
		switchRowsAndColumns: true
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Body Counts by Hour'
    },
	colors: ['#005481','#ED561B'],
	yAxis: {
        allowDecimals: false,
        title: {
            text: 'Counts'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.name.toLowerCase() + '<br>' + this.point.y;
        }
    }
});
});

$(function () { 
    Highcharts.chart('day_chart', {
    data: {
        table: 'byday',
		switchRowsAndColumns: true
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Body Counts by Day'
    },
	colors: ['#058DC7','#272264'],
     yAxis: {
        allowDecimals: false,
        title: {
            text: 'Counts'
        }
    },
     tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.name.toLowerCase() + '<br>' + this.point.y;
        }
    }
});
});

$(function () { 
    Highcharts.chart('month_chart', {
    data: {
        table: 'bymonth',
		switchRowsAndColumns: true
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Body Counts by Month'
    },
	colors: ['#272264','#6AF9C4'],
     yAxis: {
        allowDecimals: false,
        title: {
            text: 'Counts'
        }
    },
       tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.name.toLowerCase() + '<br>' + this.point.y;
        }
    }
});
});

$(function () { 
    Highcharts.chart('location_chart', {
    data: {
        table: 'bylocation',
		switchRowsAndColumns: true
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Body Counts by Location'
    },
	colors: ['#ED561B','#058DC7','#005481'],
	yAxis: {
		allowDecimals: false,
        title: {
			enabled:true,
			text: 'Counts'
        }
    },
	   xAxis: {
		allowDecimals: false,
        title: {
            enabled: false,
            text: ''
        }      
	},
     tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.name.toLowerCase() + '<br>' + this.point.y;
        }
    }
});
});
</script>
<?php endif; ?>
<?php
//option 3
if ($option == 'opt3'):
	ob_start();
print "<h4 class='subheader'><strong>Body Count Statistics</strong></h4><br>";
print "<div id='year_chart' style='height:400px;width:50%;margin:auto;'></div>";
print "<div id='year_data'><strong>Body Counts by Academic Year</strong>";
print "<table class='results_table table2excel' id='byyear'>";
print "<thead><tr><th>Year</th>";
print $ay1;
print "</tr></thead><tbody>";
print "<tr><th>Total per year</th>" . $ay2 . "</tr>";
print "</tbody></table><br><br><br></div>";
print "<button class='submitex' onclick=\"tablesToExcel(['byyear'], ['CountsByAcademicYear'], 'BodyCounts.xls', 'Excel')\">Export to Excel</button>";
$output = ob_get_clean();	
//End Option 3
?>
<script>
$(function () { 
    Highcharts.chart('year_chart', {
    data: {
        table: 'byyear',
		switchRowsAndColumns: true
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Body Counts by Academic Year'
    },
	colors: ['#6AF9C4'],
     yAxis: {
        allowDecimals: false,
        title: {
            text: 'Counts'
        }
    },
       tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.name.toUpperCase() + '<br>' + this.point.y;
        }
    }
});
});
</script>
<?php endif; ?>
<?php
//option 4
if ($option == 'opt4'){
	$header = "Statistics - " . $optionDay . "s";
	ob_start();
print "<h4 class='subheader'><strong>Body Count " . $header . "</strong></h4><br>";
print "<table class='results_table table2excel' id='crossdata'>";
print "<tr><td colspan=25 style='text-align:left;'><strong>" . $range1a . " to " . $range1b . "</strong></td></tr>";
print "<tr><th>Hour</th><th>Central Seating</th><th>Central Computers</th><th>ADA Room 204</th><th>Public Stations</th>";
print "<th>Left Seating</th><th>Study Room 207</th><th>Study Room 212</th><th>Right Seating</th><th>IS Lab</th><th>Great Hall</th><th>Other</th><th>Study Loft</th><th>Central Seating</th><th>Study Room 302</th>";
print "<th>Study Room 303</th><th>Left Study Carrels</th><th>Study Room 306</th><th>Study Room 312</th><th>Right Study Carrels</th><th>Study Room 315</th><th>Study Room 316</th><th>Study Room 317</th><th>Other</th><th>Total</th></tr>";		
print $crossData;
print "</table><br>";
print "<button class='submitex' onclick=\"tablesToExcel(['crossdata'], ['$header'], 'BodyCounts.xls', 'Excel')\">Export to Excel</button>";
$output = ob_get_clean();	
}//End Option 4
?>

<!-- Input Form -->
<table class="option_table" width="85%;" style="background-color:#d1d1d1; margin-bottom:0;margin-left:100px;">
<tr><td>
<select>
	<option>Select an option</option>
	<option value="opt0">View counts from one date</option>
    <option value="opt1">Basic stats for one date range</option>
    <option value="opt2">Basic stats for two date ranges</option>
	<option value="opt3">Year by year statistics</option>
	<option value="opt4">Cross-sectional data comparison</option>
</select></td></tr></table>
<div class="opt0 box">
<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table width="100%;" class="option_table">
<tr>
<td>
<strong>View counts for:</strong> <input type="text" name="date" class="selectDate datepicker"> <br><br><br><br>
<input type='hidden' name='option' value='opt0'>
<input type='submit' class='submit' name='submit' value='Submit'>
</td></tr></table>
</form>
</div>
<div class="opt1 box">
<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table width="100%;" class="option_table">
<tr>
<td>
<strong>Date Range:</strong> <input type="text" name="range1a" class="selectDate datepicker"> to <input type="text" name="range1b" class="selectDate datepicker"><br><br><br><br>
<input type='hidden' name='option' value='opt1'>
<input type='submit' class='submit' name='submit' value='Submit'>
</td></tr></table>
</form>
</div>
<div class="opt2 box">
<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table width="100%;" class="option_table">
<tr>
<td>
<strong>Date Range 1:</strong>  <input type="text" name="range1a" class="selectDate datepicker"> to <input type="text" name="range1b" class="selectDate datepicker"><br><br>
<strong>Date Range 2:</strong>  <input type="text" name="range2a" class="selectDate datepicker"> to <input type="text" name="range2b" class="selectDate datepicker"><br><br><br><br>
<input type='hidden' name='option' value='opt2'>
<input type='submit' class='submit' name='submit' value='Submit'></div>
</td></tr></table>
</form>
</div>
<div class="opt3 box">
<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table width="100%;" class="option_table">
<tr>
<td>
<strong>Choose years to compare:</strong><br>
<p>AY = June 1 to May 31</p><br><br>
<div style="padding-left:30px;">
<input type="checkbox" name="rangeyr[]" value="AY1213">&nbsp;&nbsp;AY1213&nbsp;&nbsp;
<input type="checkbox" name="rangeyr[]" value="AY1516">&nbsp;&nbsp;AY1516<br><br>
<input type="checkbox" name="rangeyr[]" value="AY1314">&nbsp;&nbsp;AY1314&nbsp;&nbsp;
<input type="checkbox" name="rangeyr[]" value="AY1617">&nbsp;&nbsp;AY1617<br> <br>
<input type="checkbox" name="rangeyr[]" value="AY1415">&nbsp;&nbsp;AY1415&nbsp;&nbsp;
<input type="checkbox" name="rangeyr[]" value="AY1718">&nbsp;&nbsp;AY1718 
<input type='hidden' name='option' value='opt3'>
<input type='submit' class='submit' name='submit' value='Submit'></div>
</td></tr></table>
</form>
</div>
<div class="opt4 box">
<br><br>
<form style='margin-left: 20px;' id = 'selectDay' method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<strong>Select Date Range:</strong>  <input type="text" name="range1a" class="selectDate datepicker" value='<?php echo isset($_POST['range1a']) ? $_POST['range1a'] : '' ?>' /> to <input type="text" name="range1b" class="selectDate datepicker" value='<?php echo isset($_POST['range1b']) ? $_POST['range1b'] : '' ?>' /><br><br>
<strong>Select Day:</strong>&nbsp;&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='All' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'All') echo ' checked="checked"';?> />&nbsp;All Days&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Monday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Monday') echo ' checked="checked"';?> />&nbsp;Monday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Tuesday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Tuesday') echo ' checked="checked"';?> />&nbsp;Tuesday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Wednesday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Wednesday') echo ' checked="checked"';?> />&nbsp;Wednesday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Thursday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Thursday') echo ' checked="checked"';?> />&nbsp;Thursday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Friday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Friday') echo ' checked="checked"';?> />&nbsp;Friday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Saturday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Saturday') echo ' checked="checked"';?> />&nbsp;Saturday&nbsp;&nbsp;
<input type ='radio' name='optionDay' value='Sunday' <?php if (isset($_POST['optionDay']) && $_POST['optionDay'] == 'Sunday') echo ' checked="checked"';?> />&nbsp;Sunday<br>
<input type='hidden' name='option' value='opt4'>
</form><br><br>
</div>
<br><br><br><br>
<div id="results_output"><?php echo $output; ?></div>

	
	</body></html>