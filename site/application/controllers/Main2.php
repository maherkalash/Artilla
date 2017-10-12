<?php

/**
 * 
 */
class Main extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		if (!LANG()) {
			$this->session->set_userdata('lang', 'en');
		}
		if(LANG() == 'en') {
			$this->lang->load('main', 'english');
		} else {
			$this->lang->load('main', 'arabic');
		}
		$this->load->model('main_model');
	}
	
	public function show_prod($catid)
	{
		$cat_prod	=  $this->main_model->get_categories_pro($catid);
		$res = '';
		foreach ($cat_prod as $prod) {
			$res .= '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-top: 20px">';
			$res .= 	'<div class="product-block" style="width: 180px;">';
			$res .= 		'<div class="image">';
			$res .= 			'<div class="product-label product-sale">';
			$res .= 				'<span>'.trans('sale').'</span>';
			$res .= 			'</div>';
			$res .= 			'<a class="img" href="'.base_url()."product/$row->ProductID".'">';
			$res .= 				' <img alt="product info" src="'. $service."uploads/products/$row->ProductThumb" .'" title="product title">';
			$res .= 			' </a> ';
			$res .= 			'</div>';
			$res .= 			'<div class="product-meta">';
			$res .= 				'<div class="name">';
			$res .= 					'<a href="product.html">';
			$res .= 						''. LANG() == 'en' ? $row->ProductName_en : $row->ProductName .'';
			$res .= 					' </a> ';
			$res .= 				'</div>';
			$res .= 				'<div class="big-price"> ';
			$res .= 				'<span class="price-new"> ';
			$res .= 				'<span class="sym">'. trans('AED').'</span>';
			if ($row->discount > 0) {
				$res .= 				'<span class="price-old">';
				$res .= 				'<span class="sym">';
				$res .= 						''.trans('AED') .'';
				$res .= 						'</span>'.$row->ProductPrice .'';
	
			}
			$res .= 				'</div>';
			$res .= 				'<div class="big-btns"> ';
			$res .= 					'<a class="btn btn-default btn-view pull-left" href="'. base_url()."product/$row->ProductID" .'"> ';
			$res .= 						''. trans('view').'';
			$res .= 					' </a> ';
			$res .= 					'<a class="btn btn-default btn-addtocart pull-right" onclick="add('.$row->ProductID .')">';
			$res .= 						''. trans('addtocart').'';
			$res .= 					' </a> ';
			$res .= 				'</div>';
			$res .= 				'  <div class="small-price"> ';
			$res .= 					' <span class="price-new"> ';
			$res .= 						'<span class="sym"> ';
			$res .= 							''. trans('AED').'';
			$res .= 				    	'</span> ';
			$res .= 							''. $row->ProductPrice - $row->discount.'';
			$res .= 				      '</span> ';
			if ($row->discount > 0)	{
			$res .= 						'<span class="price-old"> ';
			$res .= 						'<span class="sym"> '. trans('AED') .'</span> ';
			$res .= 							''. $row->ProductPrice.'';
			$res .= 				      '</span> ';
				
		    }		
			$res .=  					'</div>';
			$res .= 						'<div class="rating"> ';
			$res .= 							'<i class="fa fa-star"></i>';
			$res .=								'<i class="fa fa-star"></i>'; 
			$res .=                             '<i class="fa fa-star"></i>';
			$res .=								'<i class="fa fa-star-half-o"></i>';
			$res .=								'<i class="fa fa-star-o"></i>';
			$res .=							'</div>';
			$res .=
			$res .=						'</div>';
			$res .=							  '<div class="meta-back"></div>';
			$res .=								'</div>';
			$res .= 					'</div>';
		
			 
		}
echo $res;
	}
	public function index($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		 
		$data['c_items']	= $cus_id ? $this->main_model->count_items($cus_id) : 0;
		
	    $data['main_page']  = 1;
		$data['best_sell']	= $this->main_model->best_sell();
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['categories'] = $this->main_model->get_categories();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('index', $data);
		
	}
	
	public function subcat($subcat_id='', $page=0)
	{
		$cus_id = $this->session->userdata('cus_id');
		
		if ($page < 0) {
			redirect(base_url()."sub_cat/$subcat_id/0");
		}
		$prod_details		= $this->main_model->get_products($subcat_id, $page);
		
		$data['products']	= $prod_details->res;
		$data['page_num'] 	= $page_num = $prod_details->page_num;
		if ($page > $page_num) {
			redirect(base_url()."sub_cat/$subcat_id/0");
		}
		$data['items_num']		= $prod_details->items_num;
		$data['sub_cats']	= $this->main_model->get_sub_cat($subcat_id);
		$data['sub_count']	= count($data['sub_cats']);
		
		$data['categories'] = $this->main_model->get_categories();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['page']		= $page;
		$data['subcat_id']	= $subcat_id;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('subcat_view', $data);
	}
	
	public function register($value='')
	{
		//exit;
		
		if ($this->session->userdata('cus_id')) {
			redirect(base_url());
		}
		if ($_POST) {
			
			$this->form_validation->set_rules('name', trans('name'), 'required');
			$this->form_validation->set_rules('l_name', trans('l_name'), 'required');
			$this->form_validation->set_rules('username', trans('username'), 'required|alpha_numeric');
			$this->form_validation->set_rules('email', trans('email'), 'required|valid_email');
			$this->form_validation->set_rules('password', trans('password'), 'required|alpha_numeric|matches[pass_conf]');
			$this->form_validation->set_rules('pass_conf', trans('pass_conf'), 'required');
			$this->form_validation->set_rules('gender', trans('gender'), 'required');
			$this->form_validation->set_rules('phone', trans('phone'), 'required|numeric');
			$this->form_validation->set_rules('address', trans('address'), 'required');
			if ($this->form_validation->run()) {
				//echo "string"; exit;
				$name 		= $this->input->post('name');
				$l_name 	= $this->input->post('l_name');
				$username 	= $this->input->post('username');
				$email 		= $this->input->post('email');
				$password 	= $this->input->post('password');
				$gender 	= $this->input->post('gender');
				$phone 		= $this->input->post('phone');
				$address 	= $this->input->post('address');
				$registerd  = $this->main_model->register($name, $l_name, $username, $email, sha1($password), $gender, $phone,$address);
				if ($registerd) {
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('password', $password);
					redirect(base_url()."login");
					return;
				}
			}
			//exit;
		}
		//$data['cities'] 	= $this->main_model->get_cities();
		$data['categories'] = $this->main_model->get_categories();
		
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		
		$this->load->view('register_view', $data);
	}
	
	public function login()
	{
		if ($this->session->userdata('cus_id')) {
			redirect(base_url());
		}
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		if (!$username && !$password) {
			$this->form_validation->set_rules('username', trans('username'), 'required');
			$this->form_validation->set_rules('password', trans('password'), 'required');
			
			if ($_POST) {
				
				if ($this->form_validation->run()) {
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					//echo $password; exit;
					$res = $this->main_model->login($username, $password);
					if ($res) {
						$this->session->set_userdata('cus_id', $res->id);
						$this->session->set_userdata('active', $res->verified);
						$this->session->set_userdata('full_name', $res->f_name.' '.$res->l_name);
					}
				}
				//exit;
			}
		} else {
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('password');
			$res = $this->main_model->login($username, $password);
			if ($res) {
				$this->session->set_userdata('cus_id', $res->id);
				$this->session->set_userdata('active', $res->verified);
				$this->session->set_userdata('full_name', $res->f_name.' '.$res->l_name);
			}
		}
		redirect(base_url()."cart_items");
	}
	
	public function logout($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		$c_items	= $cus_id ? $this->main_model->count_items($cus_id) : 0;
			//echo $c_items; exit;
		if ($c_items) {
			redirect(base_url()."cart_items");
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
		
		
	}
	
	
	public function contact($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		$data['categories'] = $this->main_model->get_categories();
		
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('contact', $data);
	}
	
	
	public function about($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		
		$data['categories'] = $this->main_model->get_categories();
		
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('about', $data);
	}
		 
		 
		 public function delivery($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		
		$data['categories'] = $this->main_model->get_categories();
		$data['delivery']   = $this->main_model->get_delivery();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('delivery', $data);
	}
	
	 public function customerst($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		
		$data['categories'] = $this->main_model->get_categories();
		$data['customerst'] = $this->main_model->get_customerst();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('customerst', $data);
	}
	
	 public function trem($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		
		$data['categories'] = $this->main_model->get_categories();
		$data['trem']       = $this->main_model->get_trem();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('trem', $data);
	}
	
	 public function policy($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		 
		$data['categories'] = $this->main_model->get_categories();
		$data['policy']     = $this->main_model->get_policy();
		//echo "<pre>"; print_r($data['policy']); exit;
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('policy', $data);
	}
	
	 public function support($value='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		
		 
		$data['categories'] = $this->main_model->get_categories();
		$data['support']     = $this->main_model->get_support();
		//echo "<pre>"; print_r($data['policy']); exit;
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('support', $data);
	}
	public function cart_prods($value='')
	{
		if (!$this->session->userdata('cus_id')) {
			redirect(base_url());
		}
		
		$cus_id = $this->session->userdata('cus_id');
		
		$data['items']		= $this->main_model->get_items($cus_id);
		//echo "<pre>";
		//print_r($data['items']->res); exit;
		$data['categories'] = $this->main_model->get_categories();
		 
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$this->load->view('cart_view', $data);
	}
	
	public function addto_cart($prod_id='', $qty='')
	{
		if (!$prod_id || !$qty) {
			echo 0;
			return;
		}
		//echo 1;
		$cus_id = $this->session->userdata('cus_id');
		//echo "$cus_id, $prod_id, $qty"; exit;
		$row = $this->main_model->addtocart($cus_id, $prod_id, $qty);
		$res = '';
		$service = $this->config->item('service');
		if (!is_numeric($row)) {
			$res .= '<li onclick="location.href='."'". base_url().'cart_items'."'".'" style=" padding-top: 0; margin-top: 0">';
			$res .= '<img style="height: 50px; width: 50px; margin-left: 0" src="'.$service.'uploads/products/'.$row->ProductThumb.'"> ';	            		 
			$res .= '<font style="font-size: 10px; margin-left: 2px">'.(LANG() == 'en' ? $row->ProductName_en : $row->ProductName).'</font> ';
			$res .= '</li>';
			echo $res;
			return;
		}
		print_r(0);;
	}
	
	public function product_det($id='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		$data['prod']		= $prod = $this->main_model->get_prod($id);
		//echo "<pre>"; print_r($prod); exit;
		if (!$prod->prod) {
			redirect(base_url());
		}
		$data['comments']	= $this->main_model->get_comments($id);
		 
		$data['categories'] = $this->main_model->get_categories();
		$data['subcats']	= $this->main_model->get_subcategories();
		$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['high_prods']	= $this->main_model->get_high_prods();
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['prod_id']	= $id;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('product_view', $data);
	}
	
	public function add_comment($prod_id='')
	{
		$cus_id = $this->session->userdata('cus_id');
		$this->form_validation->set_rules('comment', trans('comment'), 'required');
		
		if ($_POST) {
			
			if ($this->form_validation->run()) {
				//exit;
				$comment = $this->input->post('comment');
				
				$res = $this->main_model->comment($prod_id, $cus_id, $comment);
				//print_r($res); exit;
				if ($res) {
					$this->session->set_userdata('suc_msg', trans('comment_success'));
				} else {
					$this->session->set_userdata('err_msg', trans('comm_not_success'));
				}
			} else {
				$this->session->set_userdata('err_msg', trans('comm_not_success'));
			}
		}
		redirect(base_url()."product/$prod_id");
		
	}
	
	public function del_item($id='')
	{
		if (!$this->session->userdata('cus_id')) {
			redirect(base_url());
		}
		
		$deleted = $this->main_model->del_item($id);
		if ($deleted) {
			$this->session->set_userdata('suc_msg', trans('deleted_success'));
			redirect(base_url()."cart_items");
		} else {
			$this->session->set_userdata('err_msg', trans('deleted_not_success'));
			redirect(base_url()."cart_items");
		}
	}
	
	
	public function check_out($value='')
	{
		if ($_POST) {
			$fields = array();
			foreach ($_POST as $key => $value) {
				$fields[] = $key;
			}
			foreach ($fields as $field) {
				$this->form_validation->set_rules($field, trans($field), 'required|trim|is_numeric');
			}
			if ($this->form_validation->run()) {
				
				$cus_id = $this->session->userdata('cus_id');
				$res = $this->main_model->check_out($cus_id, $_POST);
				if ($res) {
					$this->session->set_userdata('suc_msg', trans('cart_submitted'));
					redirect(base_url()."cart_items");
				} else {
					$this->session->set_userdata('err_msg', trans('cart_not_submitted'));
					redirect(base_url()."cart_items");
				}
			}
			
		}		
	}
	
	public function change_lang($lang)
	{
	if(in_array($lang, array('ar', 'en'))){
	$this->session->set_userdata('lang', $lang);
	}
	redirect(base_url());
	}
	
	public function search($page='')
	{
		$cus_id = $this->session->userdata('cus_id');
		
		if ($page < 0) {
			redirect(base_url());
		}
		$id = $this->input->get('search_cat');
		$string = $this->input->get('search_s');
		if (!$string) {
			redirect(base_url());
		}
		//$prod_details		= $this->main_model->get_products($subcat_id, $page);
		
		
		
		$prod_details = $this->main_model->search($id, $string, $page);
		$data['products']	= $prod_details->res;
		$data['page_num'] 	= $page_num = $prod_details->page_num;
		if ($page > $page_num) {
			redirect(base_url()."search/0?search_cat=$id&search_s=$string");
		}
		$data['items']		= $prod_details->items_num;
		//$data['sub_cats']	= $this->main_model->get_sub_cat($subcat_id);
		//$data['sub_count']	= count($data['sub_cats']);
		 
		$data['categories'] = $this->main_model->get_categories();
		$data['subcats']	= $this->main_model->get_subcategories();
		//$data['sliders']	= $this->main_model->get_sliders();		
		$data['service']	= $this->config->item('service');
		$recent_prods		= $this->main_model->get_recent_prods();
		$data['top_prod']	= $recent_prods;
		$data['page']		= $page;
		//$data['subcat_id']	= $subcat_id;
		$data['id'] = $id;
		$data['string'] = $string;
		$data['acc']		= $acc = $this->main_model->get_products_acc();
		$data['top_prod']	= $recent_prods;
		$data['items']		= $cus_id ? $this->main_model->get_items($cus_id) : 0;
		$this->load->view('search_view', $data);
	}
	

}


