<?php
/**
 * 
 */
class Main_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	public function get_products_acc()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_products_acc";
		
		$result = json_decode(file_get_contents($url));
		
		return $result;
		
	}
	
	public function get_categories()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_categories";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	public function get_policy()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_policy";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
		public function get_delivery()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_delivery";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
		public function get_customerst()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_customerst";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	 
	 	public function get_trem()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_trem";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	public function get_support()
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_support";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	public function get_subcategories($value='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_subcategories";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function get_sliders($value='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_sliders";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function get_recent_prods($value='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_top_prods";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	public function get_high_prods($value='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_high_prods";
		
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function get_products($subcat_id, $page)
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_products/$subcat_id/$page";
		//echo $url; exit;
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function get_sub_cat($subcat_id='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_sub_cat/$subcat_id";
		//echo $url; exit;
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function get_cities($value='')
	{
		$service = $this->config->item('service');
		
		$url = $service."services/get_cities";
		//echo $url; exit;
		$result = json_decode(file_get_contents($url));
		return $result;
	}
	
	public function register($name, $l_name, $username, $email, $password, $gender, $phone, $address)
	{
		$data = array(
					 	'FirstName'			=> $name,
					 	'LastName'			=> $l_name,
					 	'username'			=> $username,
					 	'Zip'				=> 0,
					 	'Phone'				=> $phone,
					 	'Address'			=> $address,
					 	'gender'			=> $gender,
					 	'Password'			=> $password,
					 	'Email'				=> $email,
					 	'RegistrationDate'	=> time()
					 );
		//echo "<pre>";
		//print_r($data); exit;
		$postdata = http_build_query($data);
		$webservices = $this->config->item('service');
		$url = $webservices."services/register";
		//echo $url; exit;
		$res = $this->post_data($url, $postdata);
		//echo $res;
		return $res;
	}
	
	public function login($username, $password)
	{
		$password = sha1($password);
		$webservices = $this->config->item('service');
		$url = $webservices."services/login/$username/$password";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function get_prod($id)
	{
		$webservices = $this->config->item('service');
		$url = $webservices."services/get_prod/$id";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function get_items($user_id)
	{
		$webservices = $this->config->item('service');
		$url = $webservices."services/get_items/$user_id";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	
	
	public function count_items($user_id)
	{
		$webservices = $this->config->item('service');
		$url = $webservices."services/count_items/$user_id";
	      // echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function addtocart($user_id, $prod_id, $qty)
	{
		$webservices = $this->config->item('service');
		$url = $webservices."services/addtocart/$user_id/$prod_id/$qty";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function del_item($id)
	{
		$webservices = $this->config->item('service');
		$url = $webservices."services/del_item/$id";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function check_out($user_id, $data)
	{
		$postdata = http_build_query($data);
		//echo $postdata; exit;
		$webservices = $this->config->item('service');
		$url = $webservices."services/check_out/$user_id";
		//echo $url; exit;
		$res = $this->post_data($url, $postdata);
	//echo $res;exit;
		return $res;
	}
	
	public function search($id, $string, $page)
	{
		$post = array('string' => $string);
		$postdata = http_build_query($post);
		//echo $postdata; exit;
		$id = $id ? $id : 0;
		$webservices = $this->config->item('service');
		$url = $webservices."services/search/$id/$page";
		//echo $url; exit;
		$res = $this->post_data($url, $postdata);
		//echo $res;
		return $res;
	}
	
	public function get_comments($id)
	{
		$webservices = $this->config->item('service'); 
		$url = $webservices."services/get_comments/$id";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function comment($prod_id, $cus_id, $comment)
	{
		$post = array('comment' => $comment);
		$postdata = http_build_query($post);
		$webservices = $this->config->item('service');
		$url = $webservices."services/comment/$prod_id/$cus_id";
		//echo $url; exit;
		$res = $this->post_data($url, $postdata);
		//echo $res;
		return $res;
	}
	
	public function best_sell()
	{
		$webservices = $this->config->item('service'); 
		$url = $webservices."services/gettop_seller/";
		//echo $url; exit;
		$res = json_decode(file_get_contents($url));
		return $res;
	}
	
	public function post_data($url='', $postdata)
	{
		//echo $postdata; exit;
		$opts = array('http' =>
				  	      array(
					          'method'  => 'POST',
					          'header'  => 'Content-type: application/x-www-form-urlencoded',
					          'content' => $postdata
					      )
					  );
		
		$context  = stream_context_create($opts);
		//echo $context; exit;
		$result = json_decode(file_get_contents($url, false, $context));
		//echo $result; exit;
		
		return $result;
	}
}
