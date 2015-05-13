<?php
class Sample extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('sample_model');
	}
	
	public function index()
	{
		$sample = $this->sample_model->get_sample_list();
		foreach($sample as $key => $value){
			$value['href'] = base_url("sample/view/".$value['slug']);
			$data['sample'][] = $value;
		}
		
		$data['global_title'] = 'Sample';
		$data['global_text'] = 'Sample text';

		$this->load->library('parser');
		$this->parser->parse('temp/header', $data);
		$this->parser->parse('sample/index', $data);
		$this->parser->parse('temp/footer', $data);
	}
	
	public function show_page($page = 'home')
	{
		$page;//page為指定頁面
		if($page === 'home')
		{
		}
		
		$data['global_title'] = 'Sample';
		$data['global_text'] = 'Sample text';

		$this->load->library('parser');
		$this->parser->parse('temp/header', $data);
		$this->parser->parse('sample/'.$page, $data);
		$this->parser->parse('temp/footer', $data);
	}
	
	public function view($slug){
		$data['sample_item'] = $this->sample_model->get_sample($slug);

		if (empty($data['sample_item'])){
			show_404();
		}

		$data['global_title'] = $data['sample_item']['title'];

		$this->load->library('parser');
		$this->parser->parse('temp/header', $data);
		$this->parser->parse('sample/view', $data);
		$this->parser->parse('temp/footer', $data);
	}
	
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['global_title'] = 'Create a sample item';
		
		$this->form_validation->set_rules('title', '標題', 'required');
		$this->form_validation->set_rules('text', '內文', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->library('parser');
			$this->parser->parse('temp/header', $data);	
			$this->parser->parse('sample/create', $data);
			$this->parser->parse('temp/footer', $data);
			
		}
		else
		{
			$this->sample_model->add_sample();
			$url = base_url('sample/show_page/success');
			header("Location: $url");
		}
	}
}