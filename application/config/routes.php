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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index'] = 'welcome/index';
$route['home'] = 'welcome/index';

$route['about'] = 'welcome/about';
$route['services'] = 'welcome/gallary';
$route['ac-repair'] = 'welcome/blog';
$route['installation'] = 'welcome/feedback';
$route['duct-cleaning'] = 'welcome/insertfeedback';
$route['coil-cleaning'] = 'welcome/air_conditioner';
$route['faq'] = 'welcome/split_ac';
$route['blog'] = 'welcome/ac_outdoor_unit';
$route['contact'] = 'welcome/ac_indoor_unit';
$route['ac-quotes'] = 'welcome/ac_installation';
$route['blog1'] = 'welcome/ac_grills';
$route['blog2'] = 'welcome/sanitary_work';
$route['blog3'] = 'welcome/pipe_fixing';
$route['blog4'] = 'welcome/water_leakage';
$route['blog5'] = 'welcome/pipe_repairs';
$route['blog6'] = 'welcome/post_plumbing';
$route['terms-condition'] = 'welcome/pipe_instalation';
$route['privacy-policy'] = 'welcome/flooring_tiling';
$route['Water-Pumps-Repair'] = 'welcome/granite_tiles';
$route['Air-Blower-Repair'] = 'welcome/mosaic_tiles';
$route['Exhaust-Fan-Repair'] = 'welcome/marble_tiles';
$route['Cofee-machine-Repair'] = 'welcome/slate_tiles';
$route['Control-Board-Repair'] = 'welcome/skirting_grounting';
$route['Transformer-Repair'] = 'welcome/bathroom_renovations';
$route['Vaccume-Cleaner-Repair'] = 'welcome/electrical_work';
$route['Power-Tools-Repair'] = 'welcome/cabling_work';
$route['Electromechanical-Equipment-Installation'] = 'welcome/light_fitings';
$route['power-sockets'] = 'welcome/power_sockets';
$route['DOUBLE-COAT-PAINTING'] = 'welcome/wallpaper_fixing';
$route['fenomastic-paint'] = 'welcome/fenomastic_paint';
$route['wood-polishing'] = 'welcome/wood_polishing';
$route['door-polishing'] = 'welcome/door_polishing';
$route['cabnet-polishing'] = 'welcome/cabnet_polishing';
$route['janitorial-services'] = 'welcome/janitorial_services';
$route['deep-cleaning'] = 'welcome/deep_cleaning';
$route['Carpentry-Wood-Flooring-Works'] = 'welcome/Furniture_Cleaning';
$route['False-Ceilling-Light-Partitions'] = 'welcome/Damaged_Ceilings';
$route['Engraving-Ornamentation-Works'] = 'welcome/Commercial_Plastering';

$route['Floor-Wall-Tilling-Works'] = 'welcome/single_blog';
$route['painting-services'] = 'welcome/painting_services';

$route['contact'] = 'welcome/contact';
$route['why'] = 'welcome/why';
$route['air-condition-repair-yearly-maintenance-contract'] = 'welcome/ac_maintenance';
$route['Plumber-Sanitary-Work'] = 'welcome/Plumbing';
$route['carpentry-services'] = 'welcome/heating';
$route['hvac-istallation'] = 'welcome/hvac';
$route['Electrical-Installation-and-Repair-Services'] = 'welcome/Electrical';

$route['dust-cleaning'] = 'welcome/duct_installation';
$route['Building-General-Maintenance-Contract'] = 'welcome/Building';
$route['blog-single'] = 'welcome/blog_single';

$route['Paint-Decor-Painting'] = 'welcome/Paint';



$route['INTERIOR-EXTERIOR-PLASTERERS'] = 'welcome/INTERIOR';
$route['commercial-and-residential-building-cleaning-services-in-dubai'] = 'welcome/buiilding';
$route['plaster-works'] = 'welcome/plaster';
$route['faq'] = 'welcome/faq';
$route['get-appointment'] = 'welcome/get_appointment';

$route['blog-detail/(:any)']='welcome/blog_detail/$1';
$route['add_blogs'] = 'welcome/add_blogs';
$route['insertblog'] = 'welcome/insertblog';
$route['admin'] = 'welcome/admin';
$route['blogdelete/(:any)'] = 'welcome/blogdelete/$1';
$route['blog_detail1'] = 'welcome/blog_detail1';

