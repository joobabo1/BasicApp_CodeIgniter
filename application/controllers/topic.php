<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('topic_model');
	}

	public function index()
	{
		$this->_head();

		$this->load->view('main');
		$this->load->view('footer');
	}

	public function get($id){
		
		$topic = $this->topic_model->get($id);

		$this->_head();

		$this->load->helper(array('url', 'html', 'korean'));
		$this->load->view('get', array('topic' => $topic));
		$this->load->view('footer'); 
	}

	public function add(){
		
		$this->_head();

		$this->load->library('form_validation'); 

		$this->form_validation->set_rules('title', 'Subject', 'required');
		$this->form_validation->set_rules('description', 'Message', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('add');
		}
		else
		{
			$topic_id = $this->topic_model->add($this->input->post('title'), $this->input->post('description'));

			$this->load->helper('url');

			redirect('/topic/get/'.$topic_id);

			echo "Success";
		}

		$this->load->view('footer'); 
	}

	function _head(){
		$this->load->config('opentutorials');
		$this->load->view('head');
		$topics = $this->topic_model->gets();
		$this->load->view('topic_list', array('topics' => $topics));
	}
}

?>