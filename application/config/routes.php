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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

/**
 * URI like '/en/about' -> use controller 'about'
 * @global <type> $GLOBALS['route']
 * @name $route
 */
$route['^(es|ru|en)/catalogo/(:any)'] = "product/show/$2";
$route['^(es|ru|en)/contact/(:any)'] = "contact/$2";
$route['^(es|ru|en)/home/(:any)'] = "home/$2";
$route['^(es|ru|en)/catalogo'] = "product/catalogo";
$route['^(es|ru|en)/formulario'] = "contact/form";
$route['^(es|ru|en)/map'] = "contact/map";
//$route['^(es|ru|en)/(.+)$'] = "$2";

/**
 * URI like '/en -> use default controller
 * @global <type> $GLOBALS['route']
 * @name $route  '/en' and '/fr' URIs -> use default controller
 */
$route['^(es|ru|en)$'] = $route['default_controller'];

/* Examples route for Exampe Module */
$route['admin/example/(:any)'] = "example/$1";
$route['^(es|ru|en)/admin/example/(:any)'] = "example/$2";

/**
 * Uri like admin/login -> go to -> user/login
 * Uri like admin/user/delete -> go to -> user/delete
 */
$route['admin'] = "user/login";
$route['^(es|ru|en)/admin/login'] = "user/login";
$route['^(es|ru|en)/admin/user/(:any)'] = "user/$2";

/* Template Settings */
$route['admin/template/(:any)'] = "template/$1";
$route['^(es|ru|en)/admin/template/(:any)'] = "template/$2";

/* Catalogue routes */
$route['admin/product_image/(:any)'] = "product_image/$1";
$route['^(es|ru|en)/admin/product_image/(:any)'] = "product_image/$2";
$route['admin/product_category/(:any)'] = "product_category/$1";
$route['^(es|ru|en)/admin/product_category/(:any)'] = "product_category/$2";
$route['admin/product/(:any)'] = "product/$1";
$route['^(es|ru|en)/admin/product/(:any)'] = "product/$2";

/* Catalogue routes */
$route['admin/contact/(:any)'] = "contact/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */