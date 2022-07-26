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

//SITE ROUTES

$route['default_controller'] = 'site';
$route['404_override'] = 'site/error_404';

$route['page'] = 'site/page';
$route['template'] = 'site/template';
$route['template/(:any)'] = 'site/template/$1';
$route['dashboard'] = 'site/dashboard';

//ACTION ROUTES

$route['login'] = 'action/login_account';
$route['login/(:any)'] = 'action/login_account/$1';

$route['edit'] = 'action/edit_account';
$route['edit/(:any)'] = 'action/edit_account/$1';
$route['edit/(:any)/(:any)'] = 'action/edit_account/$1/$2';

$route['change_password'] = 'action/change_password';
$route['change_password/(:any)'] = 'action/change_password/$1';
$route['change_password/(:any)/(:any)'] = 'action/change_password/$1/$2';

$route['register'] = 'action/register_account';
$route['register/(:any)'] = 'action/register_account/$1';

$route['delete_account/(:any)'] = 'action/delete_account/$1';
// $route['logout'] = 'action/logout_account';

$route['new'] = 'action/create_transaction';
$route['new/(:any)'] = 'action/create_transaction/$1';

$route['track'] = 'action/track_transaction';
$route['track/(:any)'] = 'action/track_transaction/$1';
$route['transaction/view/(:any)'] = 'action/transaction_view/$1';

$route['print_invoice/(:any)'] = 'action/print_invoice/$1';

$route['update_address/(:any)'] = 'action/update_address/$1';

$route['amend/(:any)'] = 'action/amend_transaction/$1';
$route['amend/(:any)/(:any)'] = 'action/amend_transaction/$1/$2';

$route['continue/(:any)'] = 'action/continue_transaction/$1';
$route['allow/(:any)'] = 'action/allow_transaction/$1';

$route['accept/(:any)/(:any)'] = 'action/approve_transaction/$1/$2';
$route['decline/(:any)/(:any)'] = 'action/decline_transaction/$1/$2';


$route['transaction-accept/(:any)/(:any)'] = 'action/trigger_approve/$1/$2';
$route['transaction-decline/(:any)/(:any)'] = 'action/trigger_decline/$1/$2';

$route['reset/(:any)'] = 'action/reset_transaction/$1';

$route['answer/(:any)'] = 'action/approve_transaction_no_log/$1';

$route['respond/(:any)'] = 'action/react_transaction/$1';

$route['erase/(:any)'] = 'action/delete_transaction/$1';
// Routes options
$route['translate_uri_dashes'] = TRUE;

$route['test'] = 'action/test';

$route['accept/(:any)/(:any)'] = 'action/approve_transaction/$1/$2';
$route['accept/(:any)/(:any)'] = 'action/approve_transaction/$1/$2';