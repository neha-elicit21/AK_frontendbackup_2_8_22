<?php
/**
* It helps you send the mail
* @param $to,$subject,$message,$cc=null
* @method sendMail
* @author Neha Singhnath
*/
if ( ! function_exists('sendMail')) { 
	function sendMail($to,$subject,$message,$cc=null) { 
	   
	   error_reporting(E_ALL);
	   ini_set('display_errors', '1');
		
		$CI =& get_instance();
		$CI->load->library('email');
         //SMTP & mail configuration
        $config = Array(
          'protocol' =>  PROTOCOL,
          'smtp_host' => SMTP_HOST,
          'smtp_port' => SMTP_PORT,
          'smtp_user' => SMTP_USER,
          'smtp_pass' => SMTP_PASS,
          'crlf' => "\r\n",
          'newline' => "\r\n",
          'smtp_timeout' => '4',
          'mailtype' => 'html',
          'smtp_crypto' => 'tls',
          'charset' => 'iso-8859-1'
        );

        $CI->email->initialize($config);
        $CI->email->set_mailtype("html");
        $CI->email->set_newline("\r\n");
    
        $CI->email->to($to);
        if ($cc!=null) {
           $CI->email->cc($cc);
        }
        $CI->email->from(FROM_MAIL_ID,FROM_MAIL_NAME);
        $CI->email->subject($subject);
        $CI->email->message($message);
        //Send email

        return $CI->email->send();
       // echo $CI->email->print_debugger();

	}
}



if ( ! function_exists('cms_current_url')) { 
	function cms_current_url() { 
		$CI =& get_instance();
		return base_url().$CI->uri->uri_string();
	}
}

function GetAllData($table,$user_type)
{
	$CI =& get_instance();
	      $CI->db->where('user_type',$user_type);
	$data=$CI->db->count_all_results($table);
	     return $data;
}

function GetAllData_registration($table)
{
	$CI =& get_instance();
	$data=$CI->db->count_all_results($table);
	     return $data;
}

 function get_name_by_id($table,$id)
{
	$CI =& get_instance();
	$CI->db->where('id',$id);
	$data=$CI->db->get($table)->row_array();
	return $data;
}

function get_all_by_id($table,$id)
{
	$CI =& get_instance();
	$CI->db->where($id);
	$data=$CI->db->get($table)->result_array();
	return $data;
}

function get_countries()
{
  $CI =& get_instance();
  $data=$CI->db->get('countries')->result_array();
  return $data;
}

function get_professor()
{
  $CI =& get_instance();
  $CI->db->where('user_type',2);
  $data=$CI->db->get('users')->result_array();
  return $data;
}

	function get_time_zone()
{
	$CI =& get_instance();
$ip = $CI->input->ip_address();
$ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
$ipInfo = json_decode($ipInfo);
$timezone = $ipInfo->timezone;
return $timezone;



//date_default_timezone_set($timezone);
// echo date_default_timezone_get();
// echo date('Y/m/d H:i:s');

	  
}
function utc_offset_dst($time_zone) {



	
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
		$offset_h = ' +' . $offset_h; // prepend +
	}

	return 'UTC' . $offset_h;
}

function mail_exists($key)
{
	  $CI =& get_instance();
    $CI->db->where('email',$key);
    $query = $CI->db->get('users');
    if ($query->num_rows() > 0){
        return true;
    }
    else
    {
        return false;
    }
}

function get_num_rows($table,$id)
{
	$CI =& get_instance();
	$data=$CI->db->where('user_id',$id)
	       ->get($table)
	       ->num_rows();
	       return $data;

}
function select_countries($field_name, $country_selected)
{
	// Load the form helper
	$CI =& get_instance();
	$CI->load->helper('form');
	
	// Load the countries array
	$countries	= array(
		'af'	=>	'Afghanistan',
		'al'	=>	'Albania',
		'dz'	=>	'Algeria',
		'ad'	=>	'Andorra',
		'ai'	=>	'Anguilla',
		'ag'	=>	'Antigua - Barbuda',
		'ar'	=>	'Argentina',
		'am'	=>	'Armenia',
		'aw'	=>	'Aruba',
		'au'	=>	'Australia',
		'az'	=>	'Azerbaijan',
		'bs'	=>	'Bahamas',
		'bh'	=>	'Bahrain',
		'bd'	=>	'Bangladesh',
		'bb'	=>	'Barbados',
		'by'	=>	'Belarus',
		'be'	=>	'Belgium',
		'bz'	=>	'Belize',
		'bj'	=>	'Benin',
		'bm'	=>	'Bermuda',
		'bt'	=>	'Bhutan',
		'bo'	=>	'Bolivia',
		'ba'	=>	'Bosnia',
		'bw'	=>	'Botswana',
		'br'	=>	'Brazil',
		'bn'	=>	'Brunei',
		'bg'	=>	'Bulgaria',
		'bf'	=>	'Burkina Faso',
		'bi'	=>	'Burundi',
		'kh'	=>	'Cambodia',
		'cm'	=>	'Cameroon',
		'ca'	=>	'Canada',
		'cv'	=>	'Cape Verde',
		'cf'	=>	'Central Africa Republic',
		'td'	=>	'Chad',
		'cl'	=>	'Chile',
		'ci'	=>	'Christmas Island',
		'cn'	=>	'China',
		'co'	=>	'Colombia',
		'cg'	=>	'Congo',
		'ck'	=>	'Cook Islands',
		'cr'	=>	'Costa Rica',
		'ct'	=>	'Cote D\'Ivoire',
		'hr'	=>	'Croatia',
		'cu'	=>	'Cuba',
		'cb'	=>	'Curacao',
		'cy'	=>	'Cyprus',
		'cz'	=>	'Czech Republic',
		'dk'	=>	'Denmark',
		'dj'	=>	'Djibouti',
		'dm'	=>	'Dominica',
		'do'	=>	'Dominican Republic',
		'ec'	=>	'Ecuador',
		'eg'	=>	'Egypt',
		'sv'	=>	'El Salvador',
		'gq'	=>	'Equatorial Guinea',
		'er'	=>	'Eritrea',
		'ee'	=>	'Estonia',
		'et'	=>	'Ethiopia',
		'fo'	=>	'Faroe Islands',
		'fj'	=>	'Fiji',
		'fi'	=>	'Finland',
		'fr'	=>	'France',
		'ge'	=>	'Georgia',
		'de'	=>	'Germany',
		'gh'	=>	'Ghana',
		'gb'	=>	'Great Britain',
		'gr'	=>	'Greece',
		'gl'	=>	'Greenland',
		'gd'	=>	'Grenada',
		'gp'	=>	'Guadaloupe',
		'gu'	=>	'Guam',
		'gt'	=>	'Guatemala',
		'gn'	=>	'Guinea',
		'gy'	=>	'Guyana',
		'ht'	=>	'Haiti',
		'hn'	=>	'Honduras',
		'hk'	=>	'Hong Kong',
		'hu'	=>	'Hungary',
		'is'	=>	'Iceland',
		'in'	=>	'India',
		'id'	=>	'Indonesia',
		'ia'	=>	'Iran',
		'iq'	=>	'Iraq',
		'ir'	=>	'Ireland',
		'il'	=>	'Israel',
		'it'	=>	'Italy',
		'jm'	=>	'Jamaica',
		'jp'	=>	'Japan',
		'jo'	=>	'Jordan',
		'kz'	=>	'Kazakhstan',
		'ke'	=>	'Kenya',
		'ki'	=>	'Kiribati',
		'kr'	=>	'Korea',
		'kw'	=>	'Kuwait',
		'kg'	=>	'Kyrgyzstan',
		'la'	=>	'Laos',
		'lv'	=>	'Latvia',
		'lb'	=>	'Lebanon',
		'lr'	=>	'Liberia',
		'li'	=>	'Liechtenstein',
		'lu'	=>	'Luxembourg',
		'ly'	=>	'Lybia',
		'mk'	=>	'Macedonia',
		'my'	=>	'Malaysia',
		'ml'	=>	'Mali',
		'mt'	=>	'Malta',
		'mx'	=>	'Mexico',
		'md'	=>	'Moldova',
		'mn'	=>	'Mongolia',
		'ma'	=>	'Morocco',
		'mz'	=>	'Mozambique',
		'mn'	=>	'Myanmar',
		'na'	=>	'Namibia',
		'nu'	=>	'Nauru',
		'np'	=>	'Nepal',
		'nl'	=>	'Netherlands',
		'nz'	=>	'New Zealand',
		'ni'	=>	'Nicaragua',
		'ne'	=>	'Niger',
		'ng'	=>	'Nigeria',
		'no'	=>	'Norway',
		'om'	=>	'Oman',
		'pk'	=>	'Pakistan',
		'pa'	=>	'Panama',
		'py'	=>	'Paraguay',
		'pe'	=>	'Peru',
		'ph'	=>	'Philippines',
		'pl'	=>	'Poland',
		'pt'	=>	'Portugal',
		'pr'	=>	'Puerto Rico',
		'qa'	=>	'Qatar',
		'ro'	=>	'Romania',
		'ru'	=>	'Russia',
		'rw'	=>	'Rwanda',
		'lc'	=>	'St Lucia',
		'sm'	=>	'San Marino',
		'sa'	=>	'Saudi Arabia',
		'sn'	=>	'Senegal',
		'ss'	=>	'Serbia - Montenegro',
		'sg'	=>	'Singapore',
		'sk'	=>	'Slovakia',
		'si'	=>	'Slovenia',
		'so'	=>	'Somalia',
		'za'	=>	'South Africa',
		'es'	=>	'Spain',
		'sd'	=>	'Sudan',
		'sr'	=>	'Suriname',
		'se'	=>	'Sweden',
		'ch'	=>	'Switzerland',
		'sy'	=>	'Syria',
		'tw'	=>	'Taiwan',
		'th'	=>	'Thailand',
		'tg'	=>	'Togo',
		'tk'	=>	'Tokelau',
		'to'	=>	'Tonga',
		'tt'	=>	'Tridinidad Tobago',
		'tn'	=>	'Tunisia',
		'tr'	=>	'Turkey',
		'ua'	=>	'Ukraine',
		'ae'	=>	'United Arab Emirate',
		'gb'	=>	'United Kingdom',
		'us'	=>	'United States',
		'uy'	=>	'Uruguay',
		'va'	=>	'Vatican',
		've'	=>	'Venezuela',
		'vn'	=>	'Vietnam',
		'za'	=>	'Zimbawe'
	);
	
	// Return the dropdown
	return form_dropdown($field_name, $countries, $country_selected);
}

?>