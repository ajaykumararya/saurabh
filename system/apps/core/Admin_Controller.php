<?php
class Admin_Controller extends MX_Controller{
    function __construct(){
        parent :: __construct();

        $thisMethod = strtolower($this->router->fetch_method());
        $thisController = strtolower($this->router->fetch_class());

        
      
        if(!isset($_SESSION["lang"])){
            $result['language'] = 'english';//$this->db->select('*')->where('default', '1')->get('language')->row_array(); // выборка ленгвиж из таблицы настройки сайта
        }else{ 
            $result['language'] = $_SESSION["lang"]; 
        }
        $directory = 'modules/admin/language/'.$result['language']; // вместо language/russian дефолт ленгвиж из базы
        //
        $this->load->library('common/language',$directory);
        $this->language->load('common/login');
        
        $this->lang->load($result['language'],$result['language']);
    }

    function testing(){
        echo 'hello saurabh';
    }

    function testing1(){
        echo 'kk';
    }

    
}

?>