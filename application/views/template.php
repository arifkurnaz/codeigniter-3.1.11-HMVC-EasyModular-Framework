<<<<<<< HEAD
 <?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('shared/header', isset($headerOptions)&&!empty($headerOptions)?$headerOptions:[]);
$this->load->view('shared/components/breadcrumb',isset($breadcrumbOptions)&&!empty($breadcrumbOptions)?$breadcrumbOptions:[] );

/*
if($isPermisions)
 $viewFile= ($privileges['show']) ? $viewFile : 'forbidden';*/


//$this->load->view('pages/' . $viewFolder . '/' . $viewFile, isset($contentOptions)&&!empty($contentOptions) ? $contentOptions : []);

 $this->load->moduleView('content');
=======
 <?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('shared/header', isset($headerOptions)&&!empty($headerOptions)?$headerOptions:[]);
$this->load->view('shared/components/breadcrumb',isset($breadcrumbOptions)&&!empty($breadcrumbOptions)?$breadcrumbOptions:[] );

/*
if($isPermisions)
 $viewFile= ($privileges['show']) ? $viewFile : 'forbidden';*/


//$this->load->view('pages/' . $viewFolder . '/' . $viewFile, isset($contentOptions)&&!empty($contentOptions) ? $contentOptions : []);

 $this->load->moduleView('content');
>>>>>>> 6f5fb90d5b0dcd3c3badbd365a6e365d33a947aa
 $this->load->view('shared/footer', isset($footerOptions) && !empty($footerOptions) ? $footerOptions : [],false);