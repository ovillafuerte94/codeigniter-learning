<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $smarty;

    public function __construct()
    {
        parent::__construct();

        /* Load and configure Smarty */
        require_once APPPATH . 'third_party/smarty/libs/Smarty.class.php';
        $this->smarty = new Smarty();

        /* Set Smarty template and compilation folders */
        $this->smarty->setTemplateDir(APPPATH . 'views/smarty_templates');
        $this->smarty->setCompileDir(APPPATH . 'views/smarty_compile');

        $this->smarty->assign('CI', $this);
    }
}