<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html*/

$route['index'] = 'user/index';
$route['home'] = 'user/index';
$route['all_article'] = 'user/all_article';
$route['login'] = 'login/index';

$route['newuser'] = 'user/registration_page';
$route['login/success'] = 'login/admin_login';
$route['admin/index'] = 'admin/index';
$route['admin/article'] = 'article/my_article_page';
$route['admin/add_article'] = 'article/add_article_page';

$route['logout'] = 'admin/logout';
$route['admin/article_update'] = 'article/article_update';
$route['admin/article/add'] = 'article/article_add';


$route['default_controller'] = "User";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */