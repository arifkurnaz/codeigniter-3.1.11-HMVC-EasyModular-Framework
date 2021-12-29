# codeigniter-3.1.11-HMVC-EasyModular-Framework
HMVC for Codeigniter 3.1.11 Modular Programming with codeigniter 3 

Modular Extensions - HMVC
Modular Extensions makes the CodeIgniter PHP framework modular. Modules are groups of independent components, typically model, controller and view, arranged in an application modules sub-directory that can be dropped into other CodeIgniter applications.

HMVC stands for Hierarchical Model View Controller.

Module Controllers can be used as normal Controllers or HMVC Controllers and they can be used as widgets to help you build view partials.


What is New ?

/*
 *---------------------------------------------------------------
 * Modules DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "modules"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * NO TRAILING SLASH!
 */
	$modules_folder = 'modules';

  You can change  location modules folder  changing in index.php

in Application/config/config.php file have  config for use hmvc 

$config['modules_enable'] =TRUE;

and for choose default  module
in Application/config/routes.php file have  routes for use hmvc

$route['default_module'] = 'home'; 

Folder Structure Example 


modules
 /{modulname}
    /config
    /controllers
    /helpers
    /libraries
    /models
    /views

Added new function for load view 

default Loader class scanning in application/views folder and current module views folder for load view. if you want to load just in  module view  just  use this function

<?php

class Home extends CI_Controller {


   public function index(){
	   $this->load->moduleView('welcome_message');
   }

}
