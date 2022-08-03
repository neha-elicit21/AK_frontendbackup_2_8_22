<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mylibrary {



function ch150918__utc_offset_dst() {



	// This is just an example. In application this will come from Javascript (via an AJAX or something)

$timezone_offset_minutes = 330;  // $_GET['timezone_offset_minutes']



// Convert minutes to seconds

$time_zone = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);



// Asia/Kolkata

 $timezone_name;

	// Set UTC as default time zone.

	date_default_timezone_set( 'UTC' );

	$utc = new DateTime();



	// Calculate offset.

	$current   = timezone_open( $time_zone );

	$offset_s  = timezone_offset_get( $current, $utc ); // seconds

	$offset_h  = $offset_s / ( 60 * 60 ); // hours



	// Prepend “+” when positive

	$offset_h  = (string) $offset_h;

	if ( strpos( $offset_h, '-' ) === FALSE ) {

		$offset_h = '+' . $offset_h; // prepend +

	}



	return 'UTC' . $offset_h;

}

 

}