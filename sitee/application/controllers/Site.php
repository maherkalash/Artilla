<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{

    function __construct()
    { 
        parent::__construct();
        $this->session->set_userdata('this_url', current_url());
        $this->load->model('main_model');
        if (LANG() == 'ar') {
            $this->config->set_item('language', 'arabic');
            $this->lang->load('artella', 'arabic');
            $this->lang->load('form_validation', 'arabic');
        } else {
            $this->lang->load('artella', 'english');
        }
        /*$this->load->library('user_agent');
        $ip_address = $this->input->ip_address();
        $row = $this->db->get_where('session_log', array('ip_address' => $ip_address));
        if (!$row->num_rows()) {
            if ($this->agent->is_robot()) {
                $device = $this->agent->robot();
            } elseif ($this->agent->is_mobile()) {
                $device = $this->agent->mobile();
				
            } else {
                $device = 'Computer';  
            }
            $os = $this->agent->platform();
            $browser = $this->agent->browser() . ' ' . $this->agent->version();
            $insert = array(

                'ip_address' => $ip_address,
                'device' => $device,
                'os' => $os,
                'browser' => $browser,
                'start_time' => time()
            );
            $this->db->insert('session_log', $insert);
        }
        if (!LANG()) {
            $this->session->set_userdata('lang', 'en');
        }
        if (LANG() == 'ar') {
        	$this->config->set_item('language', 'arabic');
            $this->lang->load('main', 'arabic');
			$this->lang->load('form_validation', 'arabic');
        } else {
            $this->lang->load('main', 'english');
        }
           //	$basics = $this->main_model->set_basics();	//	$this->session->set_userdata('basics', $basics);

*/
    }
	
	public function facebook($value='')
	{
		//print_r($_POST); exit;
		$user = $this->input->post('userData');
		$user = json_decode($user);
		$email = $user->email;
		$first_name = $user->first_name;
		$last_name = $user->last_name;
		$gender = $user->gender == 'male' ? '1' : '2';
		$photo  = $user->picture->data->url;
		$verified = $user->verified;
		$face_id = $user->id;
		if (!$verified || !$email) {
			echo 0;
			return;
		}
		
		
		$res = $this->main_model->face_register($face_id, $first_name, $last_name, $email, $gender, $photo);
		echo $res;
	}

	public function check_completed($value='')
	{
		if ($this->session->userdata('not_completed')) {
			$this->messages->error(trans('complete_profile'));
			redirect(base_url()."my_profile");  
		}
	}

    public function index()
    {
    	$today  = date('Y-m-d');
    	/*$sql = "SELECT tp.type_name , tp.type_name_ar, c.arabic_name, a.title,a.employer,c.english_name, a.created_at, a.title, a.advertisement_id ,
    					DATEDIFF(FROM_UNIXTIME(expiration),'$today') diff,
    				   a.country, can.country_english_name , a.img, a.job_type,a.address,a.expiration
				  FROM categories c, categories fc, advertisement a, country can , job_type tp
				 WHERE fc.category_id = c.parent_category_id
				   AND a.category_id = c.category_id
				   AND can.country_id = a.country
				   AND a.status = 1
				   AND tp.type_id = a.job_type
				 ORDER BY a.advertisement_id DESC
				 LIMIT 4 ";
        $resent = $this->db->query($sql);

		$sql = "select * 	from  categories LIMIT 3";
        $cats = $this->db->query($sql);
        $data['resent'] = $resent;
		$sql = "select * 	from  social_media";
        $social = $this->db->query($sql);*/
        //$data['social'] = $social->result();
		$data = array();
		
        //$data['cats'] = $cats;
        $this->load->view('common/home', $data);

    }

    public function login($value = '')
    {
        if ($this->session->userdata('user_id')) {
            $message = trans("already_logged");
            $this->messages->error($message);
            redirect(base_url());
        }
        $data['message'] = '';
        $data = array();
        //exit();
        //echo "<pre>"; print_r($_POST); exit();
        $this->form_validation->set_rules('email', trans("email"), 'required');
        $this->form_validation->set_rules('password', trans('password'), 'required');
        if ($this->form_validation->run()) {
            //exit();
            $username = $this->input->post('email');
            $password = $this->input->post('password');
            //echo $password; exit;
            $logged = $this->main_model->login($username, $password);
           // echo $logged; exit();
            if ($logged == 'passed') {
                echo json_encode(array(1, array('error' => 0)));
                $this->messages->success(trans('logged_in'));
                return;
            } elseif ($logged == 'pass_error') {
               echo json_encode(array(0, array('error' => 1, 'message' => '<b style="color: red">'.trans('pass_error')."</b>", 'type' => 0)));
            } else {
                echo json_encode(array(0, array('error' => 1, 'message' => '<b style="color: red">'.trans('email_error')."</b>", 'type' => 1)));
            }
            return;
        } else {
            $errors = array (
                'email'     => form_error('email', '<b style="color: red">', '</b>'),
                'password'  => form_error('password', '<b style="color: red">', '</b>'),
                'error'		=> 0
            );
            echo json_encode(array(0, $errors));
            return;
        }
    }
	
	public function forgot_password($value='')
	{
		if ($_POST) {
			if ($this->input->post('_csrf-frontend') != $this->session->userdata('resalt')) {
				redirect(base_url());
			}
			$this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|trim');
			if ($this->form_validation->run()) {
				$email = $this->input->post('email');
				$this->session->set_userdata('reset_email', $email);
				$sent = $this->main_model->reset_pass($email);
				if ($sent === 'err_user') {
					$this->messages->error(trans('err_user'));
				} elseif ($sent) {
					$this->messages->success(trans('code_sent_email'));
				} else {
					$this->messages->error(trans('code_not_sent_email'));
				}
				//echo trans('err_user'); exit;
			}
		}
		$resalt = $this->main_model->salt();
		$this->session->set_userdata('resalt', $resalt);
		$data['resalt'] = $resalt;
		$this->load->view('forget_pass_view', $data);
	}
	
	public function resend_code($type='')
	{
		if ($type == 'resend_code') {
			$email = $this->session->userdata('reset_email');
			if (!$email) {
				$this->messages->error('no_reset_mail');
				redirect(base_url()."forgot_password");
			}
			$sent = $this->main_model->resend_code($email, $type);
			if ($sent) {
				$this->messages->success(trans('code_resent'));
			} else {
				$this->messages->error(trans('code_not_resent'));
			}
		}
		redirect(base_url());
	}
	
	public function reset_pass($code='')
	{
		if (!$code) {
			redirect(base_url());
		}
		$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt = $this->jwt->decode($code, $CONSUMER_SECRET);
		if (!isset($salt->user_id) || !isset($salt->salt)) {
			$this->messages->error(trans('token_error'));
			redirect(base_url()); 
		}
        $user_id = $salt->user_id;
        $token = $salt->salt;
        if (!is_numeric($user_id)) {
            $this->messages->error(trans('token_error'));
            redirect(base_url());
        }

        $verified = $this->main_model->verify_pass_token($user_id, $token);
        if ($verified) {
        	if ($_POST) {
				$this->form_validation->set_rules('password', trans('password'), 'required|alpha_dash');
				$this->form_validation->set_rules('password_con', trans('password_con'), 'matches[password]');
				if ($this->form_validation->run()) {
					$password = $this->input->post('password'); 
					$changed = $this->main_model->update_pass($user_id, $password);
					if ($changed) {
						$this->messages->success(trans('pass_changed'));
					} else {
						$this->messages->error(trans('pass_not_changed'));
					}
					redirect(base_url()."login");  
				} else {
					$this->messages->error(validation_errors());
				}
			}
        	$data['resalt'] = $this->main_model->salt();
        	$data['code'] = $code;
			$this->load->view('reset_pass_view', $data);
        } else {
            redirect(base_url());
        }
	}

    public function captcha_check($str = '')
    {   
        $secret = $this->config->item('secret');
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $post = array(
            'secret' => $secret,
            'response' => $str
        );
        $postdata = http_build_query($post);
        $result = $this->post_data($url, $postdata);
        return $result->success;
    }

    public function post_data($url = '', $postdata)
    {
        //echo $postdata; exit;
        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        $context = stream_context_create($opts);
        $result = json_decode(file_get_contents($url, false, $context));
        return $result;
    }

    public function signup($value = '')
    {
        if ($_POST) {
        	if ($this->input->post('_csrf-frontend') != $this->session->userdata('resalt')) {
        		$this->messages->error($this->lang->line('user_not_created'));
				redirect(current_url());
			}
            ///echo "<pre>"; print_r($_POST); exit;
            $this->form_validation->set_rules('email', trans('email'), 'required|valid_email|strtolower|is_unique[user.email]|trim');
            $this->form_validation->set_rules('password', trans('password'), 'required|alpha_dash');
            //$this->form_validation->set_rules('g-recaptcha-response', trans('captcha'), 'required|callback_captcha_check');
            $this->form_validation->set_rules('firstname', trans('firstname'), 'required|trim|alpha_numeric_spaces');
            $this->form_validation->set_rules('lastname', trans('lastname'), 'required|trim|alpha_numeric_spaces');
         
            $this->form_validation->set_rules('gender', trans('gender'), 'required');
            //echo "<pre>"; print_r($_POST); exit();
            if ($this->form_validation->run() == true) {
            	//exit();
                //echo "<pre>"; print_r($_POST); exit;
                $firstname 	= $this->input->post('firstname');
                $lastname 	= $this->input->post('lastname');
                $gender 	= $this->input->post('gender');
                $email 		= $this->input->post('email');
                $password 	= $this->input->post('password');
                $created 	= $this->main_model->signup($email, $password, $firstname, $lastname, $gender);
                //, $country, $city, $langs, $skills, $gender, $mobile
                // print_r($created); exit
                if ($created) {
                    //$this->messages->success('user_created');
                    echo json_encode(array(1, array('error' => 0)));
                } else {
                    echo json_encode(array(0, array('error' => 0)));
                }
                return;
            } else {
                $errors = array (
                    'email'     => form_error('email', '<b style="color: red">', '</b>'),
                    'password'  => form_error('password', '<b style="color: red">', '</b>'),
                    'firstname' => form_error('firstname', '<b style="color: red">', '</b>'),
                    'lastname'  => form_error('lastname', '<b style="color: red">', '</b>'),
                    'gender'    => form_error('gender', '<b style="color: red">', '</b>'),
                    'error'		=> 0
                );
                echo json_encode(array(0, $errors));
                return;
            }
        }
        redirect(base_url());
		$resalt = $this->main_model->salt();
		$this->session->set_userdata('resalt', $resalt);
		$data['resalt'] = $resalt;
		$data['site_key'] = $this->config->item('site_key');
        $this->load->view('signup', $data);
    }

    public function send_activation($value = '')
    {
        /*$check = $this->session->userdata('was_here');
        if ($check) {
            redirect(base_url());
        }*/

        $user_id = $this->session->userdata('not_verified');
        if (!$user_id) {
            redirect(base_url());
        }

        $generated = $this->main_model->send_activation($user_id);
        //echo $generated; exit;
        if ($generated) {
            //$this->message->success(trans('code_sent'));

            $this->load->view('need_activ');

        }
        else
        {

            $this->load->view('need_activ');

        }
		
    }

    public function need_activ($value = '')
    {
        $this->load->view('need_activ');
    }
  
    public function done($value = '')
    {
        $this->load->view('done');
    }

	public function done_virfed($value = '')
    {    
    	$user_id =  $this->session->userdata('v_id');
	    if (!$user_id) {
	    	redirect(base_url());
   		}	
		$user 	 =  $this->db->get_where('user',array('id' => $user_id,'fired' =>0,'verified'=>1));
        $this->session->set_userdata('user_id', $user->row()->id);
        $this->session->set_userdata('username', $user->row()->username);	
    		
        $this->load->view('done_virfed');
    }
		
	public function done_dubarah($value = '')
    {
        $this->load->view('done_duba');
    }

    public function verify_account($code = '')
    {
    	$this->load->library('JWT');
        $CONSUMER_SECRET = $this->config->item('token_secret');
        $salt = $this->jwt->decode($code, $CONSUMER_SECRET);
        $user_id = $salt->user_id;
        $token = $salt->salt;
        if (!is_numeric($user_id)) {
            $this->messages->error(trans('verify_error'));
            redirect(base_url());
        }

        $verified = $this->main_model->verify_account($user_id, $token);
        if ($this->session->userdata('ip_address') == '90.153.153.253') {
            echo  $verified; exit;
        }
        if ($verified) {
            $this->session->set_userdata('v_id',$user_id );
            $this->session->set_userdata('user_id',$user_id );
			$this->session->set_userdata('not_completed', 1);
			$this->messages->success(trans('verify_complet'));

        	redirect(base_url());
        } else {
            $this->messages->error(trans('wrong_token_30'));
        }
        redirect(base_url() . "my_profile");
    }

    public function get_city($id = '')
    {
		get_ajax_request();
		
        $city = $this->db->get_where('city', array('country_id' => $id))->result();
        $res = '<option value="0"></option>';
        foreach ($city as $row) {
            $res .= "<option value='$row->city_id'>$row->city_english_name</option>";
        }
        echo $res;
    }

    function check_user($str = '')
    {
        if ($str) {
        	$sql = "SELECT * FROM user WHERE email='$str'";
            if ($this->db->query($sql)->num_rows()) {
                $this->form_validation->set_message('check_user', "%s " . $this->lang->line('unique_validation'));
                return FALSE;
            }
            return TRUE;
        }
    }

    public function logout($value = '')
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}

