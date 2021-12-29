 <?php

defined('BASEPATH') or exit('No direct script access allowed');

$this->load->view('shared/header', isset($headerOptions)&&!empty($headerOptions)?$headerOptions:[]);
$this->load->view('shared/components/breadcrumb',isset($breadcrumbOptions)&&!empty($breadcrumbOptions)?$breadcrumbOptions:[] );

/*
if($isPermisions)
 $viewFile= ($privileges['show']) ? $viewFile : 'forbidden';*/


//$this->load->view('pages/' . $viewFolder . '/' . $viewFile, isset($contentOptions)&&!empty($contentOptions) ? $contentOptions : []);

 $this->load->moduleView('content');
 $this->load->view('shared/footer', isset($footerOptions) && !empty($footerOptions) ? $footerOptions : [],false);