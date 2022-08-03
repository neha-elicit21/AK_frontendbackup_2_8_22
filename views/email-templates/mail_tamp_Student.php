<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adminstion key</title>
</head>
<body>
	 <center><span style="color:orange; font-size: 32px;" >Admissions Key</span></center>

  <h2>Congratulations on your decision to apply with Admissions Key! </h2>
  <h2>Dear,<?=$student_name?></h2>
	 <p>Thank you for contacting Admissions Key! We are pleased that you have decided to become part of our community of high achievers and trusted Admissions Key&#39;s expertise and dedicated support to ensure the success of your application.<br/>
	The expert(s) you would like to work with will contact you shorty to confirm the meeting date/time that you have selected. Please find his/her information below:<br/><br/> 
		<b>Last name:</b> <?=$professor_last_name?> <br/>
		<b>First name:</b> <?=$professor_name?> <br/>
		<b>Country:</b> <?=$professor_country?><br/>
		<b>Phone number:</b> <?=$professor_mobile?><br/>
		<b>Mail: </b><?=$professor_email?><br/>
		You will find your expert&#39;s profile link and relevant information below.<br/>
	<!-- 	School & Career consultation : session with career consultant -->
		<br/><br/>

		 <a href="<?=base_url()?>profile/<?=$professor_id?>"><?=$our_experts_title?> : session with <?=$package_name?></a>
		</p><br/>
	<b>We wish you the best of luck with your application!</b>,<br/>
	<b>Kind regards,</b><br/>
	<b>Admissions Key Team</b>
</body>
</html>