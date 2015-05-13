<?php

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index(){
		$news_list = $this->news_model->get_news_list();
		$news_other_list = $this->news_model->get_news_list();
		
		//判斷PC/Mobile瀏覽器
		$this->load->library('user_agent');
		if ($this->agent->is_mobile())
		{
			$agent = 'm';
			$agent_temp = '_m';
		}
		else
		{
			$agent = '';
			$agent_temp = '';
		}
			
		$data['news_list'] = $news_list;
		$data['news_other_list'] = $news_list;
		
		$data['global']['style'][0] = 'news'.$agent_temp;
		$data['page'] = 'news';
		$data['newsid'] = 0;
		$data['temp']['header_up'] = $this->load->view('temp/header_up'.$agent_temp, $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down'.$agent_temp, $data, TRUE);
		if($agent !== 'm'){
			$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		}
		$data['temp']['footer'] = $this->load->view('temp/footer'.$agent_temp, $data, TRUE);
		
		$this->load->view('news/index'.$agent_temp, $data);
	}
	
	public function view($newsid = 0){
		
		$news = $this->news_model->get_news($newsid);
		$news_other_list = $this->news_model->get_news_list();
		
		$data['news'] = $news;
		$data['news_other_list'] = $news_other_list;
		$data['global']['style'][0] = 'news';
		$data['page'] = 'news';
		$data['temp']['header_up'] = $this->load->view('temp/header_up', $data, TRUE);
		$data['temp']['header_down'] = $this->load->view('temp/header_down', $data, TRUE);
		$data['temp']['topheader'] = $this->load->view('temp/topheader', $data, TRUE);
		$data['temp']['footer'] = $this->load->view('temp/footer', $data, TRUE);
		
		$this->load->view('news/index', $data);

	}
}

?>