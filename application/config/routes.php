<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $route['pages/home'] = 'pages/home';
$route['posts/login'] = 'posts/login';
$route['posts/register'] = 'posts/register';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1'; //can go to an post (single page)
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view'; //home
$route['(:any)'] = 'pages/view/$1'; //can go to any pages
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
