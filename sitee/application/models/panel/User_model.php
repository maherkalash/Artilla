<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
     
    public function __construct() 
    {
        parent::__construct();
    }
	
    public function my_dubarahs($user_id ,$page=0)
    {

        $where = ' ';
       
        $where .= $user_id ? " AND a.user_id=$user_id AND a.status IN (1, 2) " : "AND a.status=1";
		
        $sql     	= " SELECT c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id , 
    				  			  a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
				  				  FROM categories c, categories fc, advertisement a, country can
								  WHERE	
								  c.category_id = fc.category_id
								  and
								  a.category_id = c.category_id
				  				  AND can.country_id = a.country
				 				  
				 				  $where 
				 				  ORDER BY a.advertisement_id DESC";
        $num_rows = $this->db->query($sql)->num_rows();
		
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
  
		
    public function my_applicants($ad_id ,$page=0)
    {

        $where = ' ';
       
        $where .= $ad_id ? " AND ua.advertisement_id=$ad_id" : '';
		
        $sql   = " SELECT  *  FROM users_apply ua , user u
        			WHERE    	ua.user_id = u.id
        			$where
	 			   ORDER BY  u.id DESC";
        $num_rows = $this->db->query($sql)->num_rows();
		
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
  
	
	
    public function add_dubarah($sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id)
    {
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/jobslogo/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '1000';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        $this->upload->initialize($config);
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $error = $this->upload->display_errors();
		            $errors[] = $error;
		        } else {
		        	$upload_data     = $this->upload->data();
					//$ext[$config['file_name']] = $upload_data['file_ext'];
		            //echo $fieldname . $upload_data['file_name'].'gfdg<br>';
		            $fs_images[$i] = $upload_data['file_name'];
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		$err = 0;
		if ($errors) {
			$err = $errors[0];
			return array(0, $err);
			
		}
		
		$ex = time()+(7*24*60*60*$expiration) ;
		
		
		$this->db->trans_start();
		
		$insert = array (
							'img' 			=> isset($fs_images[0]) ? $fs_images[0] : '',
	                        'category_id'   => $sub_id,
	                        'title'     	=> $title,
	                        'employer'      => $employer,
	                        'country'     	=> $country,
	                        'city'    		=> $city,                       
				            'address'		=> $address,   
				           	'user_id'       => $user_id,
					   		'email'			=> $email,
					   		'phone'         => $phone,						   		
							'job_type'      => $job_type,
					   		'expiration'    => $ex,
					 		'description'   => $description,
					   		'gender'    	=> $gender  
						);
		$this->db->insert('advertisement', $insert);
		$id = $this->db->insert_id();
		
		foreach ($skills as $skill) {
			$insert = array (
								'adver_id' => $id,
								'skill_id' => $skill
							);
								
			$this->db->insert('adver_skills', $insert);
		}
		   	
		$this->db->trans_complete();
		return array($this->db->trans_status(), $err);
	} 
	
	
	
	public function add_business($sub_id, $title  ,$description  ,$country, $city,  $address ,$email , $website, $facebook , $twitter ,$user_id)
    {
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/businesslogo/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '1000';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        $this->upload->initialize($config);
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $error = $this->upload->display_errors();
		            $errors[] = $error;
		        } else {
		        	$upload_data     = $this->upload->data();
					//$ext[$config['file_name']] = $upload_data['file_ext'];
		            //echo $fieldname . $upload_data['file_name'].'gfdg<br>';
		            $fs_images[$i] = $upload_data['file_name'];
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		$err = 0;
		if ($errors) {
			$err = $errors[0];
			return array(0, $err);
			
		}
		
		//$ex = time()+(7*24*60*60*$expiration) ;
		
		
		$this->db->trans_start();
		//$sub_id, $title  ,$description  ,$country, $city,  $address ,$email , $website, $facebook , $twitter ,$user_id
		$insert = array (
							'img' 			=> isset($fs_images[0]) ? $fs_images[0] : '',
	                        'field'   		=> $sub_id,
	                        'title'     	=> $title,
	                      	'description'   => $description,
	                        'country'     	=> $country,
	                        'city'    		=> $city,                       
				            'address'		=> $address,   
				           	'user_id'       => $user_id,
					   		'email'			=> $email,
					   							   		
							'website'       => $website,
					   		'facebook'    	=> $facebook,
					 		'twitter'  		=> $twitter,
					  
						);
		$this->db->insert('business', $insert);
		
		//print_r($this->db->trans_status());
		//print_r($err);
		//exit;
		

		   	
		$this->db->trans_complete();
		return array($this->db->trans_status(), $err);
	}

	public function edit_dubarah($ad_id, $sub_id, $title, $employer , $skills ,$description , $gender ,$country, $city,  $address ,$job_type, $expiration,$email , $phone ,$user_id)
    {
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/jobslogo/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '1000';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        $this->upload->initialize($config);
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $error = $this->upload->display_errors();
		            $errors[] = $error;
		        } else {
		        	$upload_data     = $this->upload->data();
					//$ext[$config['file_name']] = $upload_data['file_ext'];
		            //echo $fieldname . $upload_data['file_name'].'gfdg<br>';
		            $fs_images[$i] = $upload_data['file_name'];
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		$err = 0;
		if ($errors) {
			$err = $errors[0];
		}
		$this->db->trans_start();
		
		$insert = array (
							'img' 			=> isset($fs_images[0]) ? $fs_images[0] : '',
	                        'category_id'   => $sub_id,
	                        'title'     	=> $title,
	                        'employer'      => $employer,
	                        'country'     	=> $country,
	                        'city'    		=> $city,                       
				            'address'		=> $address,   
				           	'user_id'       => $user_id,
					   		'email'			=> $email,
					   		'phone'         => $phone,						   		
							'job_type'      => $job_type,
					   		'expiration'    => $expiration,
					 		'description'   => $description,
					   		'gender'    	=> $gender  
						);
		$this->db->where('advertisement_id', $ad_id);
		$this->db->update('advertisement', $insert);
		$this->db->delete('adver_skills', array('adver_id' => $ad_id));
		//echo "<pre>";
		//print_r($skills); exit;
		foreach ($skills as $skill) {
			$insert = array (
								'adver_id' => $ad_id,
								'skill_id' => $skill
							);
								
			$this->db->insert('adver_skills', $insert);
		}
		   	
		$this->db->trans_complete();
		return array($this->db->trans_status(), $err);
	}
	
	public function resume_mo($user_id, $ad_id)
	{
		$sql     	= "SELECT * FROM user u ,users_apply ua , city c , country co
		 				WHERE  u.id = $user_id
		 				AND    ua.advertisement_id = $ad_id
		 				AND    ua.user_id          = $user_id
		 				AND    u.city 			   = c.city_id
		 				AND    c.country_id        = co.country_id
		 				ORDER BY  u.id";
        $num_rows = $this->db->query($sql)->num_rows();
		
       
        return $this->db->query($sql);		
	}
	
	public function complete_account($user_id, $firstname, $lastname, $country, $city, $langs, $skills, $gender, $mobile ,$address)
    {   //$email, $password, $firstname, $lastname,
        //$salt = $this->salt();
        //$password = $password.$salt;
        //$hashed_pass = $this->hash_password($password);
        //$verify_salt = $this->salt();
       
        $this->db->trans_start();
		
        $update = array(
            //'auth_key'       	=> $salt,
            //'email'         	=> $email,
            //'password_hash'     => $hashed_pass,
            'is_staff'    		=> 0,
            'username'          => $firstname,
            'lastname'			=> $lastname,
            'mobile'            => $mobile,
            'city'				=> $city,
            'gender'			=> $gender,
            'country'       	=> $country,
            'place'       	    => $address,

            //'verify_token'	=> $verify_salt,
            //'verify_token_date' => time()
			
        );
        //echo "<pre>"; print_r($insert); exit;	
        //echo $user_id; exit;
        $this->db->where('id', $user_id);
        $this->db->update('user', $update);
		
  		$this->db->query("DELETE FROM user_skills WHERE user_id=$user_id");
        $this->db->delete('user_langs', array('user_id' => $user_id));
	  //print_r($langs);
	  //exit;
	 // $i = 0;
	    foreach ($langs as $lang) {
            $insert = array (
				                'user_id' => $user_id,
				                'lang_id' => $lang
           					);
            $this->db->insert('user_langs', $insert);
        }
		//$i = 0;
		//echo "DELETE FROM user_skills WHERE user_id=$user_id"; exit;
		//echo "<pre>";
		//print_r($skills); exit;
        foreach ($skills as $skill) {
            $insert = array (
                'user_id'  => $user_id,
                'skill_id' => $skill
            );
            $this->db->insert('user_skills', $insert);
        }
 			
        $this->db->trans_complete();
		$this->session->set_userdata('not_completed', 0);
        $res = $this->db->trans_status();
		
        return $res;
    }
		
		
	public function up_img($id)
    {
    	//exit;
		$fs_images 	 = array();
		$i			 = 0;
		$logos[]	 = array();
		$errors		 = array();
		$ext		 = array();
		$config['upload_path']   = 'uploads/users/';
		$path				     = $config['upload_path'];
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] 	 = '4096';
		$config['max_width'] 	 = '5000';
		$config['max_height'] 	 = '5000';
		$config['overwrite'] 	 = FALSE;
		$config['encrypt_name'] = TRUE; 
		$this->load->library('upload');		
		foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
		{
		    if (!empty($fileObject['name']))
		    {
		        $this->upload->initialize($config);
				
		        if (!$this->upload->do_upload($fieldname))
		        {
		            $error = $this->upload->display_errors();
		            $errors[] = $error;
					return array(0, $error);
		        } else {
		        	
		        	$upload_data     = $this->upload->data();
		            $fs_images[$i] = $upload_data['file_name'];
					//print_r($fs_images); return;
					$i++;
				}
			}	
		}
		//print_r($fs_images); echo "<br>"; print_r($errors);
		//exit;
		
		
		$this->db->trans_start();
		 if (isset($fs_images[0])) {
		$img =  array('photo' => $fs_images[0]);
	                        			
		$this->db->where('id', $id);
		$this->db->update('user', $img);	
		}
		$this->db->trans_complete();
		return array($this->db->trans_status(), 0);
	}
		
		
}
   

