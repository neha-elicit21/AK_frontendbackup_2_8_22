<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('common_model');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('email');
        $this->load->library('upload');
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
        $result['package_data'] = $this->common_model->fetch_all_data("package");
        //$result['data'] = $this->common_model->fetch_all_data("our_packages");
      
       // $result['data'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 3]);
        $result['bsc_our_experts'] = $this->common_model->our_experts(9);
        $result['msc_our_experts'] = $this->common_model->our_experts(10);
        $result['mba_our_experts'] = $this->common_model->our_experts(11);
        $result['phd_our_experts'] = $this->common_model->our_experts(12);
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
    //
    function test_preparation_booking()
    {
         $user_id=(isset($this->session->userdata['logged_in']['id']))?($this->session->userdata['logged_in']['id']):"";
         if(isset($user_id) && !empty($user_id)){
            $result['user_data']=$this->common_model->get_single_row('users',$user_id);
         }
        $id = $this->uri->segment(3);
        $result['profeser_data']=get_all_by_id('users',array('id'=>$user_id));
        if(isset($result['profeser_data'])&& !empty($result['profeser_data'])){
             $result['get_packege']=$this->common_model->get_single_row_where('user_membership',array('user_id'=>$user_id,'user_professor_id'=>$result['profeser_data'][0]['professor_id'],'membership_our_packages_id'=>$id));
        }
        if(isset($result['get_packege']) && !empty($result['get_packege']))
        {
                $this->session->set_flashdata('error_message', 'This Packege is Already Booked !');
                redirect('career-and-school-selection');
        }
        $result['our_packages_name'] = $this->common_model->getSingleRow("our_packages", ['our_packages_id' => $id]);
        $result['data'] = $this->common_model->fetch_all_data_where("our_packages",['our_experts_title' => 'Test Preparation']);
        $result['Fixed_price_new'] = $this->common_model->getSingleRow("Fixed_price_packages", ['page_id' => $id]);
       // $result['Fixed_price'] = $this->common_model->fetch_all_data_where("our_packages",['our_package_type'=>1]);
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['professor'] = $this->common_model->our_experts(6);
        // $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        // $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");
      
        if(isset($user_id) && !empty($user_id)){
            $this->load->view('front/booking/auth_test_preparation_booking', $result);
        }else{
            $this->load->view('front/booking/test_preparation_booking', $result);
        }
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
          $this->form_validation->set_rules('last_name', 'last name', 'required');
          $this->form_validation->set_rules('first_name', 'first name', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[contact.email]');
          $this->form_validation->set_rules('phone_no', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
          $this->form_validation->set_rules('subject', 'subject', 'required');
          $this->form_validation->set_rules('message', 'message', 'required');
       if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error_message', 'Something went wrong Please try again !!!');
            $this->load->view('include/front_header_2');
            $this->load->view('front/contact/index');
            $this->load->view('include/front_footer');
        } else {

           $date = date("Y-m-d H:i:s");
           $contact_data = [
                    'lname' => $this->input->post('last_name'),
                    'fname' => $this->input->post('first_name'),
                    'subject' => $this->input->post('subject'),
                    'message' => $this->input->post('message'),
                    'email' => $this->input->post('email'),
                    'phone_no' => $this->input->post('phone_no'),
                    'created_at'=>$date,
                    
                ];
                $res = $this->common_model->insert('contact', $contact_data);
                if(!empty($res)){
                    $this->session->set_flashdata('success_message', '<div class="alert alert-success"> <h4><strong>Thank you </strong> for contacting us! We’ll get back to you shortly!!!</h4></div>');
                    redirect('contact');
                }

           }
      
    }
  /*  public function work_with_us()
    {
        $this->load->view('include/front_header_2');
        $this->load->view('front/work_with_us');
        $this->load->view('include/front_footer');
    }*/
     public function work_with_us()
    {
          $this->form_validation->set_rules('fullname', 'Full name', 'required');
          $this->form_validation->set_rules('contact_info', 'Contact info', 'required');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[work_with_us.email]');
          $this->form_validation->set_rules('phone_no', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
          $this->form_validation->set_rules('country', 'country', 'required');
          $this->form_validation->set_rules('area_of_expertise', 'area of expertise', 'required');
          $this->form_validation->set_rules('year_of_experience', 'years of experience', 'required');
          $this->form_validation->set_rules('message', 'message', 'required');
          $this->form_validation->set_rules('experience_in_ak', 'experience in AK', 'required');
          //$this->form_validation->set_rules('resume', 'resume', 'required');
           if (empty($_FILES['resume']['name']))
            {
                $this->form_validation->set_rules('resume', 'Resume', 'required');
            }
           $this->form_validation->set_rules('experience_in_ak', 'experience', 'required');

       if ($this->form_validation->run() == false) {
        $this->load->view('include/front_header_2');
        $this->load->view('front/work_with_us');
        $this->load->view('include/front_footer');
        }else{ 
          
           if(!empty($_FILES['resume']['name'])){
          
             // Set preference

              $config['upload_path'] = './assets/resume/';
          
              $config['allowed_types'] = 'pdf|docx|odt|doc';
          
              $config['max_size'] = '100000';
          
              $config['file_name'] = $_FILES['resume']['name'];


              //Load upload library and initialize configuration

              $this->load->library('upload',$config);

              $this->upload->initialize($config);

             // File upload
    
             if($this->upload->do_upload('resume')){

               // Get data about the file

               $uploadData = $this->upload->data();
              $resume= $uploadData['file_name'];
             
             }else{
               echo $this->upload->display_errors();exit;
             }

            }

               $date = date("Y-m-d H:i:s");
               $work_with_us_data = [
                    'full_name' => $this->input->post('fullname'),
                    'contact_info' => $this->input->post('contact_info'),
                    'phone_no' => $this->input->post('phone_no'),
                    'country' => $this->input->post('country'),
                    'email' => $this->input->post('email'),
                    'area_of_expertise' => $this->input->post('area_of_expertise'),
                    'year_of_experience' => $this->input->post('year_of_experience'),
                    'message' => $this->input->post('message'),
                    'experience_in_ak' => $this->input->post('experience_in_ak'),
                    'resume' => $resume,
                    'phone_no' => $this->input->post('phone_no'),
                    'created_at'=>$date,
                    
                ];
                $res = $this->common_model->insert('work_with_us', $work_with_us_data);
                if(!empty($res)){
                    $this->session->set_flashdata('success_message', '<div class="alert alert-success"> <strong>Thank you </strong> for contacting us! We’ll get back to you shortly!!!</div>');
                    redirect('work_with_us');
                }

        }
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
         $user_id=(isset($this->session->userdata['logged_in']['id']))?($this->session->userdata['logged_in']['id']):"";
         if(isset($user_id) && !empty($user_id)){
            $result['user_data']=$this->common_model->get_single_row('users',$user_id);
         }
                 
        $id = $this->uri->segment(3);
        $result['profeser_data']=get_all_by_id('users',array('id'=>$user_id));
        if(isset($result['profeser_data'])&& !empty($result['profeser_data'])){
             $result['get_packege']=$this->common_model->get_single_row_where('user_membership',array('user_id'=>$user_id,'user_professor_id'=>$result['profeser_data'][0]['professor_id'],'membership_our_packages_id'=>$id));
        }
       
        if(isset($result['get_packege']) && !empty($result['get_packege']))
        {
         $this->session->set_flashdata('error_message', 'This Packege is Already Booked !');
         redirect('career-and-school-selection');
        }
        $result['our_packages_name'] = $this->common_model->getSingleRow("our_packages", ['our_packages_id' => $id]);
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['Fixed_price_new'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 1]);
       // $result['Fixed_price'] = $this->common_model->fetch_all_data_where("our_packages",['our_package_type'=>1]);
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['professor'] = $this->common_model->our_experts(6);
        $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");

        if($user_id!==""){

         $this->load->view('front/booking/auth_career_and_school_selection_booking', $result);
        }else{
             $this->load->view('front/booking/career_and_school_selection_booking', $result);
        }
       
    }

      function booking()
    {
        $user_id=(isset($this->session->userdata['logged_in']['id']))?($this->session->userdata['logged_in']['id']):"";
        if(isset($user_id) && !empty($user_id)){
           $result['user_data']=$this->common_model->get_single_row('users',$user_id);
       }

       $id = 10;
       //$result['data'] = $this->common_model->fetch_all_data("package");

       $result['data'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 3]);
       $result['Fixed_price'] = $this->common_model->getSingleRow("Fixed_price_packages",['page_id' => $id]);
       $result['Fixed_price_new'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 3]);
    
       $result['professor'] = $this->common_model->our_experts($id);
       // $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
       $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");

       if($user_id!==""){
         $this->load->view('front/booking/auth_application_preparation_booking', $result);
       }else{
         $this->load->view('front/booking/application_preparation_booking', $result);
       }
    }
    function application_preparation_booking()
    {
        $user_id=(isset($this->session->userdata['logged_in']['id']))?($this->session->userdata['logged_in']['id']):"";
         if(isset($user_id) && !empty($user_id)){
            $result['user_data']=$this->common_model->get_single_row('users',$user_id);
        }

        $id = $this->uri->segment(3);
        //$result['data'] = $this->common_model->fetch_all_data("package");

        $result['data'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 3]);
        $result['Fixed_price'] = $this->common_model->getSingleRow("Fixed_price_packages",['page_id' => $id]);
        $result['Fixed_price_new'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 3]);
     
        $result['professor'] = $this->common_model->our_experts($id);
        // $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");

        if($user_id!==""){
          $this->load->view('front/booking/auth_application_preparation_booking', $result);
        }else{
          $this->load->view('front/booking/application_preparation_booking', $result);
        }
    }
    function interview_preparation_booking()
    {
         $user_id=(isset($this->session->userdata['logged_in']['id']))?($this->session->userdata['logged_in']['id']):"";
         if(isset($user_id) && !empty($user_id)){
            $result['user_data']=$this->common_model->get_single_row('users',$user_id);
         }
                 
        $id = $this->uri->segment(3);
        $result['profeser_data']=get_all_by_id('users',array('id'=>$user_id));
        if(isset($result['profeser_data'])&& !empty($result['profeser_data'])){
             $result['get_packege']=$this->common_model->get_single_row_where('user_membership',array('user_id'=>$user_id,'user_professor_id'=>$result['profeser_data'][0]['professor_id'],'membership_our_packages_id'=>$id));
        }
       
        if(isset($result['get_packege']) && !empty($result['get_packege']))
        {
                $this->session->set_flashdata('error_message', 'This Packege is Already Booked !');
                redirect('interview_preparation_booking');
        }
        $result['our_packages_name'] = $this->common_model->getSingleRow("our_packages", ['our_packages_id' => $id]);
        $result['data'] = $this->common_model->fetch_all_data("package");
        $result['our_packages'] = $this->common_model->fetch_all_data_where("our_packages",['our_package_type'=>2]);
        $result['Fixed_price'] = $this->common_model->fetch_all_data("Fixed_price_packages");
        $result['Fixed_price_new'] = $this->common_model->getSingleRow("our_packages", ['our_package_type' => 2]);
        $result['professor'] = $this->common_model->our_experts(5);
        $result['customize_package'] = $this->common_model->fetch_all_data("customize_package");
        $result['build_your_package'] = $this->common_model->fetch_all_data("build_your_package");

        if($user_id!==""){
          
         $this->load->view('front/booking/auth_checkout_interview_preparation', $result);
        }else{
             $this->load->view('front/booking/interview_preparation_booking', $result);
        }
       
    
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
       $this->form_validation->set_rules('fcb_email', 'Email', 'required|valid_email|is_unique[free_consultation_booking.fcb_email]');
	  // $this->form_validation->set_rules('fcb_country_of_residence', 'country of residence', 'required');
	   $this->form_validation->set_rules('fcb_phone_number', 'Phone Number ', 'required|regex_match[/^(\+\d{1,3}?)?\d{10}$/]'); //{10} for 10 digits number
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
                    'fcb_email' => $this->input->post('fcb_email'),
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
                $free_consultation_booking_id = $this->db->insert_id();
                //mail send 
                if(!empty($free_consultation_booking_id)){
                   $free_data=$this->common_model->get_single_row_where('free_consultation_booking',array('fcb_id'=>$free_consultation_booking_id));
                  // print_r($free_data);exit;
                       $fcb_first_name=$free_data['fcb_first_name'];
                       $fcb_last_name=$free_data['fcb_last_name'];
                       $fcb_email=$free_data['fcb_email'];
                       $fcb_country_of_residence=$free_data['fcb_country_of_residence'];
                       $fcb_current_school_university=$free_data['fcb_current_school_university'];
                       $fcb_current_GPA=$free_data['fcb_current_GPA'];
                       $fcb_current_major=$free_data['fcb_current_major'];
                       $fcb_intended_major=$free_data['fcb_intended_major'];
                       $fcb_consider_school=$free_data['fcb_consider_school'];
                       $fcb_phone_number=$free_data['fcb_phone_number'];
                       $fcb_services=$free_data['fcb_services'];
                       $fcb_day=$free_data['fcb_day'];
                       $fcb_time=$free_data['fcb_time'];
                       $sub="Admissions key Package booking";
                       $htmlss = $this->load->view('email-templates/free_consultation_booking_mail', array('fname'=>$fcb_first_name,'lname'=>$fcb_last_name,'email' => $fcb_email, 'country_of_residence' => $fcb_country_of_residence,'mobile'=>$fcb_phone_number,'University'=>$fcb_current_school_university,'fcb_current_GPA'=>$fcb_current_GPA,'fcb_current_major'=>$fcb_current_major,'fcb_intended_major'=>$fcb_intended_major,'Considered_School'=>$fcb_consider_school,'fcb_services'=>$fcb_services,'fcb_day'=>$fcb_day,'fcb_time'=>$fcb_time,'show_logo' => TRUE), TRUE);
                              
                                //send mail for  
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                       }

				if($res){
					$this->session->set_flashdata('success_message', 'Thank you for contacting us! We’ll get back to you shortly !!!');
                    redirect('thank-you');

					//redirect('free-consultation-booking');
				}
	     }
    }

      public function thank_you_page(){
        $this->load->view('include/front_header');
        $this->load->view('front/booking/thank_you_page');
        $this->load->view('include/front_footer');
    }


    public function checkout()
    {
            
        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
         //print_r($result['user_data']);
        }

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
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
       // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
        $this->form_validation->set_rules('card_num', 'Card number', 'required'); //callback_validateCreditcard_number['.$this->input->post('card_num').']valid_cc_number[visa,mastercard,]amex, unionpay, carteblanche, dinersclub, discover, interpayment, jcb, maestro, dankort, mir, troy, mastercard, visa, uatp, verve, cibc, rbc, tdtrust, scotia, bmoabm, hsbc
        $this->form_validation->set_rules('exp_month', 'Expire month', 'required');
        $this->form_validation->set_rules('exp_year', 'Expire Year', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('installment', 'Installment', 'required');
        $this->form_validation->set_rules('post_code', 'Post code', 'required');
        $this->form_validation->set_rules('voucher_code', 'Voucher code', 'required');
        $this->form_validation->set_rules('acceptTC', 'Accept term and Condition', 'required');
            // $this->session->set_userdata(array('considered_school'=>$this->input->post('considered_school[]'),'intended_major'=>$this->input->post('intended_major[]')));

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

              // echo $considered_school=implode(',',$this->input->post('considered_school[]'));
          
            $booking_data = [
                'Considered_Degree' => $this->input->post('considered_degree'),
                'Considered_School' => implode(',', $this->input->post('considered_school[]')),
                'Intended_Major' => implode(',', $this->input->post('intended_major[]')),
                'price_package_id' => $this->input->post('price_package_id'),
                'Degree' => $this->input->post('price_package_id_val'),
                'build_package_id' => $build_package_id,
                'professor_id' => $this->input->post('professor_id'),
                'package_utc' => $this->input->post('package_utc'),
                'package_startTime' => $this->input->post('package_startTime'),
                'package_endTime' => $this->input->post('package_endTime'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'last_name' => $this->input->post('lname'),
                'name' => $this->input->post('fname'),
                'country_of_residence' => $this->input->post('country_of_residence'),
                'mobile' => $this->input->post('phone_no'),
                'University' => $this->input->post('current_school_university'),  
                'Current_Major' => $this->input->post('current_major'),
                'Current_GPA' => $this->input->post('current_gpa'),
                'user_type' => 3,
                'is_status'=>1
            ];
         // print_r($booking_data);exit;

            $res = $this->common_model->insert('users', $booking_data);
            if ($res == true) {
                $user_pay_id = $this->db->insert_id();
                  if (isset($user_pay_id) && !empty($user_pay_id)) {

                          // weekly installmet payment
                        if($_POST['installment']=='Pay_in_4_installments'){
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                            $installment_fee = round($amount /4);  // 20% of the amount (one week)
                            $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                            $partial_payment=1;
                            
                        }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                            $installment_fee = round($amount /2);
                            $remaining_amount=$amount-$installment_fee;
                            $partial_payment=2;

                        }elseif($_POST['installment']=='full_payment'){

                            //$amount=round($this->input->post('our_packages_price'));
                            $installment_fee = round($_POST['itemPrice']);
                            $remaining_amount=0;
                            $partial_payment=2;
                        }
              
       
              
              
    
                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>$this->input->post('our_packages_price'),
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('price_package_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('our_packages_price')
            );
               
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
                   $itemPrice = $installment_fee;
                    //$itemPrice = round($_POST['itemPrice']);
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
                        //$amount = $chargeJson['amount'];
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];
                     

                        if ($this->db->insert('orders', $dataDB)) {
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                // $data = $this->db->insert_id();
                                $this->common_model->insert('user_membership', $user_membershipData);
                                $this->load->view('front/stripe/payment_success');

                                  /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));
                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                //$student_Considered_Degree=$student_data['Considered_Degree'];
                                if($student_data['Considered_Degree']==1){
                                        $student_Considered_Degree="BS/BSc";
                                    }elseif($student_data['Considered_Degree']==2){
                                      $student_Considered_Degree="MS/MSc";  
                                    }elseif($student_data['Considered_Degree']==3){
                                      $student_Considered_Degree="MBA/EMBA";    
                                    }elseif($student_data['Considered_Degree']==4){
                                      $student_Considered_Degree="PHD"; 
                                    }
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */
                                // redirect('front/stripe/payment_success');
                              
                          
                           
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
    } 
    /*@function for Test Pripration checkout */

    public function test_prepration_checkout(){

        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
         //print_r($result['user_data']);
        }

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
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
       // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
            $this->load->view('front/test-preparation/index', $result);
            $this->load->view('include/front_footer');
        } else {
            if (empty($_POST["build_package_id"])) {
                $build_package_id = null;
            } else {
                $build_package_id = ['build_package_id' => implode('_', $this->input->post('build_package_id'))];
            }

              // echo $considered_school=implode(',',$this->input->post('considered_school[]'));
          
            $booking_data = [
                'Considered_Degree' => $this->input->post('considered_degree'),
                'Considered_School' => implode(',', $this->input->post('considered_school[]')),
                'Intended_Major' => implode(',', $this->input->post('intended_major[]')),
                'price_package_id' => $this->input->post('price_package_id'),
                'Degree' => $this->input->post('price_package_id_val'),
                'build_package_id' => $build_package_id,
                'professor_id' => $this->input->post('professor_id'),
                'package_utc' => $this->input->post('package_utc'),
                'package_startTime' => $this->input->post('package_startTime'),
                'package_endTime' => $this->input->post('package_endTime'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'last_name' => $this->input->post('lname'),
                'name' => $this->input->post('fname'),
                'country_of_residence' => $this->input->post('country_of_residence'),
                'mobile' => $this->input->post('phone_no'),
                'University' => $this->input->post('current_school_university'),  
                'Current_Major' => $this->input->post('current_major'),
                'Current_GPA' => $this->input->post('current_gpa'),
                'user_type' => 3,
                'is_status'=>1
            ];
         

            $res = $this->common_model->insert('users', $booking_data);
            if ($res == true) {
                $user_pay_id = $this->db->insert_id();

                  if (isset($user_pay_id) && !empty($user_pay_id)) {

                          // weekly installmet payment
                        if($_POST['installment']=='Pay_in_4_installments'){
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                            $installment_fee = round($amount /4);  // 20% of the amount (one week)
                            $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                            $partial_payment=1;
                            
                        }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                            $installment_fee = round($amount /2);
                            $remaining_amount=$amount-$installment_fee;
                            $partial_payment=2;

                        }elseif($_POST['installment']=='full_payment'){

                            $amount=round($this->input->post('our_packages_price'));
                            $installment_fee = round($_POST['itemPrice']);
                            $remaining_amount=0;
                            //$remaining_amount=0;
                            $partial_payment=2;
                        }
              
      
                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>$this->input->post('our_packages_price'),
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('price_package_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('our_packages_price')
            );
               
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
                   $itemPrice = $installment_fee;
                   // $itemPrice = $_POST['itemPrice'];
                    $currency = "usd";
                    $unique_id = time() . mt_rand() . $user_pay_id;
                    $orderID = "AK" . $unique_id;
                    /* print_r($_POST); exit;*/
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
                        //$amount = $chargeJson['amount'];
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];
                     

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();
                                $this->common_model->insert('user_membership', $user_membershipData);
                                $this->load->view('front/stripe/payment_success', $data);

                        /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));

                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                $student_Considered_Degree=$package_data[0]['our_packages_name'];
                                 
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */
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
    

    }

    // Function for auth test Prepration checkout 
    public function auth_test_prepration_checkout(){


        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
         //print_r($result['user_data']);
        }
/*
        $this->form_validation->set_rules('lname', 'last name', 'required');
        $this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]');*/ //{10} for 10 digits number
        $this->form_validation->set_rules('price_package_id', 'Package', 'required');
        $this->form_validation->set_rules('considered_degree', 'Considered degree', 'required');
        $this->form_validation->set_rules('considered_school[]', 'Considered School', 'required');
        $this->form_validation->set_rules('intended_major[]', 'intended major', 'required');
        $this->form_validation->set_rules('professor_id', 'Professor', 'required');
        $this->form_validation->set_rules('package_utc', 'UTC', 'required');
        $this->form_validation->set_rules('package_startDate', 'Start Date', 'required');
        $this->form_validation->set_rules('package_startTime', 'Start Time', 'required');
        $this->form_validation->set_rules('package_endTime', 'End Time', 'required');
      //  $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
       // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
            $this->load->view('front/test-preparation/index', $result);
            $this->load->view('include/front_footer');
        } else {
            if (empty($_POST["build_package_id"])) {
                $build_package_id = null;
            } else {
                $build_package_id = ['build_package_id' => implode('_', $this->input->post('build_package_id'))];
            }

              // echo $considered_school=implode(',',$this->input->post('considered_school[]'));
         

           
            if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
                $user_pay_id = $_POST['user_id'];

                  if (isset($user_pay_id) && !empty($user_pay_id)) {

                          // weekly installmet payment
                        if($_POST['installment']=='Pay_in_4_installments'){
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                            $installment_fee = round($amount /4);  // 20% of the amount (one week)
                            $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                            $partial_payment=1;
                            
                        }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                            $amount=$this->input->post('our_packages_price');
                            //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                            $installment_fee = round($amount /2);
                            $remaining_amount=$amount-$installment_fee;
                            $partial_payment=2;

                        }elseif($_POST['installment']=='full_payment'){

                            $amount=round($this->input->post('our_packages_price'));
                            $installment_fee = round($_POST['itemPrice']);
                            $remaining_amount=0;
                            $partial_payment=2;
                        }
              

      
                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>$installment_fee,
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('price_package_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('our_packages_price')
            );
               
                if (!empty($_POST['stripeToken'])) {
                    
                    //get token, card and user info from the form
                    $region = $_POST['region'];
                    $installment = $_POST['installment'];
                    $post_code = $_POST['post_code'];
                    $voucher_code = $_POST['voucher_code'];
                    $token = $_POST['stripeToken'];
                    $name = $_POST['card_name'];
                    $email = isset($result['user_data']['email'])?($result['user_data']['email']):($_POST['email']);
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
                   $itemPrice = $installment_fee;
                   // $itemPrice = $_POST['itemPrice'];
                    $currency = "usd";
                    $unique_id = time() . mt_rand() . $user_pay_id;
                    $orderID = "AK" . $unique_id;
                    /* print_r($_POST); exit;*/
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
                        //$amount = $chargeJson['amount'];
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];
                     

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();
                                $this->common_model->insert('user_membership', $user_membershipData);
                                $this->load->view('front/stripe/payment_success', $data);

                              /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));
                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                //$student_Considered_Degree=$student_data['Considered_Degree'];
                                if($student_data['Considered_Degree']==1){
                                        $student_Considered_Degree="BS/BSc";
                                    }elseif($student_data['Considered_Degree']==2){
                                      $student_Considered_Degree="MS/MSc";  
                                    }elseif($student_data['Considered_Degree']==3){
                                      $student_Considered_Degree="MBA/EMBA";    
                                    }elseif($student_data['Considered_Degree']==4){
                                      $student_Considered_Degree="PHD"; 
                                    }
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */

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
    

    
    }

    /*Function for application prepration checkout*/

     public function application_checkout()
    {
        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
        }

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
       /* $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');*/
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
        // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
            $this->load->view('front/application-preparation/index', $result);
            $this->load->view('include/front_footer');
        } else {
            if (empty($_POST["build_package_id"])) {
                $build_package_id = null;
            } else {
                $build_package_id = ['build_package_id' => implode('_', $this->input->post('build_package_id'))];
            }

             $Considered_School=implode(',', $this->input->post('considered_school[]'));
             $intended_major=implode(',', $this->input->post('intended_major[]'));

            $booking_data = [
                'Considered_Degree' => $this->input->post('considered_degree'),
                'Considered_School' => $Considered_School,
                'Intended_Major' =>$intended_major,
                'price_package_id' => $this->input->post('packege_id'),
                'Degree' => $this->input->post('price_package_id_val'),
                'build_package_id' => $build_package_id,
                'professor_id' => $this->input->post('professor_id'),
                'package_utc' => $this->input->post('package_utc'),
                'package_startTime' => $this->input->post('package_startTime'),
                'package_endTime' => $this->input->post('package_endTime'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'last_name' => $this->input->post('lname'),
                'name' => $this->input->post('fname'),
                'country_of_residence' => $this->input->post('country_of_residence'),
                'mobile' => $this->input->post('phone_no'),
                'University' => $this->input->post('current_school_university'),  
                'Current_Major' =>$this->input->post('current_major'),
                'Current_GPA' => $this->input->post('current_gpa'),
                'user_type' => 3,
                'is_status'=>1
            ];

           

            $res = $this->common_model->insert('users', $booking_data);
            if ($res == true) {
                $user_pay_id = $this->db->insert_id();

                  if (isset($user_pay_id) && !empty($user_pay_id)) {
                   

                          // weekly installmet payment
                        if($_POST['installment']=='Pay_in_4_installments'){
                            $amount=$this->input->post('itemPrice');
                            //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                            $installment_fee = round($amount /4);  // 20% of the amount (one week)
                            $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                            $partial_payment=1;
                            
                        }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                            $amount=$this->input->post('itemPrice');
                            //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                            $installment_fee = round($amount /2);
                            $remaining_amount=$amount-$installment_fee;
                            $partial_payment=2;

                        }elseif($_POST['installment']=='full_payment'){

                            $amount=$this->input->post('itemPrice');
                           $installment_fee = round($_POST['itemPrice']);
                            $remaining_amount=0;
                            $partial_payment=2;
                        }
              
       
              
              
    
                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>$this->input->post('itemPrice'),
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('packege_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('itemPrice')
            );
               
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
                   // $itemPrice = $installment_fee;
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
                        //$amount = $chargeJson['amount'];
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('packege_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('itemPrice')
                        ];
                     

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();
                                $this->common_model->insert('user_membership', $user_membershipData);
                                $this->load->view('front/stripe/payment_success', $data);
                                // redirect('Welcome/payment_success','refresh');

                                /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('packege_id')));

                               //  print_r($professor_data);
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                               // $student_Considered_Degree=$student_data['Considered_Degree'];
                                $student_Considered_Degree=$package_data[0]['our_packages_name']; 

                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];
                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];

                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                               
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */

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
    }

/** function for auth application checkout**/

public function auth_application_checkout(){

        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
        }
    /*
        $this->form_validation->set_rules('lname', 'last name', 'required');
        $this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]');*/ //{10} for 10 digits number
        $this->form_validation->set_rules('price_package_id', 'Package', 'required');
        $this->form_validation->set_rules('considered_degree', 'Considered degree', 'required');
        $this->form_validation->set_rules('considered_school[]', 'Considered School', 'required');
        $this->form_validation->set_rules('intended_major[]', 'intended major', 'required');
        $this->form_validation->set_rules('professor_id', 'Professor', 'required');
        $this->form_validation->set_rules('package_utc', 'UTC', 'required');
        $this->form_validation->set_rules('package_startDate', 'Start Date', 'required');
        $this->form_validation->set_rules('package_startTime', 'Start Time', 'required');
        $this->form_validation->set_rules('package_endTime', 'End Time', 'required');
     /*   $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');*/
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
        // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
           /* $this->load->view('front/career-and-school-selection/index', $result);*/
           $this->load->view('front/application-preparation/index', $result);
            $this->load->view('include/front_footer');
        } else {
            if (empty($_POST["build_package_id"])) {
                $build_package_id = null;
            } else {
                $build_package_id = ['build_package_id' => implode('_', $this->input->post('build_package_id'))];
            }

            // echo $considered_school=implode(',',$this->input->post('considered_school[]'));
       

      
                $user_pay_id = ($_POST['user_id'])?($_POST['user_id']):('');

                  if (isset($user_pay_id) && !empty($user_pay_id)) {
                   

                          // weekly installmet payment
                        if($_POST['installment']=='Pay_in_4_installments'){
                            $amount=$this->input->post('itemPrice');
                            //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                            $installment_fee = round($amount /4);  // 20% of the amount (one week)
                            $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                            $partial_payment=1;
                            
                        }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                            $amount=$this->input->post('itemPrice');
                            //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                            $installment_fee = round($amount /2);
                            $remaining_amount=$amount-$installment_fee;
                            $partial_payment=2;

                        }elseif($_POST['installment']=='full_payment'){

                            $amount=round($this->input->post('itemPrice'));
                            $installment_fee = $amount;
                            $remaining_amount=0;
                            $partial_payment=2;
                        }
              
       
              
    
                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>round($this->input->post('itemPrice')),
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('packege_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('itemPrice')
            );
               
                if (!empty($_POST['stripeToken'])) {
                    //get token, card and user info from the form
                    $region = $_POST['region'];
                    $installment = $_POST['installment'];
                    $post_code = $_POST['post_code'];
                    $voucher_code = $_POST['voucher_code'];
                    $token = $_POST['stripeToken'];
                    $name = $_POST['card_name'];
                    $email = isset($result['user_data']['email'])?($result['user_data']['email']):($_POST['email']);
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
                   // $itemPrice = $installment_fee;
                    $itemPrice = round($_POST['itemPrice']);
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
                        //$amount = $chargeJson['amount'];
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('packege_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('itemPrice')
                        ];
                      

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();

                                $this->common_model->insert('user_membership', $user_membershipData);

                                $this->load->view('front/stripe/payment_success', $data);
                                // redirect('Welcome/payment_success','refresh');

                                  /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('packege_id')));

                               //  print_r($professor_data);
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                               // $student_Considered_Degree=$student_data['Considered_Degree'];
                                $student_Considered_Degree=$package_data[0]['our_packages_name']; 
                                
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];
                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];

                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                               
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */
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
/*end*/
   
 public function auth_checkout()
    {
        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
         //print_r($result['user_data']);
        }

       /* $this->form_validation->set_rules('lname', 'last name', 'required');
        $this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]')*/; //{10} for 10 digits number
        $this->form_validation->set_rules('price_package_id', 'Package', 'required');
        $this->form_validation->set_rules('considered_degree', 'Considered degree', 'required');
        $this->form_validation->set_rules('considered_school[]', 'Considered School', 'required');
        $this->form_validation->set_rules('intended_major[]', 'intended major', 'required');
        $this->form_validation->set_rules('professor_id', 'Professor', 'required');
        $this->form_validation->set_rules('package_utc', 'UTC', 'required');
        $this->form_validation->set_rules('package_startDate', 'Start Date', 'required');
 /*       $this->form_validation->set_rules('package_startTime', 'Start Time', 'required');
        $this->form_validation->set_rules('package_endTime', 'End Time', 'required');
        $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');*/
       // $this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
      //  $this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
       // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
       
            if (isset($result['user_data']['id']) && !empty($result['user_data']['id'])) {
                $user_pay_id = $result['user_data']['id'];
                // weekly installmet payment
                if($_POST['installment']=='Pay_in_4_installments'){
                    $amount=$this->input->post('our_packages_price');
                    $installment_fee = round($amount /4);  // 20% of the amount (one week)
                    $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                    $partial_payment=1;
                    
                }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                    $amount=$this->input->post('our_packages_price');
                    $installment_fee = round($amount /2);
                    $remaining_amount=$amount-$installment_fee;
                    $partial_payment=1;

                }elseif($_POST['installment']=='full_payment'){
                   $amount=round($this->input->post('our_packages_price'));
                    $installment_fee = $amount;
                    $remaining_amount=0;
                    $partial_payment=2;
                }

                       //store remainig ammount in order table and user_membership 
                    $user_membershipData= array(
                            'user_id' => $user_pay_id ,
                            'Considered_Degree_id'=>$this->input->post('considered_degree'),
                            'Pay_Amount'=>$installment_fee,
                            'user_professor_id'=>$this->input->post('professor_id'),
                            'membership_our_packages_id'=>$this->input->post('price_package_id'),
                            'payment_status'=>1,
                            'progress_status'=>2,
                            'duration'=>30,
                            'status'=>1,
                            'remaining_amount'=>$remaining_amount,
                            'actual_amount'=>$this->input->post('our_packages_price'));

                       $get_packege=$this->common_model->get_single_row_where('user_membership',array('user_id'=>$user_pay_id,'user_pay_id','user_professor_id'=>$this->input->post('professor_id'),'membership_our_packages_id'=>$this->input->post('price_package_id')));
                      //  packege selected 
                        if(isset($get_packege) && !empty($get_packege))
                        {
                          $this->session->set_flashdata('error_message', 'This Packege is Already Booked !');
                             redirect('career-and-school-selection');
                        }
           
                if (!empty($_POST['stripeToken'])) {
                    //get token, card and user info from the form
                    $region = $_POST['region'];
                    $installment = $_POST['installment'];
                    $post_code = $_POST['post_code'];
                    $voucher_code = $_POST['voucher_code'];
                    $token = $_POST['stripeToken'];
                    $name = $_POST['card_name'];
                    $email = isset($result['user_data']['email'])?($result['user_data']['email']):($_POST['email']);
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
                    $itemPrice = $installment_fee;
                    $currency = "usd";
                    $unique_id = time() . mt_rand() . $user_pay_id;
                    $orderID = "AK" . $unique_id;

                    //charge a credit or a debit card
                    $charge = \Stripe\Charge::create([
                        'customer' => $customer->id,
                        'amount' => $installment_fee,
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
                        //$amount = $chargeJson['amount'];
                        $amount = $installment_fee;
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();


                                $this->common_model->insert('user_membership', $user_membershipData);

                                $this->load->view('front/stripe/payment_success', $data);
                                // redirect('Welcome/payment_success','refresh');

                                   /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));
                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                //$student_Considered_Degree=$student_data['Considered_Degree'];
                                if($student_data['Considered_Degree']==1){
                                        $student_Considered_Degree="BS/BSc";
                                    }elseif($student_data['Considered_Degree']==2){
                                      $student_Considered_Degree="MS/MSc";  
                                    }elseif($student_data['Considered_Degree']==3){
                                      $student_Considered_Degree="MBA/EMBA";    
                                    }elseif($student_data['Considered_Degree']==4){
                                      $student_Considered_Degree="PHD"; 
                                    }
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */

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


    // checkout for interview preparation form 
       public function checkout_interview_preparation()
     {
       
        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
         //print_r($result['user_data']);
        }

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
        //$this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
        //$this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
        //$this->form_validation->set_rules('current_major', 'Current Major', 'required');
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

             
          
            $booking_data = [
                'Considered_Degree' => $this->input->post('considered_degree'),
                'Considered_School' => implode(',', $this->input->post('considered_school[]')),
                'Intended_Major' => implode(',', $this->input->post('intended_major[]')),
                'price_package_id' => $this->input->post('price_package_id'),
                'Degree' => $this->input->post('price_package_id_val'),
                'build_package_id' => $build_package_id,
                'professor_id' => $this->input->post('professor_id'),
                'package_utc' => $this->input->post('package_utc'),
                'package_startTime' => $this->input->post('package_startTime'),
                'package_endTime' => $this->input->post('package_endTime'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'last_name' => $this->input->post('lname'),
                'name' => $this->input->post('fname'),
                'country_of_residence' => $this->input->post('country_of_residence'),
                'mobile' => $this->input->post('phone_no'),
                'University' =>$this->input->post('current_school_university'),  
                'Current_Major' => $this->input->post('current_major'),
                'Current_GPA' => $this->input->post('current_gpa'),
                'user_type' => 3,
                'is_status'=>1
            ];
           

            $res = $this->common_model->insert('users', $booking_data);
            if ($res == true) {
                $user_pay_id = $this->db->insert_id();

                  if (isset($user_pay_id) && !empty($user_pay_id)) {
              
                // weekly installmet payment
                if($_POST['installment']=='Pay_in_4_installments'){
                    $amount=$this->input->post('our_packages_price');
                    //$installment_fee = intval($amount * 0.2);  // 20% of the amount (one week)
                    $installment_fee = round($amount /4);  // 20% of the amount (one week)
                    $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                    $partial_payment=1;
                    
                }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                    $amount=$this->input->post('our_packages_price');
                    //$installment_fee = intval($amount * 0.5);  // 50% of the amount
                    $installment_fee = round($amount /2);
                    $remaining_amount=$amount-$installment_fee;
                    $partial_payment=2;

                }elseif($_POST['installment']=='full_payment'){
                    $amount=round($this->input->post('our_packages_price'));
                    $installment_fee = round($_POST['itemPrice']);
                    $remaining_amount=0;
                    $partial_payment=2;

                }


                $user_membershipData= array('user_id' => $user_pay_id ,
                'Considered_Degree_id'=>$this->input->post('considered_degree'),
                'Pay_Amount'=>$this->input->post('our_packages_price'),
                'user_professor_id'=>$this->input->post('professor_id'),
                'membership_our_packages_id'=>$this->input->post('price_package_id'),
                'payment_status'=>1,
                'progress_status'=>2,
                'duration'=>30,
                'status'=>1,
                'remaining_amount'=>$remaining_amount,
                'actual_amount'=>$this->input->post('our_packages_price')
            );
               
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
                    $itemPrice = $installment_fee;
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];
                     

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();
                                $this->common_model->insert('user_membership', $user_membershipData);
                                $this->load->view('front/stripe/payment_success', $data);
                                // redirect('Welcome/payment_success','refresh');


                             /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));
                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                //$student_Considered_Degree=$student_data['Considered_Degree'];
                                if($student_data['Considered_Degree']==1){
                                        $student_Considered_Degree="BS/BSc";
                                    }elseif($student_data['Considered_Degree']==2){
                                      $student_Considered_Degree="MS/MSc";  
                                    }elseif($student_data['Considered_Degree']==3){
                                      $student_Considered_Degree="MBA/EMBA";    
                                    }elseif($student_data['Considered_Degree']==4){
                                      $student_Considered_Degree="PHD"; 
                                    }
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */

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
    }

    //end 
   // auth checkout for interview pripration 

    public function auth_checkout_interview_preparation()
    {

        if(isset($_POST['user_id']) && !empty($_POST['user_id'])){
         $result['user_data'] = $this->common_model->get_single_row('users', $_POST['user_id']);
        }

       /* $this->form_validation->set_rules('lname', 'last name', 'required');
        $this->form_validation->set_rules('fname', 'first name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone_no', 'Phone Number ', 'required|regex_match[/^[0-9]{10}$/]')*/; //{10} for 10 digits number
        $this->form_validation->set_rules('price_package_id', 'Package', 'required');
        $this->form_validation->set_rules('considered_degree', 'Considered degree', 'required');
        $this->form_validation->set_rules('considered_school[]', 'Considered School', 'required');
        $this->form_validation->set_rules('intended_major[]', 'intended major', 'required');
        $this->form_validation->set_rules('professor_id', 'Professor', 'required');
        $this->form_validation->set_rules('package_utc', 'UTC', 'required');
        $this->form_validation->set_rules('package_startDate', 'Start Date', 'required');
 /*      $this->form_validation->set_rules('package_startTime', 'Start Time', 'required');
        $this->form_validation->set_rules('package_endTime', 'End Time', 'required');
        $this->form_validation->set_rules('country_of_residence', 'Userncountry of residenceame', 'required');*/
       // $this->form_validation->set_rules('current_school_university', 'Current school university', 'required');
      //  $this->form_validation->set_rules('current_gpa', 'Current GPA', 'required');
       // $this->form_validation->set_rules('current_major', 'Current Major', 'required');
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
       
            if (isset($result['user_data']['id']) && !empty($result['user_data']['id'])) {
                $user_pay_id = $result['user_data']['id'];
                // weekly installmet payment
                if($_POST['installment']=='Pay_in_4_installments'){
                    $amount=$this->input->post('our_packages_price');
                    $installment_fee = round($amount /4);  // 20% of the amount (one week)
                    $remaining_amount=$amount-$installment_fee; //Remaining Ammount 
                    $partial_payment=1;
                    
                }elseif($_POST['installment']=='2_installments_Every_2_Weeks') {
                    $amount=$this->input->post('our_packages_price');
                    $installment_fee = round($amount /2);
                    $remaining_amount=$amount-$installment_fee;
                    $partial_payment=2;

                }elseif($_POST['installment']=='full_payment'){
                   $amount=$this->input->post('our_packages_price');
                    $installment_fee = round($_POST['itemPrice']);
                    $remaining_amount=0;
                    $partial_payment=2;
                }

                       //store remainig ammount in order table and user_membership 
                    $user_membershipData= array(
                            'user_id' => $user_pay_id ,
                            'Considered_Degree_id'=>$this->input->post('considered_degree'),
                            'Pay_Amount'=>$installment_fee,
                            'user_professor_id'=>$this->input->post('professor_id'),
                            'membership_our_packages_id'=>$this->input->post('price_package_id'),
                            'payment_status'=>1,
                            'progress_status'=>2,
                            'duration'=>30,
                            'status'=>1,
                            'remaining_amount'=>$remaining_amount,
                            'actual_amount'=>$this->input->post('our_packages_price'));

                       $get_packege=$this->common_model->get_single_row_where('user_membership',array('user_id'=>$user_pay_id,'user_pay_id','user_professor_id'=>$this->input->post('professor_id'),'membership_our_packages_id'=>$this->input->post('price_package_id')));
                      //  packege selected 
                        if(isset($get_packege) && !empty($get_packege))
                        {
                          $this->session->set_flashdata('error_message', 'This Packege is Already Booked !');
                             redirect('interview-preparation');
                        }
           
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
                    $itemPrice = $installment_fee;
                    $currency = "usd";
                    $unique_id = time() . mt_rand() . $user_pay_id;
                    $orderID = "AK" . $unique_id;

                    //charge a credit or a debit card
                    $charge = \Stripe\Charge::create([
                        'customer' => $customer->id,
                        'amount' => $installment_fee,
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
                            'paid_amount' => $installment_fee,
                            'remaining_amount'=>$remaining_amount,
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
                            'professor_received_pay_id'=>$this->input->post('professor_id'),
                            'pay_package_id'=>$this->input->post('price_package_id'),
                            'partial_payment'=>$partial_payment,
                            'actual_amount'=>$this->input->post('our_packages_price')
                        ];

                        if ($this->db->insert('orders', $dataDB)) {
                            //  print_r($this->db->insert_id());
                            //  die;
                            if ($this->db->insert_id() && $status == 'succeeded') {
                                $data['insertID'] = $this->db->insert_id();


                                $this->common_model->insert('user_membership', $user_membershipData);

                                $this->load->view('front/stripe/payment_success', $data);
                                /*-----mail send professor or student------- */
                            if(!empty($this->input->post('professor_id'))){
                                $professor_id=$this->input->post('professor_id');
                                $student_data=$this->common_model->get_single_row('users',$user_pay_id);
                                $professor_data=$this->common_model->get_single_row('users',$professor_id);
                                $package_data=$this->common_model->getSingleRow('our_packages',array('our_packages_id'=>$this->input->post('price_package_id')));
                               
                                if(!empty($student_data) && !empty($professor_data)){
                                $student_name=$student_data['name'].' '.$student_data['last_name'];
                                $student_fname=$student_data['name'];
                                $student_last_name=$student_data['last_name'];
                                $student_email=$student_data['email'];
                                $student_mobile=$student_data['mobile'];
                                $student_University=$student_data['University'];
                                $student_country_of_residence=$student_data['country_of_residence'];
                                //$student_Considered_Degree=$student_data['Considered_Degree'];
                                if($student_data['Considered_Degree']==1){
                                        $student_Considered_Degree="BS/BSc";
                                    }elseif($student_data['Considered_Degree']==2){
                                      $student_Considered_Degree="MS/MSc";  
                                    }elseif($student_data['Considered_Degree']==3){
                                      $student_Considered_Degree="MBA/EMBA";    
                                    }elseif($student_data['Considered_Degree']==4){
                                      $student_Considered_Degree="PHD"; 
                                    }else{
                                        $student_Considered_Degree=$package_data[0]['our_packages_name'];
                                    }
                                $student_Considered_School=$student_data['Considered_School'];
                                $student_package_startTime=$student_data['package_startTime'];
                                $student_package_endTime=$student_data['package_endTime'];
                                $student_Date_of_registration=$student_data['Date_of_registration'];
                                $student_Intended_Major=$student_data['Intended_Major'];

                                $package_name=$package_data[0]['our_packages_name'];
                                $our_experts_title=$package_data[0]['our_experts_title'];
                                $professor_id=$professor_data['id'];
                                $professor_email=$professor_data['email'];
                                $professor_gender=$professor_data['gender'];
                                $professor_mobile=$professor_data['mobile'];
                                $professor_Bio=$professor_data['Bio'];
                                $professor_country_of_residence=$professor_data['country_of_residence'];
                                $professor_country=$professor_data['country'];
                                $professor_fullname=$professor_data['name'].' '.$professor_data['last_name'];
                                $professor_name=$professor_data['name'];
                                $professor_last_name=$professor_data['last_name'];
                                $sub="Admissions key Package booking";
                                $htmlss = $this->load->view('email-templates/mail_tamp_Professor', array('student_fname'=>$student_fname,'student_last_name'=>$student_last_name,'student_name' => $student_name, 'student_email' => $student_email,'student_mobile'=>$student_mobile,'student_University'=>$student_University,'student_package_startTime'=>$student_package_startTime,'student_package_endTime'=>$student_package_endTime,'student_Considered_School'=>$student_Considered_School,'student_country_of_residence'=>$student_country_of_residence,'student_Date_of_registration'=>$student_Date_of_registration,'student_Considered_Degree'=>$student_Considered_Degree,'student_Intended_Major'=>$student_Intended_Major,'professor_name'=>$professor_name ,'package_name'=>$package_name,'professor_id'=>$professor_id,'our_experts_title'=>$our_experts_title,'show_logo' => TRUE), TRUE);
                                //print_r($htmlss);exit;
                                //send mail for professor 
                                 //sendMail('mark@simpletruth.london',$sub,$htmlss);
                                 sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss);
                                 $sub2="Admissionskey Package booking";
                                 $htmlss2 = $this->load->view('email-templates/mail_tamp_Student', array('student_name' => $student_name, 'student_email' => $student_email,'professor_name'=>$professor_name,'package_name'=>$package_name,'our_experts_title'=>$our_experts_title,'professor_country_of_residence'=>$professor_country_of_residence,'professor_mobile'=>$professor_mobile,'professor_name'=>$professor_name,'professor_last_name'=>$professor_last_name,'professor_Bio'=>$professor_Bio,'professor_gender'=>$professor_gender,'professor_id'=>$professor_id,'professor_email'=>$professor_email,'professor_country'=>$professor_country,'show_logo' => TRUE), TRUE);
                                //send mail for student
                                 // sendMail('marina.yaloyan@yahoo.fr',$sub2,$htmlss2);
                                   sendMail('aishwaryapatidar165@gmail.com',$sub,$htmlss2);
                               }


                              }
                              /*end mail code */
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


    function check_email_avalibility()
    {
         if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
         {
              echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
              return false;
         }
         else
         {
              if($this->common_model->is_email_available($_POST["email"]))
              {
                  echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';
                  return false;
              }
              else
              {
                  echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email ready to register</label>';
              }
         }
    }

   /*
   @send_mail 
   @param null
   */

    public function send_Email_smtp($to, $subject, $html,$from = null,$attachment_full_path = null){
        if(!empty($from))
        {
            $fromemail = $from;
        }else
        {
            $fromemail = "aishwaryapatidar165@gmail.com"; 
        }
        //config email settings
            $this->load->library('email');
        
        // Create email headers
/*
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            // $config['smtp_timeout'] = 20;
            $config['smtp_user']    = 'aishwaryapatidar165@gmail.com';
            $config['smtp_pass']    = '****';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not   */ 
    

          /*sendgrid mail 
          */
            $this->email->initialize($config);
            $this->email->from('aishwaryapatidar165@gmail.com', 'AK');
            $this->email->cc($fromemail);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($html);
            if(! empty($attachment_full_path)){
               $this->email->attach($attachment_full_path);
            }
        
        if($this->email->send()){
            return true;
        }else{
            // echo "email send failed";
             return false;
           // echo $this->email->print_debugger();
        }
    }

     public function send_mail($to,$subject,$message,$cc=null)
    {
                        //Load email library
                        $this->load->library('email');

                        //SMTP & mail configuration
                     $config = Array(
                      'protocol' => 'smtp',
                      'smtp_host' => 'smtp.mailtrap.io',
                      'smtp_port' => 2525,
                      'smtp_user' => '3cf462f38e533b',
                      'smtp_pass' => '7689ebb587cebf',
                      'crlf' => "\r\n",
                      'newline' => "\r\n"
                    );
                        $this->email->initialize($config);
                        $this->email->set_mailtype("html");
                        $this->email->set_newline("\r\n");

                        //Email content
                        $htmlContent = '<h1>Admissions key Package booking Email Test</h1>';
                        $htmlContent .= '<p>Thanks </p>';

                        $this->email->to($to);
                        $this->email->from('aishwaryapatidar165@gmail.com','Admissions');
                        $this->email->subject('Admissions key Package booking Email Test');
                        $this->email->message($htmlContent);

                        //Send email
                        $this->email->send();
                  // echo $this->email->print_debugger(); 
                              
    }


    public function validateCreditcard_number($cc_num)      
    {
        $credit_card_number = $this->sanitize($cc_num);
        // Get the first digit
        $data = array();
        $firstnumber = substr($credit_card_number, 0, 1);
        // Make sure it is the correct amount of digits. Account for dashes being present.
        switch ($firstnumber)
        {
            case 3:
                $data['card_type'] ="American Express";
                if (!preg_match('/^3\d{3}[ \-]?\d{6}[ \-]?\d{5}$/', $credit_card_number))
                {
                    //return 'This is not a valid American Express card number';
                    $data['status']='false'; 
                    return $data;
                }
                break;
            case 4:
                $data['card_type'] ="Visa";
                if (!preg_match('/^4\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number))
                {
                    //return 'This is not a valid Visa card number';
                    $data['status']='false'; 
                    return $data;
                }
                break;
            case 5:
                $data['card_type'] ="MasterCard";
                if (!preg_match('/^5\d{3}[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number))
                {
                    //return 'This is not a valid MasterCard card number';
                    $data['status']='false'; 
                    return $data;
                }
                break;
            case 6:
                $data['card_type'] ="Discover";
                if (!preg_match('/^6011[ \-]?\d{4}[ \-]?\d{4}[ \-]?\d{4}$/', $credit_card_number))
                {
                    //return 'This is not a valid Discover card number';
                    $data['status']='false'; 
                    return $data;
                }
                break;
            default:
                //return 'This is not a valid credit card number';
                $data['card_type'] ="Invalid";
                $data['status']='false'; 
                return $data;
        }
        // Here's where we use the Luhn Algorithm
        $credit_card_number = str_replace('-', '', $credit_card_number);
        $map = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,0, 2, 4, 6, 8, 1, 3, 5, 7, 9);
        $sum = 0;
        $last = strlen($credit_card_number) - 1;
        for ($i = 0; $i <= $last; $i++)
        {
            $sum += $map[$credit_card_number[$last - $i] + ($i & 1) * 10];
        }
        if ($sum % 10 != 0)
        {
            //return 'This is not a valid credit card number';
            $data['status']='false'; 
            return $data;
        }
        // If we made it this far the credit card number is in a valid format
        $data['status']='true'; 
        return $data;
    }
    public function validateCreditCardExpirationDate($mon,$yr)
    {
        $month = $this->sanitize($mon);
        $year = $this->sanitize($yr);
        if (!preg_match('/^\d{1,2}$/', $month))
        {
            return 'false'; // The month isn't a one or two digit number
        }
        else if (!preg_match('/^\d{4}$/', $year))
        {
            return 'false'; // The year isn't four digits long
        }
        else if ($year < date("Y"))
        {
            return 'false'; // The card is already expired
        }
        else if ($month < date("m") && $year == date("Y"))
        {
            return 'false'; // The card is already expired
        }
        return 'true';
    }
    public function validateCVV($cc_num, $cc_cvv)
    {
        $cardNumber = $this->sanitize($cc_num);
        $cvv = $this->sanitize($cc_cvv);
        // Get the first number of the credit card so we know how many digits to look for
        $firstnumber = (int) substr($cardNumber, 0, 1);
        if ($firstnumber === 3)
        {
            if (!preg_match("/^\d{4}$/", $cvv))
            {
                // The credit card is an American Express card but does not have a four digit CVV code
                return 'false';
            }
        }
        else if (!preg_match("/^\d{3}$/", $cvv))
        {
            // The credit card is a Visa, MasterCard, or Discover Card card but does not have a three digit CVV code
            return 'false';
        }
        return 'true';
    }
    function sanitize($value)
    {
        return trim(strip_tags($value));
    }


}
