<?php
/**
 * Created by PhpStorm.
 * User: thien
 * Date: 23/09/2017
 * Time: 10:40
 */

class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('acount_model');
        $this->load->model('trung_tam_model');
    }

    /**
     *
     */
    function index(){
        $data['template']='frontend/register';
        $this->load->view('index',$data);
    }

    /**
     *
     */
    function create_acount(){

        if($this->input->post()){
            $acount=array();
            $head=array('username','password','email');
            try {
                foreach ($head as $item){
                    $acount[$item]=$_POST[$item];
                }
                if($_POST['check_acount']==='1'){
                    $this->create_trung_tam($acount);
                }else{
                    $this->create_hoc_vien($acount);
                }
            }
            //catch exception
            catch(Exception $e) {
                echo 'Message: ' .$e->getMessage();
            }
        }

    }

    /**
     * @param null $acount
     */
    private function create_trung_tam($acount=NULL){
            echo "tao acount trung tam";
            echo '<pre>';
            var_dump($acount);
            echo '</pre>';
            try{
                $this->acount_model->insert($acount);
            }catch (Exception $exception){

            }

    }

    /**
     * @param null $acount
     */
    private function create_hoc_vien($acount=NULL){
            echo 'tao acount hoc vien';
    }

}