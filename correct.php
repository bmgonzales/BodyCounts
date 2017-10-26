<!DOCTYPE html><html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<title>Library Body Counts Correction</title>

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
</head><body>

<h1>Submit Corrected Counts</h1>
<br><br><br>


<div id="submit_counts">		
<form method='post' action="confirm.php">
<label for 'day' style="margin-left:100px;">Choose Date to Submit:&nbsp;&nbsp;</label><input type="text" name="date" class="selectDate datepicker"><br><br>

<table width="100%" class='results_table'>
<thead><tr style="background-color:#005481;"><th style="border-left:3px solid #005481;"></th><th colspan=11><span style="color:#fff;">2nd Floor</span></th><th colspan=12 style="border-right:3px solid #005481;"><span style="color:#fff;">3rd Floor</span></th></tr>
<tr style="background-color: #d5dbdb ;"><th style="border-left:3px solid #005481;"></th>
<th>Central Seating</th>
<th>Central Computers</th>
<th>ADA Room 204</th>
<th>Public Stations</th>
<th>Left Seating</th>
<th>Study Room 207</th>
<th>Study Room 212</th>
<th>Right Seating</th>
<th>IS Lab</th>
<th>Great Hall</th>
<th style="border-right:3px solid #005481;">Other</th>
<th>Study Loft</th>
<th>Central Seating</th>
<th>Study Room 302</th>
<th>Study Room 303</th>
<th>Left Study Carrels</th>
<th>Study Room 306</th>
<th>Study Room 312</th>
<th>Right Study Carrels</th>
<th>Study Room 315</th><th>Study Room 316</th>
<th>Study Room 317</th>
<th style="border-right:3px solid #005481;">Other</th></tr></thead>
<tbody><tr>
<th style="border-left:3px solid #005481;">8:00am</th>
<td><input type='text' name='a8centralSeating2' value='0'></td>
<td><input type='text' name='a8centralComputers2' value='0'></td>
<td><input type='text' name='a8ada204' value='0'></td>
<td><input type='text' name='a8publicStations2' value='0'></td>
<td><input type='text' name='a8leftSeating2' value='0'></td>
<td><input type='text' name='a8study207' value='0'></td>
<td><input type='text' name='a8study212' value='0'></td>
<td><input type='text' name='a8rightSeating2' value='0'></td>
<td><input type='text' name='a8isLab' value='0'></td>
<td><input type='text' name='a8greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a8other2' value='0'></td>
<td><input type='text' name='a8studyLoft' value='0'></td>
<td><input type='text' name='a8centralSeating3' value='0'></td>
<td><input type='text' name='a8study302' value='0'></td>
<td><input type='text' name='a8study303' value='0'></td>
<td><input type='text' name='a8leftCarrels' value='0'></td>
<td><input type='text' name='a8study306' value='0'></td>
<td><input type='text' name='a8study312' value='0'></td>
<td><input type='text' name='a8rightCarrels' value='0'></td>
<td><input type='text' name='a8study315' value='0'></td>
<td><input type='text' name='a8study316' value='0'></td>
<td><input type='text' name='a8study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a8other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">9:00am</th>
<td><input type='text' name='a9centralSeating2' value='0'></td>
<td><input type='text' name='a9centralComputers2' value='0'></td>
<td><input type='text' name='a9ada204' value='0'></td>
<td><input type='text' name='a9publicStations2' value='0'></td>
<td><input type='text' name='a9leftSeating2' value='0'></td>
<td><input type='text' name='a9study207' value='0'></td>
<td><input type='text' name='a9study212' value='0'></td>
<td><input type='text' name='a9rightSeating2' value='0'></td>
<td><input type='text' name='a9isLab' value='0'></td>
<td><input type='text' name='a9greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a9other2' value='0'></td>
<td><input type='text' name='a9studyLoft' value='0'></td>
<td><input type='text' name='a9centralSeating3' value='0'></td>
<td><input type='text' name='a9study302' value='0'></td>
<td><input type='text' name='a9study303' value='0'></td>
<td><input type='text' name='a9leftCarrels' value='0'></td>
<td><input type='text' name='a9study306' value='0'></td>
<td><input type='text' name='a9study312' value='0'></td>
<td><input type='text' name='a9rightCarrels' value='0'></td>
<td><input type='text' name='a9study315' value='0'></td>
<td><input type='text' name='a9study316' value='0'></td>
<td><input type='text' name='a9study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a9other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">10:00am</th>
<td><input type='text' name='a10centralSeating2' value='0'></td>
<td><input type='text' name='a10centralComputers2' value='0'></td>
<td><input type='text' name='a10ada204' value='0'></td>
<td><input type='text' name='a10publicStations2' value='0'></td>
<td><input type='text' name='a10leftSeating2' value='0'></td>
<td><input type='text' name='a10study207' value='0'></td>
<td><input type='text' name='a10study212' value='0'></td>
<td><input type='text' name='a10rightSeating2' value='0'></td>
<td><input type='text' name='a10isLab' value='0'></td>
<td><input type='text' name='a10greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a10other2' value='0'></td>
<td><input type='text' name='a10studyLoft' value='0'></td>
<td><input type='text' name='a10centralSeating3' value='0'></td>
<td><input type='text' name='a10study302' value='0'></td>
<td><input type='text' name='a10study303' value='0'></td>
<td><input type='text' name='a10leftCarrels' value='0'></td>
<td><input type='text' name='a10study306' value='0'></td>
<td><input type='text' name='a10study312' value='0'></td>
<td><input type='text' name='a10rightCarrels' value='0'></td>
<td><input type='text' name='a10study315' value='0'></td>
<td><input type='text' name='a10study316' value='0'></td>
<td><input type='text' name='a10study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a10other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">11:00am</th>
<td><input type='text' name='a11centralSeating2' value='0'></td>
<td><input type='text' name='a11centralComputers2' value='0'></td>
<td><input type='text' name='a11ada204' value='0'></td>
<td><input type='text' name='a11publicStations2' value='0'></td>
<td><input type='text' name='a11leftSeating2' value='0'></td>
<td><input type='text' name='a11study207' value='0'></td>
<td><input type='text' name='a11study212' value='0'></td>
<td><input type='text' name='a11rightSeating2' value='0'></td>
<td><input type='text' name='a11isLab' value='0'></td>
<td><input type='text' name='a11greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a11other2' value='0'></td>
<td><input type='text' name='a11studyLoft' value='0'></td>
<td><input type='text' name='a11centralSeating3' value='0'></td>
<td><input type='text' name='a11study302' value='0'></td>
<td><input type='text' name='a11study303' value='0'></td>
<td><input type='text' name='a11leftCarrels' value='0'></td>
<td><input type='text' name='a11study306' value='0'></td>
<td><input type='text' name='a11study312' value='0'></td>
<td><input type='text' name='a11rightCarrels' value='0'></td>
<td><input type='text' name='a11study315' value='0'></td>
<td><input type='text' name='a11study316' value='0'></td>
<td><input type='text' name='a11study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='a11other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">12:00pm</th>
<td><input type='text' name='p12centralSeating2' value='0'></td>
<td><input type='text' name='p12centralComputers2' value='0'></td>
<td><input type='text' name='p12ada204' value='0'></td>
<td><input type='text' name='p12publicStations2' value='0'></td>
<td><input type='text' name='p12leftSeating2' value='0'></td>
<td><input type='text' name='p12study207' value='0'></td>
<td><input type='text' name='p12study212' value='0'></td>
<td><input type='text' name='p12rightSeating2' value='0'></td>
<td><input type='text' name='p12isLab' value='0'></td>
<td><input type='text' name='p12greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p12other2' value='0'></td>
<td><input type='text' name='p12studyLoft' value='0'></td>
<td><input type='text' name='p12centralSeating3' value='0'></td>
<td><input type='text' name='p12study302' value='0'></td>
<td><input type='text' name='p12study303' value='0'></td>
<td><input type='text' name='p12leftCarrels' value='0'></td>
<td><input type='text' name='p12study306' value='0'></td>
<td><input type='text' name='p12study312' value='0'></td>
<td><input type='text' name='p12rightCarrels' value='0'></td>
<td><input type='text' name='p12study315' value='0'></td>
<td><input type='text' name='p12study316' value='0'></td>
<td><input type='text' name='p12study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p12other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">1:00pm</th>
<td><input type='text' name='p1centralSeating2' value='0'></td>
<td><input type='text' name='p1centralComputers2' value='0'></td>
<td><input type='text' name='p1ada204' value='0'></td>
<td><input type='text' name='p1publicStations2' value='0'></td>
<td><input type='text' name='p1leftSeating2' value='0'></td>
<td><input type='text' name='p1study207' value='0'></td>
<td><input type='text' name='p1study212' value='0'></td>
<td><input type='text' name='p1rightSeating2' value='0'></td>
<td><input type='text' name='p1isLab' value='0'></td>
<td><input type='text' name='p1greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p1other2' value='0'></td>
<td><input type='text' name='p1studyLoft' value='0'></td>
<td><input type='text' name='p1centralSeating3' value='0'></td>
<td><input type='text' name='p1study302' value='0'></td>
<td><input type='text' name='p1study303' value='0'></td>
<td><input type='text' name='p1leftCarrels' value='0'></td>
<td><input type='text' name='p1study306' value='0'></td>
<td><input type='text' name='p1study312' value='0'></td>
<td><input type='text' name='p1rightCarrels' value='0'></td>
<td><input type='text' name='p1study315' value='0'></td>
<td><input type='text' name='p1study316' value='0'></td>
<td><input type='text' name='p1study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p1other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">2:00pm</th>
<td><input type='text' name='p2centralSeating2' value='0'></td>
<td><input type='text' name='p2centralComputers2' value='0'></td>
<td><input type='text' name='p2ada204' value='0'></td>
<td><input type='text' name='p2publicStations2' value='0'></td>
<td><input type='text' name='p2leftSeating2' value='0'></td>
<td><input type='text' name='p2study207' value='0'></td>
<td><input type='text' name='p2study212' value='0'></td>
<td><input type='text' name='p2rightSeating2' value='0'></td>
<td><input type='text' name='p2isLab' value='0'></td>
<td><input type='text' name='p2greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p2other2' value='0'></td>
<td><input type='text' name='p2studyLoft' value='0'></td>
<td><input type='text' name='p2centralSeating3' value='0'></td>
<td><input type='text' name='p2study302' value='0'></td>
<td><input type='text' name='p2study303' value='0'></td>
<td><input type='text' name='p2leftCarrels' value='0'></td>
<td><input type='text' name='p2study306' value='0'></td>
<td><input type='text' name='p2study312' value='0'></td>
<td><input type='text' name='p2rightCarrels' value='0'></td>
<td><input type='text' name='p2study315' value='0'></td>
<td><input type='text' name='p2study316' value='0'></td>
<td><input type='text' name='p2study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p2other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">3:00pm</th>
<td><input type='text' name='p3centralSeating2' value='0'></td>
<td><input type='text' name='p3centralComputers2' value='0'></td>
<td><input type='text' name='p3ada204' value='0'></td>
<td><input type='text' name='p3publicStations2' value='0'></td>
<td><input type='text' name='p3leftSeating2' value='0'></td>
<td><input type='text' name='p3study207' value='0'></td>
<td><input type='text' name='p3study212' value='0'></td>
<td><input type='text' name='p3rightSeating2' value='0'></td>
<td><input type='text' name='p3isLab' value='0'></td>
<td><input type='text' name='p3greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p3other2' value='0'></td>
<td><input type='text' name='p3studyLoft' value='0'></td>
<td><input type='text' name='p3centralSeating3' value='0'></td>
<td><input type='text' name='p3study302' value='0'></td>
<td><input type='text' name='p3study303' value='0'></td>
<td><input type='text' name='p3leftCarrels' value='0'></td>
<td><input type='text' name='p3study306' value='0'></td>
<td><input type='text' name='p3study312' value='0'></td>
<td><input type='text' name='p3rightCarrels' value='0'></td>
<td><input type='text' name='p3study315' value='0'></td>
<td><input type='text' name='p3study316' value='0'></td>
<td><input type='text' name='p3study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p3other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">4:00pm</th>
<td><input type='text' name='p4centralSeating2' value='0'></td>
<td><input type='text' name='p4centralComputers2' value='0'></td>
<td><input type='text' name='p4ada204' value='0'></td>
<td><input type='text' name='p4publicStations2' value='0'></td>
<td><input type='text' name='p4leftSeating2' value='0'></td>
<td><input type='text' name='p4study207' value='0'></td>
<td><input type='text' name='p4study212' value='0'></td>
<td><input type='text' name='p4rightSeating2' value='0'></td>
<td><input type='text' name='p4isLab' value='0'></td>
<td><input type='text' name='p4greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p4other2' value='0'></td>
<td><input type='text' name='p4studyLoft' value='0'></td>
<td><input type='text' name='p4centralSeating3' value='0'></td>
<td><input type='text' name='p4study302' value='0'></td>
<td><input type='text' name='p4study303' value='0'></td>
<td><input type='text' name='p4leftCarrels' value='0'></td>
<td><input type='text' name='p4study306' value='0'></td>
<td><input type='text' name='p4study312' value='0'></td>
<td><input type='text' name='p4rightCarrels' value='0'></td>
<td><input type='text' name='p4study315' value='0'></td>
<td><input type='text' name='p4study316' value='0'></td>
<td><input type='text' name='p4study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p4other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">5:00pm</th>
<td><input type='text' name='p5centralSeating2' value='0'></td>
<td><input type='text' name='p5centralComputers2' value='0'></td>
<td><input type='text' name='p5ada204' value='0'></td>
<td><input type='text' name='p5publicStations2' value='0'></td>
<td><input type='text' name='p5leftSeating2' value='0'></td>
<td><input type='text' name='p5study207' value='0'></td>
<td><input type='text' name='p5study212' value='0'></td>
<td><input type='text' name='p5rightSeating2' value='0'></td>
<td><input type='text' name='p5isLab' value='0'></td>
<td><input type='text' name='p5greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p5other2' value='0'></td>
<td><input type='text' name='p5studyLoft' value='0'></td>
<td><input type='text' name='p5centralSeating3' value='0'></td>
<td><input type='text' name='p5study302' value='0'></td>
<td><input type='text' name='p5study303' value='0'></td>
<td><input type='text' name='p5leftCarrels' value='0'></td>
<td><input type='text' name='p5study306' value='0'></td>
<td><input type='text' name='p5study312' value='0'></td>
<td><input type='text' name='p5rightCarrels' value='0'></td>
<td><input type='text' name='p5study315' value='0'></td>
<td><input type='text' name='p5study316' value='0'></td>
<td><input type='text' name='p5study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p5other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">6:00pm</th>
<td><input type='text' name='p6centralSeating2' value='0'></td>
<td><input type='text' name='p6centralComputers2' value='0'></td>
<td><input type='text' name='p6ada204' value='0'></td>
<td><input type='text' name='p6publicStations2' value='0'></td>
<td><input type='text' name='p6leftSeating2' value='0'></td>
<td><input type='text' name='p6study207' value='0'></td>
<td><input type='text' name='p6study212' value='0'></td>
<td><input type='text' name='p6rightSeating2' value='0'></td>
<td><input type='text' name='p6isLab' value='0'></td>
<td><input type='text' name='p6greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p6other2' value='0'></td>
<td><input type='text' name='p6studyLoft' value='0'></td>
<td><input type='text' name='p6centralSeating3' value='0'></td>
<td><input type='text' name='p6study302' value='0'></td>
<td><input type='text' name='p6study303' value='0'></td>
<td><input type='text' name='p6leftCarrels' value='0'></td>
<td><input type='text' name='p6study306' value='0'></td>
<td><input type='text' name='p6study312' value='0'></td>
<td><input type='text' name='p6rightCarrels' value='0'></td>
<td><input type='text' name='p6study315' value='0'></td>
<td><input type='text' name='p6study316' value='0'></td>
<td><input type='text' name='p6study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p6other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">7:00pm</th>
<td><input type='text' name='p7centralSeating2' value='0'></td>
<td><input type='text' name='p7centralComputers2' value='0'></td>
<td><input type='text' name='p7ada204' value='0'></td>
<td><input type='text' name='p7publicStations2' value='0'></td>
<td><input type='text' name='p7leftSeating2' value='0'></td>
<td><input type='text' name='p7study207' value='0'></td>
<td><input type='text' name='p7study212' value='0'></td>
<td><input type='text' name='p7rightSeating2' value='0'></td>
<td><input type='text' name='p7isLab' value='0'></td>
<td><input type='text' name='p7greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p7other2' value='0'></td>
<td><input type='text' name='p7studyLoft' value='0'></td>
<td><input type='text' name='p7centralSeating3' value='0'></td>
<td><input type='text' name='p7study302' value='0'></td>
<td><input type='text' name='p7study303' value='0'></td>
<td><input type='text' name='p7leftCarrels' value='0'></td>
<td><input type='text' name='p7study306' value='0'></td>
<td><input type='text' name='p7study312' value='0'></td>
<td><input type='text' name='p7rightCarrels' value='0'></td>
<td><input type='text' name='p7study315' value='0'></td>
<td><input type='text' name='p7study316' value='0'></td>
<td><input type='text' name='p7study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p7other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">8:00pm</th>
<td><input type='text' name='p8centralSeating2' value='0'></td>
<td><input type='text' name='p8centralComputers2' value='0'></td>
<td><input type='text' name='p8ada204' value='0'></td>
<td><input type='text' name='p8publicStations2' value='0'></td>
<td><input type='text' name='p8leftSeating2' value='0'></td>
<td><input type='text' name='p8study207' value='0'></td>
<td><input type='text' name='p8study212' value='0'></td>
<td><input type='text' name='p8rightSeating2' value='0'></td>
<td><input type='text' name='p8isLab' value='0'></td>
<td><input type='text' name='p8greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p8other2' value='0'></td>
<td><input type='text' name='p8studyLoft' value='0'></td>
<td><input type='text' name='p8centralSeating3' value='0'></td>
<td><input type='text' name='p8study302' value='0'></td>
<td><input type='text' name='p8study303' value='0'></td>
<td><input type='text' name='p8leftCarrels' value='0'></td>
<td><input type='text' name='p8study306' value='0'></td>
<td><input type='text' name='p8study312' value='0'></td>
<td><input type='text' name='p8rightCarrels' value='0'></td>
<td><input type='text' name='p8study315' value='0'></td>
<td><input type='text' name='p8study316' value='0'></td>
<td><input type='text' name='p8study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p8other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb ;">
<th style="border-left:3px solid #005481;">9:00pm</th>
<td><input type='text' name='p9centralSeating2' value='0'></td>
<td><input type='text' name='p9centralComputers2' value='0'></td>
<td><input type='text' name='p9ada204' value='0'></td>
<td><input type='text' name='p9publicStations2' value='0'></td>
<td><input type='text' name='p9leftSeating2' value='0'></td>
<td><input type='text' name='p9study207' value='0'></td>
<td><input type='text' name='p9study212' value='0'></td>
<td><input type='text' name='p9rightSeating2' value='0'></td>
<td><input type='text' name='p9isLab' value='0'></td>
<td><input type='text' name='p9greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p9other2' value='0'></td>
<td><input type='text' name='p9studyLoft' value='0'></td>
<td><input type='text' name='p9centralSeating3' value='0'></td>
<td><input type='text' name='p9study302' value='0'></td>
<td><input type='text' name='p9study303' value='0'></td>
<td><input type='text' name='p9leftCarrels' value='0'></td>
<td><input type='text' name='p9study306' value='0'></td>
<td><input type='text' name='p9study312' value='0'></td>
<td><input type='text' name='p9rightCarrels' value='0'></td>
<td><input type='text' name='p9study315' value='0'></td>
<td><input type='text' name='p9study316' value='0'></td>
<td><input type='text' name='p9study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p9other3' value='0'></td>
</tr><tr>
<th style="border-left:3px solid #005481;">10:00pm</th>
<td><input type='text' name='p10centralSeating2' value='0'></td>
<td><input type='text' name='p10centralComputers2' value='0'></td>
<td><input type='text' name='p10ada204' value='0'></td>
<td><input type='text' name='p10publicStations2' value='0'></td>
<td><input type='text' name='p10leftSeating2' value='0'></td>
<td><input type='text' name='p10study207' value='0'></td>
<td><input type='text' name='p10study212' value='0'></td>
<td><input type='text' name='p10rightSeating2' value='0'></td>
<td><input type='text' name='p10isLab' value='0'></td>
<td><input type='text' name='p10greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p10other2' value='0'></td>
<td><input type='text' name='p10studyLoft' value='0'></td>
<td><input type='text' name='p10centralSeating3' value='0'></td>
<td><input type='text' name='p10study302' value='0'></td>
<td><input type='text' name='p10study303' value='0'></td>
<td><input type='text' name='p10leftCarrels' value='0'></td>
<td><input type='text' name='p10study306' value='0'></td>
<td><input type='text' name='p10study312' value='0'></td>
<td><input type='text' name='p10rightCarrels' value='0'></td>
<td><input type='text' name='p10study315' value='0'></td>
<td><input type='text' name='p10study316' value='0'></td>
<td><input type='text' name='p10study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p10other3' value='0'></td>
</tr><tr style="background-color: #d5dbdb;border-bottom:3px solid #005481;">
<th style="border-left:3px solid #005481;">11:00pm</th>
<td><input type='text' name='p11centralSeating2' value='0'></td>
<td><input type='text' name='p11centralComputers2' value='0'></td>
<td><input type='text' name='p11ada204' value='0'></td>
<td><input type='text' name='p11publicStations2' value='0'></td>
<td><input type='text' name='p11leftSeating2' value='0'></td>
<td><input type='text' name='p11study207' value='0'></td>
<td><input type='text' name='p11study212' value='0'></td>
<td><input type='text' name='p11rightSeating2' value='0'></td>
<td><input type='text' name='p11isLab' value='0'></td>
<td><input type='text' name='p11greatHall' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p11other2' value='0'></td>
<td><input type='text' name='p11studyLoft' value='0'></td>
<td><input type='text' name='p11centralSeating3' value='0'></td>
<td><input type='text' name='p11study302' value='0'></td>
<td><input type='text' name='p11study303' value='0'></td>
<td><input type='text' name='p11leftCarrels' value='0'></td>
<td><input type='text' name='p11study306' value='0'></td>
<td><input type='text' name='p11study312' value='0'></td>
<td><input type='text' name='p11rightCarrels' value='0'></td>
<td><input type='text' name='p11study315' value='0'></td>
<td><input type='text' name='p11study316' value='0'></td>
<td><input type='text' name='p11study317' value='0'></td>
<td style="border-right:3px solid #005481;"><input type='text' name='p11other3' value='0'></td>
</tr></tbody></table><br><br>
<input type='hidden' name='correction' value='correction'>
<input type='submit' id='submit' name='submit' value='Submit'>
</form>	
</div>

	</body></html>