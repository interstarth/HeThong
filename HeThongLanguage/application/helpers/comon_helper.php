<?php 
	function public_url($url='')
	{
		return base_url().'public/'.$url;
	}
	function pre($data){
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}
    function admin_url($url=''){
        return base_url('index.php/backend').'/'.$url;
    }
?>