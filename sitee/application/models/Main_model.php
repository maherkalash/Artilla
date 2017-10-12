<?php
/**
 *
 */
class Main_model extends CI_Model {


    var $store_salt;//      = $this->config->item('store_salt', 'ion_auth');
    var $salt_length;//     = $this->config->item('salt_length', 'ion_auth');
    var $hash_method;

    function __construct() {
        parent::__construct();

        $this->store_salt  = $this->config->item('store_salt');
        $this->salt_length = $this->config->item('salt_length');
        $this->hash_method = $this->config->item('hash_method');
    }
	
	
	
	 public function gallery_data($id ,$page=0)
    {

      
		$today = date('Y-m-d');

    	$sql   = "SELECT *
						 FROM posts p ,post_cat c 
						  WHERE  c.cat_id =  $id 
						  AND c.cat_id = p.cat_id 
						  AND p.deleted = 0  
						  ORDER BY p.p_id";
       // echo $sql; exit;
        $num_rows = $this->db->query($sql)->num_rows();
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
	
	
	 public function stu_gallery_data($id ,$page=0)
    {

      
		$today = date('Y-m-d');

    	$sql   = "SELECT *
						 FROM posts p ,post_cat c , user u
						  WHERE  c.cat_id =  $id 
						  AND c.cat_id = p.cat_id 
						  AND p.deleted = 0 
						  AND p.stu_id !=0 
						  AND p.stu_id  = u.id
						  ORDER BY p.p_id ";
       // echo $sql; exit;
        $num_rows = $this->db->query($sql)->num_rows();
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
		 
	public function all_gallery($page=0)
    {

      
		$today = date('Y-m-d');

    	$sql   = "SELECT *
						 FROM posts p ,post_cat c 
						  WHERE  c.cat_id = p.cat_id 
						  AND    p.deleted = 0 
						  AND 	 p.stu_id  = 0  
						  ORDER BY p.p_id";
       // echo $sql; exit;
        $num_rows = $this->db->query($sql)->num_rows();
        if ($num_rows > 8) {
            $first = $page * 8;

            $sql .= " LIMIT $first, 8";
        }

        return array($this->db->query($sql), $num_rows);
    }
	
		public function stu_all_gallery($page=0)
		    {
		
		      
				$today = date('Y-m-d');
		
		    	$sql   = "SELECT *
								 FROM posts p ,post_cat c , user u
								  WHERE  c.cat_id = p.cat_id 
								  AND    p.deleted = 0 
						 		  AND    u.id      = p.stu_id
								  AND 	 p.stu_id  != 0  
								  ORDER BY p.p_id ";
		       // echo $sql; exit;
		        $num_rows = $this->db->query($sql)->num_rows();
		        if ($num_rows > 8) {
		            $first = $page * 8;
		
		            $sql .= "LIMIT $first, 8";
		        }
		
		        return array($this->db->query($sql), $num_rows);
		    }

    public function get_sliders()
    {
        return $this->db->get_where('sliders', array('active' => 1, 'deleted' => 0));
    }



    public function login($email='', $password="")
    {
        //echo "f"; exit();
        if (!$email || !$password) {
            return FALSE;
        }

        $user = $this->db->get_where('user', array('email' => $email,'fired' =>0));
        $is_exist_user = $user->num_rows();
        //echo  $is_exist_user; exit();
        if ($is_exist_user != 1) {
            return 'emsil_error';
        }
		
       
    
		
        /*if (!$user->row()->verified) {/*
    		$date     = $this->db->get_where('user', array('email' => $email,'fired' =>0,'verified'=>0))->row()->verify_token_date;
			$was_send = $date+(2*24*60*60);
			$now      = time();
    		if($was_send >= $now ){
    			redirect(base_url()."done");	
			} else {
    	
	            $this->session->set_userdata('not_verified', $user->row()->id);
	
	
	            redirect(base_url()."send_activation");
	        }
		}*/

        $salt = $user->row()->auth_key;
        $pass = $user->row()->password_hash;
        $passed = $this->verify_password($password, $pass, $salt);
        //echo $passed; exit;
        if ($passed) {
            //$complete = $user->row()->city ? 1 : 0;
           // if (!$complete) {
                //$this->session->set_userdata('not_completed', 1);
				$this->session->set_userdata('user_id', $user->row()->id);
            	$this->session->set_userdata('username', $user->row()->username." ".$user->row()->lastname);
				
				//redirect(base_url()."my_profile");
          //  }
           
           // $this->session->set_userdata('user_id', $user->row()->id);
            //$this->session->set_userdata('username', $user->row()->username);
     		
     		//print_r($expression)
     		// exit;
	         return 'passed';
       
	    } else {
            return 'pass_error';
        }
	}
	
	public function reset_pass($email)
	{
		$user_id = $this->db->get_where('user',array('email' => $email));
		//exit;
		if (!$user_id->num_rows()) {
			return 'err_user';
		}
		
		$user = $user_id->row();
		$user_id = $user_id->row()->id;
		$verify_salt = $this->salt();
        $this->db->where('id', $user_id);
        $this->db->update('user', array('password_reset_token' => $verify_salt, 'password_reset_date' => time()));
        if ($this->db->affected_rows()) {
        	$user = $this->db->get_where('user',array('id' => $user_id))->row();
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
            $url = base_url() . "reset_pass/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Reset password';
			$members = array($email);
			$to_name = $user->username.' '.$user->lastname;
			$message = "reset_pass";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
			//echo "<pre>";
			//print_r($sent); exit;
            return $sent;
        }
        return 0;
	}


		
		public function rate($user_id,$p_id,$rate)
		{
			
		
			$rated = $this->db->get_where('rates', array('user_id' => $user_id, 'p_id' => $p_id));
			
				if ($rated->num_rows()) {
					return 'already_rated';
				}
				
				$this->db->trans_start();
				$insert = array (
									'user_id'	=> $user_id,
									'p_id'		=> $p_id,
									'rate'		=> $rate,
									'rate_date'	=> time()
								);
				$this->db->insert('rates', $insert);
				
				$sql = "SELECT SUM(rate) rate, count(rate_id) rate_count FROM rates WHERE p_id=$p_id";
				$general_rate = $this->db->query($sql)->row();
				
				$rate = $general_rate->rate;
				$count = $general_rate->rate_count;
				//print_r($general_rate); exit;
				$newrate = $rate / $count;
				//echo $newrate; exit;
				$this->db->where('p_id', $p_id);
				$this->db->update('posts', array('rating' => $newrate));
				$this->db->trans_complete();
				//print_r($this->db->trans_status());
				//exit;
				return $this->db->trans_status();
				
			}
	
	public function face_register($face_id, $first_name, $last_name, $email, $gender, $photo)
	{
		//echo $face_id;
		$user = $this->db->get_where('user', array('email' => $email));
		if ($user->num_rows()) {
			$row_lastname = $user->row()->lastname;
			if (!$row_lastname) {
				$update = array (
						            'is_staff'   => 0,
						            'lastname'	 => $last_name,
						            'gender'	 => $gender,
						            'verified'	 => 1,
						            'face_id'	 => $face_id,
						            'face_photo' => $photo
								);
				$this->db->where('email', $email);
				$this->db->update('user', $update);
			}
			
			$complete = $user->row()->city ? 1 : 0;
            if (!$complete) {
                $this->session->set_userdata('not_completed', 1);
				$this->session->set_userdata('user_id', $user->row()->id);
            	$this->session->set_userdata('username', $user->row()->username);
				
				return "passed";
            }
           
            $this->session->set_userdata('user_id', $user->row()->id);
            $this->session->set_userdata('username', $user->row()->username);
            return 'passed';
		}
		//exit;
		$insert = array (
				            'email'      => $email,
				            'is_staff'   => 0,
				            'username'   => $first_name,
				            'lastname'	 => $last_name,
				            'gender'	 => $gender,
				            'verified'	 => 1,
				            'face_id'	 => $face_id,
				            'face_photo' => $photo
						);
		//echo "<pre>"; print_r($insert); exit;
		$this->db->insert('user', $insert);
		$id = $this->db->insert_id();
		$this->session->set_userdata('user_id', $id);
		$this->session->set_userdata('not_completed', 1);
        $this->session->set_userdata('v_id', $id);
        $this->session->set_userdata('username', $first_name);
        return 'new';
	}
	
	public function resend_code($email, $type)
	{
		$user_id = $this->db->get_where('user',array('email' => $email));
		if (!$user_id->num_rows()) {
			return 0;
		}
		$user = $user_id->row();
		$user_id = $user_id->row()->id;
		//request_pass_reset
		$requisted_times = $user->request_pass_reset;
		if ($requisted_times >= 3) {
			$this->session->unset_userdata('reset_email');
			return 0;
		}
		$verify_salt = $user->password_reset_token;
		if (!$verify_salt) {
			return 0;
		}
		$jwt = $this->load->library('JWT');
        $token = array('user_id' => $user_id, 'salt' => $verify_salt);
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $token = $this->jwt->encode($token, $CONSUMER_SECRET);
		
        $url = base_url() . "reset_pass/" . $token;
		$from_name = $this->config->item('from_name');
		$from_email = $this->config->item('from_email');
		$subject = 'Reset password';
		$members = array($email);
		$to_name = $user->username.' '.$user->lastname;
		$message = "reset_pass";
		$var1 = $url;
		
        $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
		$this->db->where('id', $user_id);
		$update = array (
							'request_pass_reset' => $user->request_pass_reset++,
							'password_reset_date' => time()
						);
		$this->db->update('user', $update);
        return $sent;
	}
	
	public function update_pass($user_id, $password)
	{
		$salt = $this->salt();
        $password = $password.$salt;
        $hashed_pass = $this->hash_password($password);
        $verify_salt = $this->salt();
        
        $update = array (
				            'auth_key'       		=> $salt,
				            'password_hash'     	=> $hashed_pass,
				            'password_reset_token' 	=> $verify_salt
				        );
		$this->db->where('id', $user_id);
		$this->db->update('user', $update);
		return $this->db->affected_rows();
	}
	
	public function verify_pass_token($user_id, $token)
	{
		$time = time() - (30 * 60);
        $sql = "SELECT * FROM user WHERE id=$user_id AND password_reset_token='$token' AND password_reset_date>$time";
        $res = $this->db->query($sql);
        if ($res->num_rows()) {
            return TRUE;
        }
		return FALSE;
	}
  	
    public function verify_password($password='', $hash, $salt='')
     {
        //$salt = $this->salt();
        if (empty($password))
        {
            return FALSE;
        }
        $this->load->library('bcrypt');
        // bcrypt
        //echo "$password $hash";
        return $this->bcrypt->verify($password.$salt, $hash);
    }
    
    public function prepare_mail($from_name='', $from_email='', $subject='', $members=array(), $to_name='', $message='', $var1='', $user_id=0)
    {
        $this->load->library('ch_mail');
		$res = $this->ch_mail->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
		return $res;
    }

    public function send_activation($user_id)
    {
    	
        $verify_salt = $this->salt();
        $this->db->where('id', $user_id);
        $this->db->update('user', array('verify_token' => $verify_salt, 'verify_token_date' => time()));
        if ($this->db->affected_rows()) {
        	$user=$this->db->get_where('user',array('id' => $user_id))->row();
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
            $url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = array($user->email);
			$to_name = $user->username.' '.$user->lastname;
			$message = "verify";
			$var1 = $url;

            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
            //echo $sent;
            return $sent;
        }
        return 0;
    }

    public function salt()
    {

        $raw_salt_len = 16;

        $buffer = '';
        $buffer_valid = false;

        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string   = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

        $salt = substr($salt, 0, $this->salt_length);


        return $salt;

    }

    public function check_paypass($user_id, $pass)
    {
        $pass = sha1($pass);
        $res = $this->db->get_where('employees', array('emp_id' => $user_id, 'password' => $pass))->num_rows();

        return $res;
    }

    public function signup($email, $password, $firstname, $lastname, $gender)
    {
        $salt = $this->salt();
        $password = $password.$salt;
        $hashed_pass = $this->hash_password($password);
        $verify_salt = $this->salt();
        $this->db->trans_start();
        $insert = array(
            'auth_key'       	=> $salt,
            'email'         	=> $email,
            'password_hash'     => $hashed_pass,
            'is_staff'    		=> 0,
            'username'          => $firstname,
            'lastname'			=> $lastname,
            'gender'			=> $gender,
            'verify_token'		=> $verify_salt,
            'verify_token_date' => time()
        );
        //echo "<pre>"; print_r($insert); exit;			
        $this->db->insert('user', $insert);
        $user_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        $res = $this->db->trans_status();
		//echo $user_id; exit;
        if ($res) {
            $this->session->set_userdata('not_verified', $user_id);
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $user_id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
			$url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = array($email);
			$to_name = $firstname.' '.$lastname;
			$message = "verify";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $user_id);
            
			
			return $sent;
        }
		
        return 1;
    }

    public function hash_password($password, $salt='')
    {
        if (empty($password))
        {
            return FALSE;
        }
        $this->load->library('bcrypt');
        // bcrypt

        return $this->bcrypt->hash($password.$salt);

    }
	
	public function check_old($id='')
	{
		$row = $this->db->get_where('old_temp', array('user_id' => $id));
		if (!$row->num_rows()) {
			return FALSE;
		}
		
		$verify_salt = $this->salt();
		
		$update = array (
				            'verify_token'		=> $verify_salt,
				            'verify_token_date' => time()
				        );

        $this->db->where('user_id', $id);		
        $this->db->update('old_temp', $update);
		if ($this->db->affected_rows()) {
            $email = $this->db->get_where('user', array('id' => $id ))->row()->email;
            $jwt = $this->load->library('JWT');
            $token = array('user_id' => $id, 'salt' => $verify_salt);
            $CONSUMER_SECRET = $this->config->item('token_secret');
            $token = $this->jwt->encode($token, $CONSUMER_SECRET);
			
			$url = base_url() . "verify_account/" . $token;
			$from_name = $this->config->item('from_name');
			$from_email = $this->config->item('from_email');
			$subject = 'Activation';
			$members = array($email);
			$to_name = $row->username.' '.$row->lastname;
			$message = "verify";
			$var1 = $url;
			
            $sent = $this->prepare_mail($from_name, $from_email, $subject, $members, $to_name, $message, $var1, $id);
            return $sent;
		}
		return 1;
	}

    public function verify_account($user_id, $token)
    {
        $time = time() - (30 * 60);
        $old  = $this->db->get_where('user', array('id' => $user_id))->row()->temp_id;
        if ($old==0){
            $sql = "SELECT * FROM user WHERE id=$user_id AND verify_token='$token' AND verify_token_date>$time";
            $res = $this->db->query($sql);
            if ($res->num_rows()) {
                $newtoken = $this->salt();

                $update = array (
                                    'verified' 		=> 1,
                                    'verify_token' 	=> $newtoken
                                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $update);
                return $this->db->affected_rows();
            }
		}
        elseif ($old !== 0) {
            $sql = "SELECT * FROM old_temp WHERE user_id=$user_id AND id=$old AND verify_token='$token' AND verify_token_date>$time";
            $res = $this->db->query($sql);
            if ($res->num_rows()) {
                $newtoken = $this->salt();
                $data = $this->db->get_where('old_temp', array('id' => $old))->row();
                $update = array (
                    'verified' 			=> 1,
                    'verify_token' 		=> $newtoken,
                    'auth_key'      	=> $data->auth_key,
                    'password_hash'     => $data->password_hash,
                    'is_staff'    		=> $data->is_staff,
                    'username'          => $data->username,
                    'lastname'			=> $data->lastname,
                    'gender'			=> $data->gender
                    

                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $update);
                return $this->db->affected_rows();
            }

        }
        return 0;
    }
}
