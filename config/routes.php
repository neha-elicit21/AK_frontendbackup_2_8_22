<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//admin routing
$route['manage-professor-Edit/(:num)'] = 'admin/manage_professor_Edit/$1';
$route['admin/manage-professor'] = 'admin/manage_professor';
$route['admin/add-users'] = 'admin/add_users';
// Professor controllers function
$route['dashboard']='Professor/dashboard/';
$route['professor/packages/(:any)']='Professor/Multiple_Packages/$1';
$route['professor/student/(:any)']='Professor/StudentProfile/$1';
$route['professor/mytask/(:any)']='Professor/MyTaskStudent/$1';
$route['professor/edit-profile/(:any)']='Professor/Edit_Profile/$1';	
$route['Myprofile']='Professor/Myprofile/';
$route['Account']='Professor/Account/';
$route['My-Schedule']='Professor/My_Schedule/';
$route['My-Student']='Professor/My_Student/';
$route['Change-Password']='Professor/Change_Password/';
// admin login 
$route['forgot-password']='admin/forgot_password';
// $route['reset-password']='admin/reset_password';
//front pages
$route['application-preparation']='home/application_preparation';
$route['bs-bsc']='home/bs_bsc';
$route['ms-msc']='home/ms_msc';
$route['mba-emba']='home/mba_emba';
$route['phd']='home/phd';
$route['career-and-school-selection']='home/career_and_school_selection';
$route['test-preparation']='home/test_preparation';
$route['interview-preparation']='home/interview_preparation';
$route['about-us']='home/about_us';
$route['our-students/(:any)']='home/our_students';
$route['contact']='home/contact';
$route['work-with-us']='home/work_with_us';
$route['olga-pischevskaya']='home/olga_pischevskaya';
$route['renaud-de-peretti']='home/renaud_de_peretti';
$route['wissem-a']='home/wissem_a';
$route['yann-hoarau']='home/yann_hoarau';
$route['camille-de-peretti']='home/camille_de_peretti';
$route['johanna-loembet']='home/johanna_loembet';
$route['know-what-you-want']='home/know_what_you_want';
$route['book']='home/book';
$route['our-experts']='home/our_experts';
$route['our-students']='home/our_students';
$route['profile/(:any)']='home/profile';
$route['our-services']='home/our_services';
$route['news']='home/news';
$route['free-consultation-booking']='home/free_consultation_booking';
$route['thank-you']='home/thank_you_page';
$route['work_with_us']='home/work_with_us';
$route['free-consultation-booking-registartion']='home/free_consultation_booking_registartion';
//stripe-payment-gateway---------------------------------
$route['make-stripe-payment'] = "Home/paymentView";
$route['handleStripePayment']['post'] = "Home/handlePayment";