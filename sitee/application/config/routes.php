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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller']    = 'artella';
$route['404_override'] = '';
$route['500_override'] = 'site/500_error';

$route['translate_uri_dashes']  = FALSE;
$route['course/(:num)']         = 'artella/get_mycourse/$1';
$route['course/(:num)/(:any)']  = 'artella/get_mycourse/$1/$2';
$route['discussion/(:num)']     = 'artella/discussion_area/$1';
$route['discussion/(:num)/(:num)'] = 'artella/discussion_area/$1/$2';
$route['insert_comment/(:num)'] = 'artella/insert_comment/$1';
$route['insert_reply/(:num)']   = 'artella/insert_reply/$1';
$route['repeated_questions/(:num)']   = 'artella/repeated_questions/$1';
$route['repeated_questions/(:num)/(:num)']   = 'artella/repeated_questions/$1/$2';
$route['quiz/(:num)']           = 'artella/quiz/$1';
$route['quiz/(:num)/(:num)']    = 'artella/quiz/$1/$2';
$route['download_attach/(:num)'] = 'artella/download_attach/$1';
$route['download_license/(:num)'] = 'artella/download_license/$1';
$route['insert_post/(:num)']    = 'artella/insert_post/$1';
$route['Draw']                  = 'artella/draw';
$route['Photograpy']            = 'artella/photograpy';
$route['Design']                = 'artella/design';
$route['Montage']               = 'artella/montage';


$route['Draw/(:num)'] 							= 'artella/draw/$1';
$route['Photograpy/(:num)'] 					= 'artella/photograpy/$1';
$route['Design/(:num)'] 						= 'artella/design/$1';
$route['Montage/(:num)'] 						= 'artella/montage/$1';
$route['rating/(:num)/(:num)'] 					= 'artella/rating/$1/$2';

$route['VisualTricks/(:num)'] 			= 'artella/visualtricks/$1';
$route['VisualTricks'] 					= 'artella/visualtricks';
$route['gallery'] 						= 'artella/all_gallery';
$route['gallery/(:num)'] 				= 'artella/all_gallery/$1';




$route['studentDraw'] 							= 'artella/stu_draw';
$route['studentPhotograpy'] 					= 'artella/stu_photograpy';
$route['studentDesign'] 						= 'artella/stu_design';
$route['studentMontage'] 						= 'artella/stu_montage';
$route['studentDraw/(:num)'] 					= 'artella/stu_draw/$1';
$route['studentPhotograpy/(:num)'] 				= 'artella/stu_photograpy/$1';
$route['studentDesign/(:num)'] 					= 'artella/stu_design/$1';
$route['studentMontage/(:num)'] 				= 'artella/stu_montage/$1';
$route['studentrating/(:num)/(:num)'] 			= 'artella/stu_rating/$1/$2';
$route['studentVisualTricks/(:num)'] 			= 'artella/stu_visualtricks/$1';
$route['studentVisualTricks'] 					= 'artella/stu_visualtricks';
$route['studentgallery'] 						= 'artella/stu_all_gallery';
$route['studentgallery/(:num)'] 				= 'artella/stu_all_gallery/$1';

$route['category/(:num)'] 				= 'artella/get_category/$1';

$route['search'] 				= 'artella/search';







$route['verify_account/(:any)'] 		= 'site/verify_account/$1';
$route['switch_lang'] 					= 'welcome/swich_lang/';
$route['logout'] 			    		= 'site/logout/';
$route['login'] 						= 'site/login/';
$route['signup'] 						= 'site/signup/';

/*public users
$route['home'] 				 			= 'site';
$route['switch_lang'] 					= 'welcome/swich_lang/';
$route['logout'] 			    		= 'site/logout/';
$route['login'] 						= 'site/login/';
$route['signup'] 						= 'site/signup/';
$route['jobs/(:num)'] 					= 'site/categories_main/$1';
$route['jobs'] 							= 'site/categories_main';
$route['forgot_password'] 				= 'site/forgot_password';
$route['reset_pass/(:any)'] 			= 'site/reset_pass/$1';
$route['resend_code/(:any)'] 			= 'site/resend_code/$1';
$route['facebook'] 						= 'site/facebook';
$route['blog'] 							= 'site/blog';
$route['admin_view/(:any)'] 			= 'site/admin_view/$1';
$route['dubarah/(:any)'] 				= 'site/apply_job/$1';
$route['job/(:any)'] 					= 'site/apply_job/$1';

$route['verify_account/(:any)'] 		= 'site/verify_account/$1';
$route['complete_account'] 				= 'site/complete_account';
$route['send_activation'] 				= 'site/send_activation';
$route['aboutus'] 						= 'site/aboutus';
$route['team'] 							= 'site/team';
$route['vision'] 						= 'site/vision';
$route['checkcv'] 						= 'site/checkcv';
$route['terms'] 						= 'site/terms';
$route['privacy'] 						= 'site/privacy';
//Notifications
$route['read_notifications'] 			= 'panel/notifications/read_notifications';
$route['get_notifications'] 			= 'panel/notifications/get_notifications';


//logedin users
$route['get_city/(:num)'] 		= 'site/get_city/$1';
$route['sub/(:num)'] 			= 'panel/user/sub/$1';
$route['newrole/(:num)']   		= 'panel/user/newrole/$1';
$route['add_dubarah'] 			= 'panel/user/add_dubarah';
$route['add_job'] 				= 'panel/user/add_dubarah';
$route['add_business'] 			= 'panel/user/add_business';

$route['my_profile'] 			= 'panel/user/my_profile';
$route['my_dubarah'] 			= 'panel/user/my_dubarah';
$route['dubarah'] 				= 'site/dubarah';
$route['my_dubarah/(:num)'] 	= 'panel/user/my_dubarah/$1';
$route['my_applicants/(:num)/(:num)'] 	= 'panel/user/my_applicants/$1/$2';
$route['my_applicants/(:num)'] 			= 'panel/user/my_applicants/$1';
$route['unpublish_dubarah/(:num)'] 		= 'panel/user/unpublish_dubarah/$1';
$route['edit_dubarah/(:num)'] 		    = 'panel/user/edit_dubarah/$1';
$route['delete_dubarah/(:num)'] 		= 'panel/user/delete_dubarah/$1';
$route['resume/(:any)'] 				= 'panel/user/resume/$1';
$route['download/(:num)'] 				= 'panel/user/download/$1';
$route['up_img'] 				= 'panel/user/up_img';
//$route['my_profile'] 				= 'site/my_profile';
$route['reregister'] 			= 'site/reregister';
$route['done'] 					= 'site/done';
$route['done_virfed'] 			= 'site/done_virfed';
$route['done_dubarah'] 			= 'site/done_dubarah';
$route['need_activ'] 			= 'site/need_activ';

*/$route['done'] 					= 'site/done';
