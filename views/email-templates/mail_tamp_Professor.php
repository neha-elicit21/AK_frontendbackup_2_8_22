<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adminstion key</title>
</head>
<body>
 <center><span style="color:orange; font-size: 32px;" >Admissions Key</span></center>

  <h2>Hey  <?=$professor_name?>,</h2>
  <h2>Congratulations! You have a new student!</h2>

	<h4>Hello,</h4>
		<p>You have a new student, <b><?=$student_name?></b>, who booked a package and is interested in working with you! She/ He consulted your availabilities on Admissions Key&#39;s website, and here are the dates that she/he selected for her first appointment! Please click to confirm one of the dates:<br/>
	   <span><?=$student_Date_of_registration;?>  <?=$student_package_startTime;?> <?=($student_package_startTime<'12:00')?('AM'):('PM')?> TO <?=$student_package_endTime;?><?=($student_package_endTime<'12:00')?('AM'):('PM')?></span><br/>
		<p>If none of those dates work for you, please update your calendar on our website and contact the student directly as soon as possible to set up a date and time convenient for you.<br/><br/>

		<b>Student information:</b><br/>
		<b>Last name:</b> <?=$student_fname?><br/>
		<b>First name:</b> <?=$student_last_name?><br/>
		<b>Country of residence:</b> <?=$student_country_of_residence;?><br/>
		<b>Phone number:</b> <?=$student_mobile;?><br/>
		<b>E-mail:</b> <?=$student_email;?><br/>
		<b>Degree considered:</b> <?=!empty($student_Considered_Degree)?($student_Considered_Degree):($package_name);?><br/>
		<b>School(s) considered:</b> <?=$student_Considered_School;?><br/>
		<b>Intended major:</b> <?=$student_Intended_Major;?><br/>
		<b>Selected Package:</b> <b><?=$package_name?></b><br/>
		   <b><?=$our_experts_title;?></b><br/><br/>
		</p>


	<b>Thank you for being such a valued part of our Admissions Key team! </b>,<br/>
	<b>It is a pleasure to work with you!</b>,<br/>
	<b>Kinds Regards,</b>,<br/>
	<b>Admissions Key Team</b>
</body>
</html>