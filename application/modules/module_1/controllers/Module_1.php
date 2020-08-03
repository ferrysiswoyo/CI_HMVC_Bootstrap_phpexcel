<?php

/**
* Testing module
*/
class Module_1 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
                $this->load->model('model_1');
	}

	public function index(){
            echo "<h1>Module Test</h1>";
            echo "<p>Modul ini adalah modul HMVC pertama saya</p>";
            echo "<p>Tanpa menggunakan view dan model</p>";
            echo "<p>Lokasi di application/modules/module_1/controllers/Module_1.php</p><br>";
            
            $this->load->view('view_module_1');
            echo '<br>';
            $this->hello();
            $this->model_1->add("");
            $this->load->model($model);
	}

	public function hello(){
		echo "Hello";
	}
}

?>