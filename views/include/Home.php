<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('common_model');
        $this->load->library('session');
    }

    // public function myPriceSession()
    // {
    // 	//  $priceData= $_POST['nameData'];
    // 	echo $_SESSION['priceData'] = $_POST['nameData'];

    // 	exit();
    // }
    public function index()
    {
        $this->load->view('include/front_header');
        $this->load->view('front/index');
        $this->load->view('include/front_footer');
    }
    public function application_preparation()
    {
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['bsc_our_experts'] = $this->common_model->our_experts(1);
        $result['msc_our_experts'] = $this->common_model->our_experts(2);
        $result['mba_our_experts'] = $this->common_model->our_experts(3);
        $result['phd_our_experts'] = $this->common_model->our_experts(4);
        $this->load->view('include/front_header');
        $this->load->view('front/application-preparation/index', $result);
        $this->load->view('include/front_footer');
    }
    //public function bs_bsc()
    // {
    // 	$this->load->view('include/front_header_2');
    // 	$this->load->view('front/application-preparation/bs_bsc');
    // 	$this->load->view('include/front_footer');
    // }
    // public function ms_msc()
    // {
    // 	$this->load->view('include/front_header_2');
    // 	$this->load->view('front/application-preparation/ms_msc');
    // 	$this->load->view('include/front_footer');
    // }
    // public function mba_emba()
    // {
    // 	$this->load->view('include/front_header_2');
    // 	$this->load->view('front/application-preparation/mba_emba');
    // 	$this->load->view('include/front_footer');
    // }
    // public function phd()
    // {
    // 	$this->load->view('include/front_header_2');
    // 	$this->load->view('front/application-preparation/phd');
    // 	$this->load->view('include/front_footer');
    // }

    public function career_and_school_selection()
    {
        $result['Our_Career_Experts'] = $this->common_model->our_experts(6);
        $result['data'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 1]);
        $this->load->view('include/front_header');
        $this->load->view('front/career-and-school-selection/index', $result);
        $this->load->view('include/front_footer');
    }

    public function test_preparation()
    {
        $this->load->view('include/front_header');
        $this->load->view('front/test-preparation/index');
        $this->load->view('include/front_footer');
    }
    public function interview_preparation()
    {
        $result['Our_Communication_Experts'] = $this->common_model->our_experts(5);
        $result['data'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 2]);
        $this->load->view('include/front_header');
        $this->load->view('front/interview_preparation', $result);
        $this->load->view('include/front_footer');
    }
    public function about_us()
    {
        $this->load->view('include/front_header');
        $this->load->view('front/about-us/index');
        $this->load->view('include/front_footer');
    }
    public function our_students()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/about-us/our-students/index');
        $this->load->view('include/front_footer');
    }

    //    public function renaud_de_peretti()
    // 	{
    // 		$this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/renaud_de_peretti');
    // 		$this->load->view('include/front_footer');
    // 	}

    // 	public function wissem_a()
    // 	{
    // 		$this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/wissem_a');
    // 		$this->load->view('include/front_footer');
    // 	}

    // 	public function yann_hoarau()
    // 	{
    // 		$this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/yann_hoarau');
    // 		$this->load->view('include/front_footer');
    // 	}

    //    public function camille_de_peretti()
    //    {
    //         $this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/camille_de_peretti');
    // 		$this->load->view('include/front_footer');
    //    }

    //     public function johanna_loembet()
    //    {
    //         $this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/johanna_loembet');
    // 		$this->load->view('include/front_footer');
    //    }

    //     public function olga_pischevskaya()
    //    {
    //         $this->load->view('include/front_header_2');
    // 		$this->load->view('front/about-us/our-students/olga_pischevskaya');
    // 		$this->load->view('include/front_footer');
    //    }
    public function contact()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/contact/index');
        $this->load->view('include/front_footer');
    }

    public function work_with_us()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/work_with_us');
        $this->load->view('include/front_footer');
    }

    public function know_what_you_want()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/contact/know_what_you_want');
        $this->load->view('include/front_footer');
    }

    public function book()
    {
        $result['data'] = $this->common_model->get_all_data('package');
        $this->load->view('front/book/index', $result);
    }
    function our_experts()
    {
        $result['data'] = $this->common_model->View_All('users', 2);
        $this->load->view('include/front_header');
        $this->load->view('front/our-experts/index', $result);
        $this->load->view('include/front_footer');
    }
    function profile()
    {
        $id = $this->uri->segment(2);
        $result['data'] = $this->common_model->get_single_row('users', $id);
        $this->load->view('include/front_header');
        $this->load->view('front/our-experts/profile', $result);
        $this->load->view('include/front_footer');
    }
    function our_services()
    {
        $this->load->view('include/front_header');
        $this->load->view('front/our_services');
        $this->load->view('include/front_footer');
    }
    function news()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/news/news');
        $this->load->view('include/front_footer');
    }
    function career_and_school_selection_booking()
    {
        $id = $this->uri->segment(3);
        $result['our_packages_name'] = $this->common_model->getSingleRow("our_packages", ['our_packages_id' => $id]);
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['professor'] = $this->common_model->our_experts(6);
        $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");
        $this->load->view('front/booking/career_and_school_selection_booking', $result);
    }
    function application_preparation_booking()
    {
        $id = $this->uri->segment(3);
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['professor'] = $this->common_model->our_experts($id);
        $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");
        $this->load->view('front/booking/application_preparation_booking', $result);
    }
    function interview_preparation_booking()
    {
        $id = $this->uri->segment(3);
        $result['our_packages_name'] = $this->common_model->getSingleRow("our_packages", ['our_packages_id' => $id]);
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['professor'] = $this->common_model->our_experts(5);
        $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");
        $this->load->view('front/booking/interview_preparation_booking', $result);
    }
    public function free_consultation_booking()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/booking/free-consultation-booking');
        $this->load->view('include/front_footer');
    }

	public function free_consultation_booking_registartion()
    {
      
	   $this->form_validation->set_rules('fcb_last_name', 'last name', 'required');
	   $this->form_validation->set_rules('fcb_first_name', 'first name', 'required');
	   $this->form_validation->set_rules('fcb_country_of_residence', 'country of residence', 'required');
	   $this->form_validation->set_rules('fcb_phone_number', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
	   $this->form_validation->set_rules('fcb_current_school_university', 'current school or university', 'required');
	   $this->form_validation->set_rules('fcb_current_GPA', 'current GPA', 'required');
	   $this->form_validation->set_rules('fcb_current_major', 'current major', 'required');
	   $this->form_validation->set_rules('fcb_consider_degree', 'Considered degree', 'required');
	   $this->form_validation->set_rules('fcb_intended_major', 'Intended major', 'required');
	   $this->form_validation->set_rules('fcb_services[]', 'Services', 'required');
	   if ($this->form_validation->run() == false) {
		$this->session->set_flashdata('error_message', 'Something went wrong Please try again !!!');
		$this->load->view('include/front_header');
		$this->load->view('front/booking/free-consultation-booking');
		$this->load->view('include/front_footer');
	} else {
				// print_r($_POST);
				//  die();
				$free_consultation_booking_data = [
					'fcb_last_name' => $this->input->post('fcb_last_name'),
					'fcb_first_name' => $this->input->post('fcb_first_name'),
					'fcb_country_of_residence' => $this->input->post('fcb_country_of_residence'),
					'fcb_phone_number' => $this->input->post('fcb_phone_number'),
					'fcb_current_school_university' => $this->input->post('fcb_current_school_university'),
					'fcb_current_GPA' => $this->input->post('fcb_current_GPA'),
					'fcb_current_major' => $this->input->post('fcb_current_major'),
					'fcb_consider_school' => implode('_', $this->input->post('fcb_consider_school')),
					'fcb_consider_degree' => $this->input->post('fcb_consider_degree'),
					'fcb_intended_major' => $this->input->post('fcb_intended_major'),
					'fcb_services' => implode('_', $this->input->post('fcb_services')),
					'fcb_day' => implode('_', $this->input->post('fcb_day')),
					'fcb_time' => implode('_', $this->input->post('fcb_time'))
					
				];
				$res = $this->common_model->insert('free_consultation_booking', $free_consultation_booking_data);
				if($res){
					$this->session->set_flashdata('success_message', 'Thank you for choosing Admissions key !!!');
					redirect('free-consultation-booking');
				}
	     }
    }

    public function checkout()
    {
        //  print_r($_POST);
        //  die;
        $this->form_validation->set_rules('lname', 'last name', 'required');
        $this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
        $this->form_validation->set_rules('price_package_id', 'Package', 'required');
        $this->form_validation->set_rules('considered_degree', 'Considered degree', 'required');
        $this->form_validation->set_rules('considered_school[]', 'Considered School', 'required');
        $this->form_validation->set_rules('intended_major[]', 'intended major', 'required');
        $this->form_validation->set_rules('professor_id', 'Professor', 'required');
        $this->form_validation->set_rules('package_utc', 'UTC', 'required');
        $this->form_validation->set_rules('package_startDate', 'Start Date', 'required');
        $this->form_validation->set_rules('package_startTime', 'Start Time', 'required');
        $this->form_validation->set_rules('package_endTime', 'End Time', 'required');
        $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');
        $this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        $this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
        $this->form_validation->set_rules('current_major', 'Current Major', 'required');
        $this->form_validation->set_rules('card_num', 'Card number', 'required');
        $this->form_validation->set_rules('exp_month', 'Expire month', 'required');
        $this->form_validation->set_rules('exp_year', 'Expire Year', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('installment', 'Installment', 'required');
        $this->form_validation->set_rules('post_code', 'Post code', 'required');
        $this->form_validation->set_rules('voucher_code', 'Voucher code', 'required');
        $this->form_validation->set_rules('acceptTC', 'Accept term and Condition', 'required');
        if ($this->form_validation->run() == false) {
            $result['data'] = $this->common_model->fetch_all_data("our_packages");
            $this->load->view('include/front_header');
            $this->load->view('front/career-and-school-selection/index', $result);
            $this->load->view('include/front_footer');
        } else {
            if (empty($_POST["build_package_id"])) {
                $build_package_id = null;
            } else {
                $build_package_id = ['build_package_id' => implode('_', $this->input->post('build_package_id'))];
            }
            //  print_r($_POST);
            // die();
            $booking_data = [
                'Considered_Degree' => $this->input->post('considered_degree'),
                'Considered_School' => implode('_', $this->input->post('considered_school')),
                'Intended_Major' => implode('_', $this->input->post('intended_major')),
                'price_package_id' => $this->input->post('price_package_id'),
                'Degree' => $this->input->post('price_package_id_val'),
                'build_package_id' => $build_package_id,
                'professor_id' => $this->input->post('professor_id'),
                'package_utc' => $this->input->post('package_utc'),
                'package_startTime' => $this->input->post('package_startTime'),
                'package_endTime' => $this->input->post('package_endTime'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'last_name' => $this->input->post('lname'),
                'name' => $this->input->post('fname'),
                'country_of_residence' => $this->input->post('country_of_residence'),
                'mobile' => $this->input->post('phone_no'),
                'University' => $this->input->post('current_school_university'),
                'Current_GPA' => $this->input->post('current_gpa'),
                'Current_Major' => $this->input->post('current_major'),
                'user_type' => 3,
            ];
            $res = $this->common_model->insert('users', $booking_data);
            if ($res == true) {
                $user_pay_id = $this->db->insert_id();

                if (!empty($_POST['stripeToken'])) {
                    //get token, card and user info from the form
                    $region = $_POST['region'];
                    $installment = $_POST['installment'];
                    $post_code = $_POST['post_code'];
                    $voucher_code = $_POST['voucher_code'];
                    $token = $_POST['stripeToken'];
                    $name = $_POST['card_name'];
                    $email = $_POST['email'];
                    $card_num = $_POST['card_num'];
                    $card_cvc = $_POST['cvv'];
                    $card_exp_month = $_POST['exp_month'];
                    $card_exp_year = $_POST['exp_year'];

                    //include Stripe PHP library
                    require_once APPPATH . "third_party/stripe/init.php";

                    //set api key
                    $stripe = [
                        "secret_key" => "sk_test_2LnalWOC7Y1k4Ih3LVJ7w6Jh00i9OT7Fh8",
                        "publishable_key" => "pk_test_GW5puzCJ2T4K0bAyLthXEgH600ESA2Bcxj",
                    ];

                    \Stripe\Stripe::setApiKey($stripe['secret_key']);

                    //add customer to stripe
                    $customer = \Stripe\Customer::create([
                        'email' => $email,
                        'source' => $token,
                    ]);

                    //item information
                    $itemName = $_POST['itemName'];
                    $itemNumber = "PS123456";
                    $itemPrice = $_POST['itemPrice'];
                    $currency = "usd";
                    $unique_id = time() . mt_rand() . $user_pay_id;
                    $orderID = "AK" . $unique_id;

                    //charge a credit or a debit card
                    $charge = \Stripe\Charge::create([
                        'customer' => $customer->id,
                        'amount' => $itemPrice,
                        'currency' => $currency,
                        'description' => $itemNumber,
                        'metadata' => [
                            'item_id' => $itemNumber,
                        ],
                    ]);

                    //retrieve charge details
                    $chargeJson = $charge->jsonSerialize();

                    //check whether the charge is successful
                    if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
                        //order details
                        $amount = $chargeJson['amount'];
                        $balance_transaction = $chargeJson['balance_transaction'];
                        $currency = $chargeJson['currency'];
                        $status = $chargeJson['status'];
                        $date = date("Y-m-d H:i:s");

                        //insert tansaction data into the database
                        $dataDB = [
                            'name' => $name,
                            'email' => $email,
                            'card_num' => $card_num,
                            'card_cvc' => $card_cvc,
                            'card_exp_month' => $card_exp_month,
                            'card_exp_year' => $card_exp_year,
                            'item_name' => $itemName,
                            'item_number' => $itemNumber,
                            'item_price' => $itemPrice,
                            'item_price_currency' => $currency,
                            'paid_amount' => $amount,
                            'paid_amount_currency' => $currency,
                            'txn_id' => $balance_transaction,
                            'payment_status' => $status,
                            'created' => $date,
                            'modified' => $date,
                            'region' => $region,
                            'installment' => $installment,
                            'post_code' => $post_code,
                            'voucher_code' => $voucher_code,
                            'user_pay_id' => $user_pay_id,
                            'orderID' => $orderID,
                        ];

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();
                                $this->load->view('front/stripe/payment_success', $data);
                                // redirect('Welcome/payment_success','refresh');
                            } else {
                                echo "Transaction has been failed";
                            }
                        } else {
                            echo "not inserted. Transaction has been failed";
                        }
                    } else {
                        echo "Invalid Token";
                        $statusMsg = "";
                    }
                }
            }
        }
    }

    public function paymentView()
    {
        $this->load->view('front/stripe/product_form');
    }
    public function check()
    {
        //check whether stripe token is not empty
        if (!empty($_POST['stripeToken'])) {
            //get token, card and user info from the form
            $token = $_POST['stripeToken'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $card_num = $_POST['card_num'];
            $card_cvc = $_POST['cvc'];
            $card_exp_month = $_POST['exp_month'];
            $card_exp_year = $_POST['exp_year'];

            //include Stripe PHP library
            require_once APPPATH . "third_party/stripe/init.php";

            //set api key
            $stripe = [
                "secret_key" => "sk_test_2LnalWOC7Y1k4Ih3LVJ7w6Jh00i9OT7Fh8",
                "publishable_key" => "pk_test_GW5puzCJ2T4K0bAyLthXEgH600ESA2Bcxj",
            ];

            \Stripe\Stripe::setApiKey($stripe['secret_key']);

            //add customer to stripe
            $customer = \Stripe\Customer::create([
                'email' => $email,
                'source' => $token,
            ]);

            //item information
            $itemName = "Stripe Donation";
            $itemNumber = "PS123456";
            $itemPrice = 50;
            $currency = "usd";
            $orderID = "SKA92712382139";

            //charge a credit or a debit card
            $charge = \Stripe\Charge::create([
                'customer' => $customer->id,
                'amount' => $itemPrice,
                'currency' => $currency,
                'description' => $itemNumber,
                'metadata' => [
                    'item_id' => $itemNumber,
                ],
            ]);

            //retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            //check whether the charge is successful
            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
                //order details
                $amount = $chargeJson['amount'];
                $balance_transaction = $chargeJson['balance_transaction'];
                $currency = $chargeJson['currency'];
                $status = $chargeJson['status'];
                $date = date("Y-m-d H:i:s");

                //insert tansaction data into the database
                $dataDB = [
                    'name' => $name,
                    'email' => $email,
                    'card_num' => $card_num,
                    'card_cvc' => $card_cvc,
                    'card_exp_month' => $card_exp_month,
                    'card_exp_year' => $card_exp_year,
                    'item_name' => $itemName,
                    'item_number' => $itemNumber,
                    'item_price' => $itemPrice,
                    'item_price_currency' => $currency,
                    'paid_amount' => $amount,
                    'paid_amount_currency' => $currency,
                    'txn_id' => $balance_transaction,
                    'payment_status' => $status,
                    'created' => $date,
                    'modified' => $date,
                ];

                if ($this->db->insert('orders', $dataDB)) {
                    //  print_r($this->db->insert_id());
                    //  die;
                    if ($this->db->insert_id() && $status == 'succeeded') {
                        $data['insertID'] = $this->db->insert_id();
                        $this->load->view('front/stripe/payment_success', $data);
                        // redirect('Welcome/payment_success','refresh');
                    } else {
                        echo "Transaction has been failed";
                    }
                } else {
                    echo "not inserted. Transaction has been failed";
                }
            } else {
                echo "Invalid Token";
                $statusMsg = "";
            }
        }
    }

    public function payment_success()
    {
        $this->load->view('front/stripe/payment_success');
    }

    public function payment_error()
    {
        $this->load->view('front/stripe/payment_error');
    }

    public function help()
    {
        $this->load->view('front/stripe/help');
    }
    public function Timezones()
    {
        echo json_encode(DateTimeZone::listIdentifiers());
    }
}
