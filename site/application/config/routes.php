<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['sub_cat/(:num)'] 			= 'main/subcat/$1';
$route['sub_cat/(:num)/(:num)'] 	= 'main/subcat/$1/$2';
$route['subcat_acc/(:num)/(:num)'] 	= 'main/subcat/$1/$2';
$route['register'] 					= 'main/register';
$route['login'] 					= 'main/login';
$route['cart_items'] 				= 'main/cart_prods';
$route['product/(:num)'] 			= 'main/product_det/$1';
$route['addtocart/(:num)/(:num)'] 	= 'main/addto_cart/$1/$2';
$route['logout'] 					= 'main/logout';
$route['del_item/(:num)'] 			= 'main/del_item/$1';
$route['check_out'] 				= 'main/check_out';
$route['contact'] 					= 'main/contact';
$route['about'] 					= 'main/about';
$route['search'] 					= 'main/search';
$route['search/(:num)'] 			= 'main/search/$1';
$route['comment/(:num)'] 			= 'main/add_comment/$1';
$route['lang/(:any)'] 		        = 'main/change_lang/$1';
$route['delivery'] 					= 'main/delivery';
$route['policy'] 					= 'main/policy';
$route['support'] 					= 'main/support';
$route['customerst'] 			    = 'main/customerst';
$route['trem'] 					    = 'main/trem';
$route['sendmail'] 					= 'main/sendmail';


