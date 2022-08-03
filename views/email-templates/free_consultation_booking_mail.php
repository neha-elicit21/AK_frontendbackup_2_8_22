<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adminstion key</title>
</head>
<body>
 <center><span style="color:orange; font-size: 32px;" >Admissions Key</span></center>

  <h2>Hey,</h2>
  <h2>Congratulations! You have a new student Free Consultation Booking!</h2>

	<h4>Hello,</h4>
		<p>You have a new Free Consultation Booking, <b><?=$fname?></b><br/>
		<b>Free Consultation Booking information:</b><br/>
		<b>Last name:</b> <?=$lname?><br/>
		<b>First name:</b> <?=$fname?><br/>
		<b>Country of residence:</b> <?=$country_of_residence;?><br/>
		<b>Phone number:</b> <?=$mobile;?><br/>
		<b>E-mail:</b> <?=$email;?><br/>
		<b>Currunt GPA:</b> <?=$fcb_current_GPA;?><br/>
		<b>Degree considered:</b> <?=!empty($Considered_Degree)?($Considered_Degree):('');?><br/>
		<b>School(s) considered:</b> <?=$Considered_School;?><br/>
		<b>Intended major:</b> <?=$fcb_intended_major;?><br/>
<!-- 		<b>Day:</b> <?=(explode('_', $fcb_day));?><br/>
		<b>Time:</b> <?=(explode('_', $fcb_time));?><br/> -->
	
		</p><br/>

	<b>Admissions Key Team</b>
</body>
</html>