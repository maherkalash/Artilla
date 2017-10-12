<?php
class Auth {
    var $CI;
    public function __construct() {
        $this->CI = & get_instance();
        //$this->CI->load->model('general/auth_model', 'auth');

        //$this->CI->load->model('reports/reports_model', 'reports');
    }

    public function need_login()
    {
        if(!$this->CI->session->userdata('user_id')){
            $this->CI->messages->error($this->trans('need_login'));
            redirect(base_url());
        }

		//if (!$this->CI->session->userdata('user_verified')) {
		//	redirect(base_url()."complete_account");
		//}
    }

	public function need_unlock()
    {
        if($this->CI->session->userdata('screen_locked')){
            redirect(base_url()."lock_screen");
        }
    }

	public function need_pay_login()
    {
        if(!$this->CI->session->userdata('payment_logged')){
            redirect(base_url()."pay_login");
        }
    }

public function get_courses($course='') {
        $sql = "SELECT c.categoryname, cs.subcategoryname,c.CategoryName_en	,cs.SubCategoryName_en, cs.youtube_url, cs.id
                  FROM courcessubcat cs, courcescategories c
                 WHERE c.CategoryID=cs.Categoryid
                   AND cs.active=1
              ORDER BY cs.Categoryid";

        $main_list = array();
        $courses = $this->CI->db->query($sql);
        $result = $courses->result();
        $j = 0;
        for ($i = 0; $i < $courses->num_rows(); $i++) {

            if ($i > 0 && $result[$i]->categoryname != $result[$i - 1]->categoryname) {
                $j = 0;
            }
            //echo "$j  ".$result[$i]->subcategoryname;
            if($this->CI->session->userdata('lang')=='en')
            {

            $main_list[$result[$i]->CategoryName_en][$j]['title'] = $result[$i]->SubCategoryName_en;
            $main_list[$result[$i]->CategoryName_en][$j]['url'] = $result[$i]->youtube_url;
            $main_list[$result[$i]->CategoryName_en][$j]['id'] = $result[$i]->id;
            }else{
          //	exit;
                  //echo "$j  ".$result[$i]->subcategoryname;
            $main_list[$result[$i]->categoryname][$j]['title'] = $result[$i]->subcategoryname;
            $main_list[$result[$i]->categoryname][$j]['url'] = $result[$i]->youtube_url;
            $main_list[$result[$i]->categoryname][$j]['id'] = $result[$i]->id;

            }
            $j++;

        }
        if ($course) {
          //  exit();
            echo json_encode($main_list);
            return;
        }
        //echo "<pre>"; print_r($main_list); exit();
        return $main_list;

    }

    public function get_permissions() {
        $user_id = $this->CI->session->userdata('user_id');
        $query = "SELECT * FROM pers_roles WHERE role_id in (SELECT role_id FROM roles_emps WHERE emp_id = '{$user_id}');";
        $result = $this->CI->db->query($query)->result();

        $permissions = array();
        foreach($result as $permission) {
            $permissions [] = $permission->per_id;
        }
        return $permissions;
    }
    public function get_gallery_cat() {
        //$user_id = $this->CI->session->userdata('user_id');
        $query = "SELECT * FROM post_cat";
        $result = $this->CI->db->query($query)->result();



        return $result;
    }
    public function get_balance()
    {
        $emp_id = $this->CI->session->userdata('user_id');
        if ($emp_id) {
            $balance = $this->CI->db->get_where('users', array('emp_id' => $emp_id))->row()->amount;
            $this->CI->session->set_userdata('user_balance', $balance);
        }

    }



    public function is_logged()
    {
        return $this->CI->session->userdata('user_id') ? 1 : 0;
    }

    public function have_access($sub_object_id, $no_redirect = FALSE) {
        if(!$this->is_logged()) {
            return FALSE;
        }

        $has_access = FALSE;

        $permissions = $this->get_permissions();
        if(in_array($sub_object_id, $permissions)) {
            $has_access = TRUE;
        }

        if(!$has_access) {
            if(!$no_redirect) {
                $this->CI->messages->error($this->CI->lang->line('no_access'));
                redirect('/');
            }
            return FALSE;
        }
        return TRUE;
    }

	public function check_end_date($user_id='')
	{
		$end_date = $this->CI->db->get_where('users', array('emp_id' => $user_id))->row()->contract_end_date;
		if ($end_date && $end_date < time()) {
			return TRUE;
		}
		return FALSE;
	}

	public function translate($key='')
	{
		echo $this->CI->lang->line($key);
	}

	public function trans($key='')
	{
		return $this->CI->lang->line($key);
	}

	public function LANG()
	{
		return $this->CI->session->userdata('lang');
	}

	public function get_statics()
	{
		$user_id = $this->CI->session->userdata('user_id');

		$sql =  "SELECT *
				   FROM notifications n, operations o
				  WHERE n.op_id=o.op_id
				    AND n.read=0
				    AND n.notified=0
				    AND n.user_id=$user_id
				";
		$notifcs = $this->CI->db->query($sql);
		$num_row =$notifcs->num_rows();
		$sql =  "SELECT *
				   FROM notifications n, operations o
				  WHERE n.op_id=o.op_id
				    AND n.user_id=$user_id
				    AND n.notified=1
				  ORDER BY n.not_id DESC
				  LIMIT 0, 5
				";
		//echo $sql; exit;
		$oldnotif = $this->CI->db->query($sql)->result();
		$this->CI->db->where('user_id', $user_id);
		$this->CI->db->update('notifications', array('notified' => 1));

		$sql    = "select * 	from  social_media";
        $social = $this->CI->db->query($sql)->result();

		$sql    = "select * from advertisement where user_id = $user_id";
        $my_dubarah_num = $this->CI->db->query($sql)->num_rows();

        $sql = "SELECT * FROM user WHERE id = $user_id AND logged = 0";
        $first_logged = $this->CI->db->query($sql)->num_rows();

        $sql = "UPDATE user set logged=1 WHERE id = $user_id AND logged = 0";
        $this->CI->db->query($sql);

		$res = array(
						'notifcs'   => $notifcs->result(),
						'oldnotif'  => $oldnotif,
						'social' 	=> $social,
						'num_row'   => $num_row,
						'my_dubarah_num' => $my_dubarah_num
					);
		$this->CI->session->set_userdata('statics', $res);
        $this->CI->session->set_userdata('first_logged', $first_logged);
		return $res;
	}


	public function social()
	{
		$sql    = "select * 	from  social_media";
        $social = $this->CI->db->query($sql)->result();

		$this->CI->session->set_userdata('social', $social);
	}

	public function get_ajax_request($value='')
	{
		if(!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
			redirect(base_url());
		}
	}

	public function sendmail($sender='', $reciver='', $subject='', $message='')
	{
		//return True;
		$sender = $sender ? $sender : 'noreply@dubarah.com';
		$config = Array(
							'protocol'  => 'smtp',
							'smtp_host' => 'smtp.gmail.com',
							'smtp_port' => '587',
							'smtp_user' => 'noreply@dubarah.com',
							'smtp_pass' => 'WEB@mc909**'
						);

		$this->CI->load->library('email', $config);
		$this->CI->email->set_newline("\r\n");
		$this->CI->email->from($sender, 'Dubarah | Support');
		$this->CI->email->to($reciver);
		$this->CI->email->subject($subject);
		$this->CI->email->message($message);
		if (!$this->CI->email->send()) {
			return FALSE;
		} else {
		    return TRUE;
		}

	}

	public function send_sms($to='', $msg)
	{
		return TRUE;
		$msg = urlencode($msg);
		$url = "https://bms.syriatel.sy/API/SendSMS.aspx?user_name=&password=&msg=$msg&sender=Dalilacom&to=963$to";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$result = curl_exec($ch);
		if (!$result) {
			return "Curl error: " . curl_error($ch);
		}
		curl_close($ch);
	}

	public function ftp_trans($filename='')
	{
		return TRUE;
		if (!$filename) {
			return FALSE;
		}
		$ftp_server = "ftp.hybridware.co";
		$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
		$login = ftp_login($ftp_conn, 'ads@hybridware.co', 'aZ06chLwxZsL');

		$file = base_url()."uploads/$filename";
		error_reporting(0);
		// upload file
		if (ftp_put($ftp_conn, "/website/uploads/$filename", $file, FTP_ASCII)) {
			//echo "string";
			ftp_close($ftp_conn);
			//exit;
			return TRUE;
		} else {
			//echo "no";
			ftp_close($ftp_conn);
			//exit;
			return FALSE;
		}
	}
}
