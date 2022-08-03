<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Common_model extends CI_Model{

	function __construct() {

	 	parent::__construct();

	}



	function login($email,$password ,$users_type)

	{

	$this->db->select('*'); 

	$this->db->from('users');

	$array = array('email' => $email, 'password' => md5($password), 'user_type' => $users_type);

	$this->db->where($array);

	 	$query = $this->db->get();

	$result = $query->result_array();

	return $result;

	}

	function Studentlogin($email,$password,$users_type)

	{

	$this->db->select('*'); 

	$this->db->from('users');

	$array = array('email' => $email, 'password' => md5($password), 'user_type' => $users_type);

	$this->db->where($array);

	 	$query = $this->db->get();

	$result = $query->result_array();

	return $result;

	}

	public function insert($table,$data)

	{

		 $this->db->insert($table,$data);

		 return true;

	}



	public function View_All($table,$user_type)

	{

		$this->db->where('user_type',$user_type);
		$this->db->order_by('name','ASC');
		$data=$this->db->get($table)->result_array();

		return $data;

	}



		public function get_single_row($table,$id)

		{

			$this->db->where('id',$id);

			$data=$this->db->get($table)->row_array();

			// print_r($this->db->last_query());  

			return $data;

		}

			public function get_single_row_where($table,$where)

		{

			$this->db->where($where);

			$data=$this->db->get($table)->row_array();

			// print_r($this->db->last_query());  

			return $data;

		}

		public function create($table,$data)

		{

			// $this->db->where('id',$id);

			$data=$this->db->create($table,$data);

			return $data;

		}




		public function Update($table,$id,$data)

		{

			$this->db->where('id',$id);

			$data=$this->db->Update($table,$data);

			return $data;

		}

		public function Delete($table,$id)

		{

			$this->db->where('id',$id);

			$this->db->delete($table);	

			return true;

			//print_r($this->db->last_query());	

		}



		public function view_data_by_id($id)

		{
		   $data=$this->db->select('*')

	        ->from('user_membership')

	        ->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

	        ->join('users','users.id = user_membership.user_id')

	         ->where('user_membership.user_professor_id',$id)
	        ->get()->result_array();
			//print_r($this->db->last_query());  
	           return $data;

		}

		public function view_data_by_id_group_by($id)

		{	   
		   $data=$this->db->select('*')

		   ->from('user_membership')

		   ->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

		   ->join('users','users.id = user_membership.user_id')

			->where('user_membership.user_professor_id',$id)
			->group_by('user_id')
		   ->get()->result_array();
		   // print_r($this->db->last_query()); 
			  return $data; 

		}



		public function sort_filter($table,$id,$sort_filter_name)

		{
			   $data=$this->db->select('*')

			   ->from('user_membership')
	
			   ->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')
	
			   ->join('users','users.id = user_membership.user_id')
	
				->where('user_membership.user_professor_id',$id)
				// ->group_by('user_id')
				->order_by($sort_filter_name,'asc')
			   ->get()->result_array();
				  return $data;
			   

		}



		public function search_filter($table,$id,$search_filter_like)
		{
			 $data=$this->db->select('*')

	        ->from('user_membership')

	        ->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

	        ->join($table,'users.id = user_membership.user_id')
	        ->where('user_professor_id',$id)
	        ->where("(email LIKE '%".$search_filter_like."%' OR `name` LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR created_date LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%')", NULL, FALSE)
			// ->group_by('user_id')
	        ->get()->result_array(); 
	         return $data;

		}

		public function search_filter_by_student($userId,$professorid,$search_filter_like)

		{
			 $data=$this->db->query("SELECT users.name, user_membership.*, our_packages.* FROM users INNER JOIN user_membership ON users.id = user_membership.user_professor_id INNER JOIN our_packages ON user_membership.membership_our_packages_id = our_packages.our_packages_id WHERE users.id=$professorid AND user_membership.user_id=$userId AND (`name` LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%')")->result_array();
	         return $data;
		}

		public function sort_filter_by_student($table,$id,$sort_filter_name)

		{
			$data=$this->db->select('*')

			->from('user_membership')
 
			->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')
 
			->join('users','users.id = user_membership.user_id')
 
			// ->where('user_membership.user_professor_id',$ProfessorId)
			 ->where('user_membership.user_id',$id)
			 // ->group_by('user_id')
			 ->order_by($sort_filter_name,'DESC')
			->get()->result_array();
			   return $data;
		}



		public function single_recod_update($table,$id,$field_name,$field_data)

		{

			$this->db->set($field_name,$field_data);

			$this->db->where('id', $id);

			$this->db->update($table);

			$result =  $this->db->affected_rows(); 

			return $result;

		}

	    

	    public function checkReferalCode($current_referal_code)

	    {

	    	$this->db->where('user_referal_code',$current_referal_code);

	    	$this->db->get('referal_code');

	    	$result =  $this->db->affected_rows(); 

			return $result;

	    }
	  

	public function fetch_all_data($table)
	{
		$data=$this->db->get($table)->result_array();
		return $data;
	}

	public function fetch_all_data_student($table,$user_type)
	{
		$this->db->where('user_type',$user_type);
		$data=$this->db->get($table)->result_array();
		return $data;
	}

	//fetch all data where

		public function fetch_all_data_where($table,$where)
	{
		$this->db->where($where);
		$data=$this->db->get($table)->result_array();
		return $data;
	}



	// start fullcalendar

	function fetch_all_event($userId){
		$this->db->where('professor_id',$userId);
		$this->db->order_by('id');
	
		return $this->db->get('events')->result_array();
	
		}



	function insert_event($data)

	{

	$this->db->insert('events', $data);

	}



	function update_event($data, $id)

	{

	$this->db->where('id', $id);

	$this->db->update('events', $data);

	}



	function delete_event($id)

	{

	$this->db->where('id', $id);

	$this->db->delete('events');

	}
//view professor info using user id 
	public function view_professor_student_info($table,$id,$user_id)
	{
		
	$this->db->where('user_professor_id',$id);
	$this->db->where('user_id',$user_id);

	$data=$this->db->get($table)->result_array();

	return $data;
	}


	// end fullcalendar

	public function view_professor_student($table,$id)
	{
		
	$this->db->where('professor_id',$id);

	$data=$this->db->get($table)->result_array();

	return $data;
	}

	public function view_courses($id)

	{

	 $data=$this->db->select('*')
	->from('user_membership')
	->join('package','package.id = user_membership.Considered_Degree_id')
	->where('user_id',$id)
	->get()->result_array();
	 return $data;

	}
	function is_email_available($email)  
	 {  
	      $this->db->where('email', $email);  
	      $query = $this->db->get("users");  
	      if($query->num_rows() > 0)  
	      {  
	           return true;  
	      }  
	      else  
	      {  
	           return false;  
	      }  
	 }  
	

	public function get_row($table_name='', $id_array=''){
		if(!empty($id_array)):		
			foreach ($id_array as $key => $value){
				$this->db->where($key, $value);
			}
		endif;

		$query=$this->db->get($table_name);
		if($query->num_rows()>0)
			return $query->row();
		else
			return FALSE;
	}

	public function update_row($table_name='', $data='', $id_array=''){
		if(!empty($id_array)):
			foreach ($id_array as $key => $value){
				$this->db->where($key, $value);
			}
		endif;		
		return $this->db->update($table_name, $data);
	}

	public function view_data_student_pakage($id)

		{
			 $data=$this->db->select('*')

	        ->from('user_membership')
			->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

	        ->join('users','users.id = user_membership.user_id')

	        ->where('user_id',$id)
            
	        ->get()->result_array();
	           return $data;

		}

		function get_all_data($table)
		{
         $data= $this->db->get($table)->result_array();
         return $data;
		}
/*----------------------------------new admin pages-----------------------------------------------------*/
public function FetchEventUpload($sender_id, $package_id)
		   {
		   	  $this->db->where('sender_id',$sender_id);
		   	  $this->db->where('consider_package_id',$package_id);
		   	  $data=$this->db->get('drop_files')->result_array();
		   	  return $data;
		   	 }

		public function view_all_strudent_data($table,$user_type)

		{
		   $data=$this->db->select('*')

	        ->from($table)

	        ->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

	        ->join('users','users.id = user_membership.user_id')

	        ->where('user_type',$user_type)
            ->group_by('name')
	        ->get()->result_array();
	           return $data;

		}

    public function sort_filter_admin($table,$user_type,$sort_filter_name)

		{

			 $data=$this->db->select('*')

	        ->from($table)

			->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

	        ->join('users','users.id = user_membership.user_id')

	        ->where('user_type',$user_type)
	        ->group_by('name')
	        ->order_by($sort_filter_name,'asc')
            
	        ->get()->result_array();
	         return $data;

		}

		public function search_filter_admin($table,$user_type,$search_filter_like)

		{

			 $data=$this->db->select('*')

	        ->from($table)

			->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')
	        ->join('users','users.id = user_membership.user_id')
	        ->where('user_type',$user_type)
	        ->where("(mobile LIKE '%".$search_filter_like."%' OR email LIKE '%".$search_filter_like."%' OR name LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR created_date LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%')", NULL, FALSE)

            ->group_by('name')
	        ->get()->result_array();
	         return $data;

		}
public function ProfessorProfile($id)
{
	$data=$this->db->where('id',$id)
	->get('users')->result_array();
	 return $data;
}
public function view_data_student_pakage_data($id,$pakage_id)
{

	$data=$this->db->query("SELECT users.*, user_membership.*, our_packages.* FROM users INNER JOIN user_membership ON users.id = user_membership.user_id INNER JOIN our_packages ON user_membership.membership_our_packages_id = our_packages.our_packages_id WHERE our_packages.our_packages_id=$pakage_id")->result_array();
		  
	// $data=$this->db->where('id',$id)
	// ->get('users')->result_array();
	  return $data;
}
public function viewAppointments($professorid,$student_id)
{
	$data=$this->db->query("SELECT start_event FROM `events` WHERE professor_id='$professorid' AND student_id='$student_id' AND bookedevent=1")->result_array();
//    print_r($this->db->last_query());

	return $data;
}

	public function our_experts($id='')
	{
		$data=$this->db->query("SELECT u.name,u.last_name,u.profile,a.* FROM `our_experts` as a JOIN users as u on u.id= a.professor_our_experts_id WHERE a.package_name_by_pro = $id")->result_array();

		return $data;
	}
	public function getSingleRow($table,$where)
	{
		$this->db->where($where);
		$data=$this->db->get($table)->result_array();
		//print_r($this->db->last_query());  
		return $data;
	}
	public function UpdateTimeZone($timeZone)
	{
				$this->db->set('TimeZone',$timeZone);
				$data=$this->db->Update('events');

		 print_r($this->db->last_query());
	}
	public function fetch_all_eventByProfessor($pro_id)
	{  
		
		$data= $this->db->query("SELECT events.*,users.name FROM `events` JOIN `users` ON `users`.`id` = `events`.`professor_id` where `users`.`id`=44")->result_array();
		 return $data;

	}

	
    public function All_Students_List() {
        $data = $this->db->query("SELECT * FROM `users` JOIN `user_membership` ON `user_membership`.`user_id` = `users`.`id` JOIN `our_packages` ON `user_membership`.`membership_our_packages_id` = `our_packages`.`our_packages_id`")->result_array();
        return $data;
	   //print_r($data);
    }

    public function All_Professors_List(){
    	 $this->db->where('user_type', 2);
      $data= $this->db->get('users')->result_array();
        return $data;
    }
	function sort_filter_admin_professor($sort_filter_name)
	{
		  $data=$this->db->query("SELECT * FROM `users` WHERE `user_type` = 2 ORDER BY $sort_filter_name ASC")->result_array();
		  return $data;
	}
	function search_filter_admin_professor($search_filter_like)
	{
		 $data=$this->db->select('*')
  
			  ->from('users')
			  ->where('user_type',2)
			  ->where("(mobile LIKE '%".$search_filter_like."%' OR email LIKE '%".$search_filter_like."%' OR name LIKE '%".$search_filter_like."%' OR Date_of_registration LIKE '%".$search_filter_like."%')", NULL, FALSE)
			  ->group_by('name')
			  ->get()->result_array();
			   return $data;
	}
	function search_filter_student_dashboard($userId,$professorid,$search_filter_like)
	{
		$data=$this->db->select('*')

		->from('user_membership')
		->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')

		->join('users','users.id = user_membership.user_id')

		->where('user_id',$userId)
		->where("(`name` LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%' OR Date_of_registration LIKE '%".$search_filter_like."%')")
		->get()->result_array();
		   return $data;
		// $data=$this->db->query("SELECT users.*, user_membership.*, our_packages.* FROM users INNER JOIN user_membership ON users.id = user_membership.user_id INNER JOIN our_packages ON user_membership.membership_our_packages_id = our_packages.our_packages_id WHERE user_membership.user_id=$userId AND users.professor_id=$professorid AND (`name` LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%' OR Date_of_registration LIKE '%".$search_filter_like."%')")->result_array();
		// echo $this->db->last_query();
		// return $data;
	
    }
	
	
	 function search_filter_studentPackage($id,$search_filter_like)
		{
			
			$data =$this->db->query("SELECT users.*, 
			user_membership.*, 
			our_packages.* 
			FROM users
			INNER JOIN user_membership ON users.id = user_membership.user_id 
			INNER JOIN our_packages ON user_membership.membership_our_packages_id  = our_packages.our_packages_id WHERE user_membership.user_professor_id=$id AND (`name` LIKE '%".$search_filter_like."%' OR our_packages_name LIKE '%".$search_filter_like."%' OR created_date LIKE '%".$search_filter_like."%' OR our_experts_title LIKE '%".$search_filter_like."%') ")->result_array();
				//  $data=$this->db->select('*')
	
				// 	->from('users')
	
				// 	->join('our_packages','our_packages.our_packages_id = user_membership.membership_our_packages_id')
	            //       ->join('users','users.id = user_membership.user_id')
	
				// 	->where('package.created_by',$id)
	
				// 	->where(("name LIKE '%".$search_filter_like."%' OR package_name LIKE '%".$search_filter_like."%' OR created_date LIKE '%".$search_filter_like."%' OR package_sub_title LIKE '%".$search_filter_like."%')", NULL, FALSE)
				// 	->get()->result_array();
					// print_r($this->db->last_query());
					 return $data;
	
					   }
	
	
	function sort_filter_studentPackage($id,$sort_filter_name)
		{
			$data =$this->db->query("SELECT users.*, 
			user_membership.*, 
			our_packages.* 
			FROM users
			INNER JOIN user_membership ON users.id = user_membership.user_id 
			INNER JOIN our_packages ON user_membership.membership_our_packages_id  = our_packages.our_packages_id WHERE user_membership.user_professor_id=$id ORDER BY $sort_filter_name ASC")->result_array();
			
		return $data;

		}
	
	 public function getRows($params = array()){
			$this->db->select('*');
			$this->db->from('drop_files');
			$this->db->where($params);
			if(array_key_exists('id',$params) && !empty($params['id'])){
				$this->db->where('id',$params['id']);
				//get records
				$query = $this->db->get();
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
				//set start and limit
				if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit'],$params['start']);
				}elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
					$this->db->limit($params['limit']);
				}
				//get records
				$query = $this->db->get();
				$result = ($query->num_rows() > 0)?$query->result_array():FALSE;
			}
			//return fetched data
			return $result;
		}
    //* get student invoice Function *// 
		public function getStudentInvoices($id)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, c.package_name as courseName,c.package_sub_title as Ctitle,c.Package_content as Ccontent, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id`  JOIN package as c on c.id= a.`membership_our_packages_id`  WHERE u.id=$id")->result_array();
			return $result;
		}
		//student invoice filter by profeser name

			public function getUserStudentInvoicesfilter($id,$shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast,c.package_name as courseName,c.package_sub_title as Ctitle,c.Package_content as Ccontent, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` JOIN package as c on c.id= a.`membership_our_packages_id` WHERE c.package_name='$shorInvoiceName' AND u.id=$id")->result_array();
			return $result;
		}

		// search for student 
			public function searchInvoicesfilterStudent($id,$shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName, c.package_name as courseName,c.package_sub_title as Ctitle,c.Package_content as Ccontent,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` JOIN package as c on c.id= a.`membership_our_packages_id` WHERE u.id=$id And c.package_name LIKE '%".$shorInvoiceName."%' ")->result_array();
			return $result;
		}

		// student sort by course name 
		public function getUserStudentInvoicesSort($id)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, c.package_name as courseName,c.package_sub_title as Ctitle,c.Package_content as Ccontent,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` and u.id=$id JOIN package as c on c.id= a.`membership_our_packages_id` GROUP BY courseName")->result_array();
			return $result;
		}
   // professor sort by student name 

		public function getUserProfessorInvoicesSortNew($id)
		{
				$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` AND a.`user_professor_id`=$id GROUP BY userName")->result_array();
				return $result;
		}

		/** 
		 * Get student invoice in professor */
 public function getUserProfessorInvoicesNew($id)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` AND a.`user_professor_id`=$id")->result_array();
			return $result;
		}

	  public function getUserProfessorInvoices()
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id`")->result_array();
			return $result;
		}
		public function getUserProfessorInvoicesSort()
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` GROUP BY pName")->result_array();
			return $result;
		}

		public function getUserProfessorInvoicesfilter($shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` WHERE p.name='$shorInvoiceName'")->result_array();
			return $result;
		}
		/**
		 * function for student filter
		 * 
		 * @function getUserProfessorInvoicesfilternew() */

		public function getUserProfessorInvoicesfilternew($id,$shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` WHERE u.name='$shorInvoiceName'")->result_array();
			return $result;
		}


		public function searchInvoicesfilter($shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` WHERE p.name LIKE '%".$shorInvoiceName."%' ")->result_array();
			return $result;
		}
		/**
		 * @searchInvoicesfilternew this function invoice Search */
		public function searchInvoicesfilternew($shorInvoiceName)
		{
			$result  =$this->db->query("SELECT u.name as userName,u.last_name as userLast, p.name as pName,p.last_name as pLastName,u.profile,a.* FROM `user_membership` as a JOIN users as u on u.id= a.`user_id` JOIN users as p on p.id= a.`user_professor_id` WHERE u.name LIKE '%".$shorInvoiceName."%' ")->result_array();
			return $result;
		}

			public function displayProfessorData($id)
		{
			 $data= $this->db->query("SELECT * FROM `users` JOIN `user_membership` ON `user_membership`.`user_id` = `users`.`id` JOIN `our_packages` ON `user_membership`.`membership_our_packages_id` = `our_packages`.`our_packages_id` WHERE user_membership.user_professor_id= $id")->result_array();
			 return $data; 
		} 

		public function updateDataByUserProfessor($id,$table,$data)
		{
			$result=$this->db->where($id)
			->set($data)
			->update($table);
		  if($result){
				return true;
		  }
		  else{
			  return false;
		  }
		}

		public function order_count($user_pay_id,$professor_received_pay_id,$pay_package_id){
			$data=$this->db->query("SELECT COUNT(*) as order_count FROM `orders` WHERE `user_pay_id`='".$user_pay_id."' and `professor_received_pay_id`='".$professor_received_pay_id."' and `pay_package_id`='".$pay_package_id."'")->row_array();
			return $data; 
		}
  
}