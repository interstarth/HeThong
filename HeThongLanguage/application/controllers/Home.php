<?php
/**
 * Created by PhpStorm.
 * User: thien
 * Date: 18/09/2017
 * Time: 11:04
 */

class Home extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('acount_model');
    }
    function index(){
        $data['template']='frontend/content';
        $this->load->view('index',$data);
    }
}