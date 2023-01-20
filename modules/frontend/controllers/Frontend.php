<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        
        $this->load->library('common/main_lib');
        $this->load->database();
    }
      
    public function index()
	{
		// $this->load->view('welcome_message_hmvc',['heading' => 'Welcome Codeigniter'] );
        $this->load->view('index');
	}
   

    
    public function hmvc()
    {
        $data = array(
            'title' => 'Первая страница из шаблона',
            'name' => 'Александр Мороз',
            'compani' => 'RAMStudio',
            'url' => 'http://moroz.rv.ua',
            'heading' => 'Страница из модуля welcome - Welcome to CodeIgniter HMVC!'
        );
        $this->load->view('welcome_message', $data);
    }
    
    public function parse()
    {
        $this->load->library('parser');
        $data = array(
            'title' => 'Первая страница из шаблона',
            'name' => 'Александр Мороз',
            'compani' => 'RAMStudio',
            'url' => 'http://moroz.rv.ua',
            'heading' => 'Страница из шаблона тем (шаблон acme)- Welcome to CodeIgniter HMVC!'
        );
        
        $this->parser->parse(DIR_THEMS.'/welcome_message_header.tpl', $data);
        $this->parser->parse(DIR_THEMS.'/welcome_message_tpl.tpl', $data);
    }
    
}
