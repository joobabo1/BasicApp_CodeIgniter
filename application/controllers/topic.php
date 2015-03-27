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

		echo $this->input->post('title');
		echo '/';
		echo $this->input->post('description');

		$this->load->view('add');

		//$topic = $this->topic_model->get($id);
		//$this->load->helper(array('url', 'html', 'korean'));
		//$this->load->view('get', array('topic' => $topic));
		$this->load->view('footer'); 
	}

	function _head(){
		$this->load->view('head');
		$topics = $this->topic_model->gets();
		$this->load->view('topic_list', array('topics' => $topics));
	}
}

?>