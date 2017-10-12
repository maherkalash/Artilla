<?php

class Artella extends CI_Controller {

    var $store_salt;//      = $this->config->item('store_salt', 'ion_auth');
    var $salt_length;//     = $this->config->item('salt_length', 'ion_auth');
    var $hash_method;

    public function __construct() {
        parent::__construct();

        $this->session->set_userdata('this_url', current_url());
        if (!LANG()) {
            $this->session->set_userdata('lang', 'en');
        }
        if (LANG() == 'ar') {
            $this->config->set_item('language', 'arabic');
            $this->lang->load('artella', 'arabic');
            $this->lang->load('form_validation', 'arabic');
        } else {
            $this->lang->load('artella', 'english');
        }
        $this->store_salt  = $this->config->item('store_salt');
        $this->salt_length = $this->config->item('salt_length');
        $this->hash_method = $this->config->item('hash_method');
        $this->load->model('main_model');
        $this->load->model('artella_model');
    }

	public function search($value='')
	{
		$string = $this->input->get('string');

		$string = str_ireplace(' ', '%', $string);

		$sql = "SELECT subcategoryname name, CONCAT('".base_url()."course', id) url,
					   CONCAT('".base_url()."uploads/freecourses/', thumb) thumb
				  FROM courcessubcat
				 WHERE subcategoryname LIKE '%$string%'
				   AND active=1";
		$result = $this->db->query($sql);
		if ($result->num_rows()) {
			echo json_encode($result->result());
		} else {
			echo 0;
		}
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

    public function index() {
        $this->db->order_by('s_id', 'DESC');
        $sliders = $this->db->get_where('sliders', array('active' => 1))->result();
        $token = $this->salt();
        //echo $token; exit();
        $this->session->set_userdata('token', $token);
        $main_courses = $this->db->query("SELECT * FROM courcescategories WHERE main_active > 0 ORDER BY main_active ASC")->result();
//echo "<pre>"; print_r($main_courses); exit();

        $main_active = array();
        foreach ($main_courses as $row) {
            $index = $row->main_active - 1;
            $main_active[$index] = $row;
        }
        $data['token'] = $token;
        $data['main_active'] = $main_active;
        ///echo "<pre>"; print_r($sliders); exit;
        $data['sliders'] = $sliders;
        $data['title'] = 'Home';
        $data['gallery_cat'] = get_gallery_cat();
        $data['selected'] = 'Home';
        //print_r($data['gallery_cat']);
        //exit;
        $data['main_list'] = get_courses();
        $this->load->view('home', $data);
    }

    public function get_category($id) {
        $sql = "SELECT * FROM courcescategories
                  WHERE  Categoryid=$id";
        $cat = $this->db->query($sql)->row();

        $sub_cats = $this->db->get_where('courcessubcat', array('Categoryid' => $id))->result();
        $data['cat'] = $cat;
        $data['sub_cats'] = $sub_cats;
        $data['title'] = trans('cat_view');
        $data['selected'] = 'category_view';
        $data['main_list'] = get_courses();
        $this->load->view('courses/cat_view', $data);
    }

    public function send_email() {
        if ($_POST) {
            $token = $this->input->post('token');
            if ($token != $this->session->userdata('token')) {
                redirect(base_url());
            }

            $this->form_validation->set_rules('name', trans('your_name'), 'required|min_length[3]');
            $this->form_validation->set_rules('subject', trans('subject'), 'required|min_length[3]');
            $this->form_validation->set_rules('email', trans('email_address'), 'required|valid_email');
            $this->form_validation->set_rules('message', trans('message'), 'required');
            if ($this->form_validation->run()) {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');
                $members = array($this->config->item('to_email'));
                $from_email = $this->config->item('from_email');
                $to_name = "Us";
                $this->load->library('ch_mail');
                $res = $this->ch_mail->prepare_mail($name, $from_email, $subject, $members, $to_name, $message);
                $this->messages->success(trans('email_sent'));
            } else {
                $this->messages->error(trans('email_not_sent'));
            }
        } else {
            $this->messages->error(trans('email_not_sent'));
        }
        $token = $this->salt();
        $this->session->set_userdata('token', $token);
        redirect(base_url());
    }

    public function stu_draw($page = 1)
    {

        $id = 1;
        $page -= 1;
        $results  = $this->main_model->stu_gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }
        $data['page'] = $page + 1;
        $data['id'] = $id;
        $data['cat'] 		 = 'Draw';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);

    }

    public function stu_design($page = 1)
    {

        $id = 3;
        $page -= 1;
        $results  = $this->main_model->stu_gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }

        $data['page'] = $page + 1;
        $data['id'] = $id;
        $data['cat'] 		 = 'Design';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);

    }

    public function stu_photograpy($page = 1)
    {
        $id = 2;
        $page -= 1;
        $results  = $this->main_model->stu_gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }
        $data['page'] = $page + 1;
        $data['id'] = $id;
        $data['cat'] 		 = 'Photograpy';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);
    }

    public function stu_montage($page = 1)
    {
        $id = 4;
        $page -= 1;
        $results  = $this->main_model->stu_gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }

        $data['page'] = $page + 1;
        $data['id'] = $id;
        $data['cat'] 		 = 'Montage';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);


    }

    public function stu_visualtricks($page = 1)
    {
        $id = 5;
        $page -= 1;
        $results  = $this->main_model->stu_gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }
        $data['page'] = $page + 1;
        $data['id'] = $id;
        $data['cat'] 		 = 'VisualTricks';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);
    }

    public function stu_all_gallery($page = 1)
    {
        $page -= 1;
        $results  = $this->main_model->stu_all_gallery($page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();
            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;
        }
        $data['page'] = $page + 1;
        $data['id'] = 0;
        $data['gallery_cat'] = get_gallery_cat();
        $data['cat'] 		 = 'gallery';
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/stu_gallery',$data);

    }

    public function draw($page = 1)
    {

        $id = 1;
        $page -= 1;



        $results  = $this->main_model->gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = $id;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['cat'] 		 = 'Draw';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);

    }

    public function design($page = 1)
    {


        $id = 3;
        $page -= 1;



        $results  = $this->main_model->gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = $id;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['cat'] 		 = 'Design';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);

    }

    public function photograpy($page = 1)
    {


        $id = 2;
        $page -= 1;



        $results  = $this->main_model->gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = $id;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['cat'] 		 = 'Photograpy';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);


    }

    public function montage($page = 1)
    {
        $id = 4;
        $page -= 1;



        $results  = $this->main_model->gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = $id;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['cat'] 		 = 'Montage';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);


    }

    public function visualtricks($page = 1)
    {
        $id = 5;
        $page -= 1;



        $results  = $this->main_model->gallery_data($id, $page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = $id;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['cat'] 		 = 'VisualTricks';
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);

    }

    public function all_gallery($page = 1)
    {

        $page -= 1;



        $results  = $this->main_model->all_gallery($page);
        $num_rows = $results[1];
        if ($num_rows) {
            $data['results'] = $results[0]->result();

            $data['num_rows'] = $num_rows;
        } else {
            $data['results'] = '';
            $data['title'] = 'fff';//$this->lang->line('no_emp');
            $data['body']  = 'ffff';//$this->lang->line('no_emp_ex');
            $data['num_rows'] = 0;

        }



        // $data['url_ext'] = $url_ext;
        $data['page'] = $page + 1;
        //echo $page; exit;


        //$data['all']      =	$all;

        $data['id'] = 0;

        /*echo "<pre>";
        print_r($job_types); exit;*/




        //  echo "<pre>";
        //	print_r($data['projects']);
        //	exit;
        $data['gallery_cat'] = get_gallery_cat();
        $data['cat'] 		 = 'gallery';
        $data['title'] 		 = 'gallery';
        $this->load->view('gallery/gallery',$data);

    }

    public function rating($p_id , $rate)
    {
        get_ajax_request();
        $user_id = $this->session->userdata('user_id');

        $rating = $this->main_model->rate($user_id, $p_id ,$rate);



        echo $rating;


    }

    public function get_mycourse($id, $vid_id = '')
    {
        //exit();
        $sql = "SELECT cs.*, l.lang FROM courcessubcat cs, languages l WHERE l.id=cs.lang_id AND cs.id=$id";
        $list_row = $this->db->query($sql);
        if (!$list_row->num_rows()) {
            $this->messages->error(trans('list_error'));
            redirect(base_url());
        }
        $list_id = $list_row->row()->youtube_url;
        $list_price = $list_row->row()->price;
        $lang = $list_row->row()->lang;
        $about_lec = $list_row->row()->about_lecturer;
        $extra_source = $list_row->row()->extra_source;
        $course_info = $list_row->row()->course_info;
        $duration = $list_row->row()->duration;

        $key = $this->config->item('googlekey');
        $url = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=$list_id&key=$key&part=snippet,contentDetails&maxResults=50";

        $items = json_decode(file_get_contents($url));
        $res_num = $items->pageInfo->totalResults;

        $items = $items->items;
        //echo "<pre>";print_r($items); exit();
        $published = isset($items[0]->contentDetails->videoPublishedAt) ? $items[0]->contentDetails->videoPublishedAt : "";


        $filterd_list = array();
        $vids_in_list = array();
        $i = 0;
        foreach ($items as $item) {
            $snippet = $item->snippet;
            if ($snippet->title != 'Deleted video') {
                $filterd_list[$i]['publishedat'] = $snippet->publishedAt;
                $filterd_list[$i]['title'] = $snippet->title;
                $filterd_list[$i]['description'] = $snippet->description;
                $filterd_list[$i]['thumbnails'] = $snippet->thumbnails->default->url;
                $filterd_list[$i]['vid_id'] = $snippet->resourceId->videoId;
                if ($i == 0) {
                    $vid_id = $vid_id ? $vid_id : $snippet->resourceId->videoId;
                }
                $vids_in_list[] = $snippet->resourceId->videoId;
                $i++;
            }

        }
        //print_r($vid_id); exit();
        if (!$vid_id) {
            $this->messages->error(trans('list_deleted'));
            redirect(base_url());
        }
        $vid_detais = $this->get_video_data($vid_id, $vids_in_list);
        $video = $vid_detais['video'];
        $comments = $vid_detais['comments'];
        $data['id'] = $data['post_id'] = $id;
        $data['price'] = $list_price;
        $data['res_num'] = $res_num;
        $data['vid_id'] = $vid_id;
        $data['list'] = $filterd_list;
        $data['lang'] = $lang;
        $data['video'] = $video;
        $data['about_lec'] = $about_lec;
        $data['extra_source'] = $extra_source;
        $data['course_info'] = $course_info;
        $data['duration'] = $duration;
        $data['comments'] = $comments;
        $data['updated'] = $published;
        $data['list_row'] = $list_row->row();
  		$data['gallery_cat'] = get_gallery_cat();
        $data['title'] = trans('new_course');
        $data['selected'] = 'new_course';
        //$data['add_post'] = TRUE;
        $this->load->view('courses/playlist', $data);
    }

    public function download_attach($id) {
        need_login();
        $filename = $this->db->get_where('courcessubcat', array('id' => $id))->row()->attach;
        //echo $filename; //exit();
        $this->load->helper('download');

        force_download('uploads/freecourses/'.$filename, NULL);
    }

    public function discussion_area($id, $post_id=0) {
        need_login();
        $post_id = $this->artella_model->get_post_id($id, $post_id);
        if (!$post_id) {
            $this->messages->error(trans('no_posts_yet'));
            redirect(base_url("course/$id"));
        }
        $data['post'] = $this->artella_model->get_post($id, $post_id)->row();
        $data['comments'] = $this->artella_model->get_comments($id, $post_id);
        $data['questions'] = $this->artella_model->get_questions($id);
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] = trans('new_course');
        $data['selected'] = 'new_course';
        $data['id'] = $id;
        $data['add_post'] = TRUE;
        $data['post_id'] = $this->artella_model->get_post_id($id, $post_id);
        $this->load->view('courses/discussion', $data);
    }

    public function repeated_questions($id, $ques_id=0) {
        need_login();
        $ques_id = $this->artella_model->get_ques_id($id, $ques_id);
        if (!$ques_id) {
            $this->messages->error(trans('no_repeated_questions'));
            redirect(base_url("course/$id"));
        }
        $data['question'] = $this->artella_model->get_requestion($id, $ques_id)->row();
        $data['questions'] = $this->artella_model->get_requestions($id);
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] = trans('new_course');
        $data['selected'] = 'new_course';
        $data['id'] = $id;
        $data['ques_id'] = $this->artella_model->get_ques_id($id, $ques_id);
        $this->load->view('courses/repeated_questions', $data);
    }

    public function quiz($id, $quiz_id=0) {
        need_login();
        $quiz_id = $this->artella_model->get_quiz_id($id, $quiz_id);
        if (!$quiz_id) {
            $this->messages->error(trans('no_quizes'));
            redirect(base_url("course/$id"));
        }

        if ($_FILES) {
            //exit();
            $errors		 = array();
            $ext		 = array();
            $config['upload_path']   = 'uploads/homeworks';
            $path				     = $config['upload_path'];
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] 	 = '512';
            $config['max_width'] 	 = '1800';
            $config['max_height'] 	 = '1800';
            $config['overwrite'] 	 = FALSE;
            $this->load->library('upload');
            $fs_image = '';
            foreach ($_FILES as $fieldname => $fileObject)  //fieldname is the form field name
            {
                //echo "<pre>"
                //print_r($expression)$fieldname $fileObject;
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
                        $fs_image = $upload_data['file_name'];
                        //echo $fs_images; exit;
                    }


                }
            }
            //print_r($fs_images); echo "<br>"; print_r($errors);
            //exit;
            if ($errors) {
                $this->messages->error($errors[0]);
                redirect(base_url("quiz/$id/$quiz_id"));
            }
            $insert = array(
                                'user_id' 	=> $this->session->userdata('user_id'),
                                'quiz_id' 	=> $quiz_id,
                                'file' 	    => $fs_image,
                                'insert_time' 	=> time()
                            );
            $this->db->insert('licenses_answers', $insert);

            $this->messages->success(trans('file_uploaded'));
        }

        $user_id = $this->session->userdata('user_id');
        $row = $this->db->get_where('licenses_answers', array('user_id' => $user_id, 'quiz_id' => $id));
        $homework = $row->num_rows() ? $row->row()->license : '';
        $data['homework'] = $homework;
        $data['quiz'] = $this->artella_model->get_quiz($id, $quiz_id)->row();
        $data['quizs'] = $this->artella_model->get_quizs($id);
        $data['gallery_cat'] = get_gallery_cat();
        $data['title'] = trans('new_course');
        $data['selected'] = 'new_course';
        $data['id'] = $id;
        //$data['add_post'] = TRUE;
        $data['quiz_id'] = $quiz_id;
        $this->load->view('courses/quiz', $data);
    }

    public function download_license($id) {
        need_login();
        $user_id = $this->session->userdata('user_id');
        $this->load->helper('download');
        $row = $this->db->get_where('licenses_answers', array('user_id' => $user_id, 'quiz_id' => $id));
        $filename = $row->num_rows() ? $row->row()->license : '';
        if (!$filename) {
            redirect(base_url("quiz/$id"));
        }
        force_download('../sitee/uploads/licenses/'.$filename, NULL);
    }

    public function insert_comment($post_id) {
        need_login();
        if ($_POST) {
            $this->form_validation->set_rules('comment', trans('comment'), 'required');
            if ($this->form_validation->run()) {
                $user_id = $this->session->userdata('user_id');
                $comment = $this->input->post('comment');
                $time = time();

                $inserted = $this->artella_model->add_comment($user_id, $post_id, $comment, $time);
                //exit();
                if ($inserted) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                echo 0;
            }
        } else echo 0;
    }

    public function insert_reply($comment_id) {
        need_login();
        if ($_POST) {
            $this->form_validation->set_rules('comment', trans('comment'), 'required');
            if ($this->form_validation->run()) {
                $user_id = $this->session->userdata('user_id');
                $comment = $this->input->post('comment');
                $time = time();

                $inserted = $this->artella_model->add_reply($user_id, $comment_id, $comment, $time);
                //exit();
                if ($inserted) {
                    echo 1;
                } else {
                    echo 0;
                }
            } else {
                echo 0;
            }
        } else echo 0;
    }

    public function insert_post($course_id=0) {
        need_login();
        if ($_POST && $course_id) {
            $this->form_validation->set_rules('title', trans('post_title'), 'required|max_length[64]');
            $this->form_validation->set_rules('post_body', trans('post_body'), 'required');

            if ($this->form_validation->run()) {
                $user_id = $this->session->userdata('user_id');
                $title = $this->input->post('title');
                $body = $this->input->post('post_body');
                $time = time();

                $inserted = $this->artella_model->add_post($user_id, $course_id, $title, $body, $time);
                //exit();
                if ($inserted) {
                    echo json_encode(array(1, array('error' => 0)));
                } else {
                    echo json_encode(array(0, array('error' => 0)));
                }
            } else {
                $errors = array (
                    'title'      => form_error('title', '<b style="color: red">', '</b>'),
                    'post_body'  => form_error('post_body', '<b style="color: red">', '</b>'),
                    'error'		 => 0
                );
                echo json_encode(array(0, $errors));
            }
        }
    }

    public function get_video_data($id, $list_ids)
    {
        //echo $id; exit();
        //echo "<pre>"; print_r($list_ids); exit();
        if(!in_array($id, $list_ids)) {
            redirect(base_url());
        }
        $key = $this->config->item('googlekey');
        $url = "https://www.googleapis.com/youtube/v3/videos?id=$id&key=$key&part=snippet,contentDetails";

        $video = json_decode(file_get_contents($url))->items[0]->snippet;
        //echo "<pre>"; print_r($video); exit();
        $vid['title'] = $video->title;
        $vid['description'] = $video->description;
        $vid['img'] = $video->thumbnails->high->url;

        //

        $url = "https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&videoId=$id&key=$key";
        //echo "<pre>";
        $comments = json_decode(file_get_contents($url));

        $comment_array = array();
        $i = 0;
        foreach ($comments->items as $comment) {
            $comment = $comment->snippet;
            $snip = $comment->topLevelComment->snippet;
            $comment_array[$i]['comment'] = $snip->textDisplay;
            $comment_array[$i]['poster'] = $snip->authorDisplayName;
            $comment_array[$i]['poster_img'] = $snip->authorProfileImageUrl;
            $i++;
        }
        //$item = $items->items;
        return array('video' => $vid, 'comments' => $comment_array);
        //print_r($comment_array);
    }


    function test() {
        $this->load->view('common/header');
        $this->load->view('common/footer');
    }

}
