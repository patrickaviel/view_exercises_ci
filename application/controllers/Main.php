<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "I am main Class!";
	}
	public function add($num_1,$num_2){
		echo $num_1+$num_2;
		
	}
	public function hello(){
		echo "Hello World";
	}
    public function say(){
        echo "HI";
    }
    public function say_anything($word){
        echo strtoupper($word);
    }
    public function danger(){
		redirect("/main");
	}
	public function world(){
        $this->load->view('world');
    }
    public function ninjas($no){
        $data['no'] = $no;
        $this->load->view('ninjas',$data);
    }
    public function users(){
        $this->load->view('index');
    }

}
