<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
    public function new(){
        $this->load->view('new');
    }
    public function create(){
        echo "This feature is coming soon!";
    }
    public function count(){
        if($this->session->userdata('counter'))
        {
            $counter = $this->session->userdata('counter');
            $this->session->set_userdata('counter', $counter + 1);
            redirect('users/index');
        }
        else
        {
            $this->session->set_userdata('counter', 0);
            redirect('users/index');
        }
    }
    public function reset(){
        $this->session->set_userdata('counter', 1);
        redirect('users/index');
    }
    public function say($word,$no_of_times){
        $data['word'] = $word;
        $data['times'] = $no_of_times;
        $this->load->view('say',$data);
    }
    public function mprep()
     {
           $view_data = array(
               'name' => "Michael Choi",
               'age'  => 40,
               'location' => "Seattle, WA",
               'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
           );
           $this->load->view('mprep', $view_data);
     }
}
