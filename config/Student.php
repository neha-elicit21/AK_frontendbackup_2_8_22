<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Student extends CI_Controller {

      function __construct() {

	 	parent::__construct();

	 	$this->load->model('common_model');

	}

	

	public function login()

	{

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]'); 

		if ($this->form_validation->run() == FALSE) { 

			$this->load->view('admin/login'); 

		}

		else

		{


	       $email = $this->input->post('email');  

        	 $password = $this->input->post('password');

        	$res = $this->common_model->login($email,$password,3);

        	if(!$res){

        		$this->session->set_flashdata('error_message','<div class="alert alert-custom alert-dismissible my_message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right">×</button>Invalid Email or Password !</div>');

        		$this->load->view('admin/login'); 

        	}

        	else

        	{
             if ($res[0]['is_status']==0)
             {
              $this->session->set_flashdata('error_message','<div class="alert alert-custom alert-dismissible my_message"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right">×</button>You are Inactive now !</div>');

               $this->load->view('admin/login');
            }
            else{
        		$student_data=array('email' => $res[0]['email'] ,

	       					 	'id'     => $res[0]['id'],

	       					 	'name'   => $res[0]['name'],

	       					 	'user_type'   => $res[0]['user_type'],

	       					 	'profile'   => $res[0]['profile'],

	       						'logged_in' => TRUE  

	       					  ); 

        		$this->session->set_userdata('logged_in',$student_data);

        		if ($student_data['user_type']==3) {
               
               redirect('student/dashboard');
             }
           }
			}

		}

		

	}

	public function dashboard()
	{
	     $id=$this->session->userdata['logged_in']['id'];
    $result['student_data']= get_name_by_id('users',$this->session->userdata['logged_in']['id']);
		$result['data']=$this->common_model->view_data_student_pakage($id);
		$this->load->view('include/student_header');
		$this->load->view('Student/dashboard',$result);
		$this->load->view('include/student_footer');
	}

	 public function search_filter()

  {

  	$id=$this->session->userdata['logged_in']['id'];

  	$search_filter= $_POST['search_filter'];

  	$result=$this->common_model->search_filter_by_student('users',$id,$search_filter);

  	if ($result)

  	 {



  		?>

      <ul class="task-card">

          <?php foreach ($result as $key => $row)
          {
            ?>
            

          <li>
            <div class="card">
           <div class="card-header">
                <input type="checkbox" name="">
              </div>
              <div class="card-body">
                <h5 class="card-title"> <?= $row['package_sub_title'];?></h5>
                <p class="card-text"> <?= $row['package_name'];?></p>
              
                <?php $old_date = date($row['created_date']); 

                $old_date_timestamp = strtotime($old_date);

                ?>

                <span><?php echo date('d F Y',$old_date_timestamp); ?></span><br/><br/>
                <i class="fa fa-paperclip" aria-hidden="true"></i> <span class="status complete">attachment</span>
              </div>
              <div class="card-footer">
              	<div class="date">
                  <?php $pro_data=get_name_by_id('users',$row['created_by']);?>
              	<span>Professor: <?= $pro_data['name'] ?> </span>
               <?php if($row['progress_status']==3){ ?>

                <span class="status complete">Complete</span>

                <?php } elseif($row['progress_status']==2) { ?>

                 <span class="status disabled">In progress</span>

                 <?php } elseif($row['progress_status']==1){  ?>

                 <span class="status">Not Started</span>

               <?php } ?>
              </div>
              </div>
            </div>
          </li>
            <?php
          }
          ?>
          
        </ul>
<?php

  	}

  	else

  	{

  		echo "<div style='color:red; font-sixe:25px;font-weight: 800;

    font-style: oblique;'>data no available</div>";

  	}

  }


 public function reset()

   {

   	 $id=$this->session->userdata['logged_in']['id'];

     $result['data']=$this->common_model->get_single_row('users',$id);

      $this->load->view('include/student_header');

      $this->load->view('Student/reset_password',$result);

      $this->load->view('include/student_footer');

   }



   public function change_password()

   {

   

    $rules = array(

        [

          'field' => 'Old_password',

          'label' => 'Old Password',

          'rules' => 'required|min_length[8]|max_length[20]',

        ],

        [

          'field' => 'new_password',

          'label' => 'New Password',

          'rules' => 'required|min_length[8]|max_length[20]',

        ],

        [

          'field' => 'confirm_password',

          'label' => 'Confirm Password',

          'rules' => 'matches[new_password]',

        ],

      );

     //print_r($_POST);

    $this->form_validation->set_rules($rules);

    if($this->form_validation->run()==FALSE)

    {

      $id=$this->session->userdata['logged_in']['id'];

     $result['data']=$this->common_model->get_single_row('users',$id);

      $this->load->view('include/student_header');

      $this->load->view('Student/reset_password',$result); 

      $this->load->view('include/student_footer'); 

    }

    else

    {

       $old_password= md5($this->input->post('Old_password'));

       $Db_password= $this->input->post('Db_password');

        if ($Db_password==$old_password) 

        {

              $new_password= md5($this->input->post('new_password'));

              $id= $this->input->post('id');

              $result=$this->common_model->single_recod_update('users',$id,'password',$new_password);

              if ($result) {



                $this->session->set_flashdata('success_message','<div class="alert alert-custom alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right">×</button>Password has been changed !</div>');

                   redirect('student/change_password');

              }

        }

        else

        {

          $this->session->set_flashdata('error_message','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="text-align:right">×</button>Invalid Old Password !</div>');

                   redirect('student/change_password');

          

        }



    }



   }

   public function myprofile()
   {
   	$id=$this->session->userdata['logged_in']['id'];
      $result['data']=$this->common_model->view_data_student_pakage($id);

   	 $this->load->view('include/student_header');

      $this->load->view('Student/myprofile',$result); 

      $this->load->view('include/student_footer'); 
   }

  
  public function students_tasks()
  {
      //$id= $this->uri->segment(3);
      $id=$this->session->userdata['logged_in']['id'];
      $result['student_data']= get_name_by_id('users',$this->session->userdata['logged_in']['id']);
      $result['data']=$this->common_model->view_data_student_pakage($id);

     $this->load->view('include/student_header');

     $this->load->view('Student/students-tasks', $result);

     $this->load->view('include/student_footer');

    
  }

  public function student_view_profile(){
    $id=$this->session->userdata['logged_in']['id'];
    $result['data']=$this->common_model->view_data_student_pakage($id);

    $this->load->view('include/student_header');

    $this->load->view('Student/student_view_profile', $result);

    $this->load->view('include/student_footer');
  }




  
}
?>