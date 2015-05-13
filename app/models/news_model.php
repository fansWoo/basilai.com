<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_news($newsid = 0)
	{
		$this->db->join('news_field', 'news.newsid = news_field.newsid', 'left');
		$query = $this->db->get_where('news', array('news.newsid' => $newsid));
		$news = $query->row_array();
		$news['text'] = html_code_replace(array('text' => $news['text'], 'nl2br' => TRUE, 'meta_img' => TRUE));
		
		return $news;
	}
	
	public function get_news_list($slug = FALSE)
	{
		if ($slug === FALSE){
			$this->db->join('news_field', 'news.newsid = news_field.newsid', 'left');
			$query = $this->db->get('news');
			$news_list = $query->result_array();
		}
		else
		{
			$this->db->join('news_field', 'news.newsid = news_field.newsid', 'left');
			$query = $this->db->get('news');
			$news_list = $query->result_array();
		}
		
		foreach($news_list as $key => $value)
		{
			$value['text'] = html_code_replace(array('text' => $value['text'], 'nl2br' => TRUE, 'meta_img' => TRUE));
			$news_list2[] = $value;
		}
		
		$news_list = $news_list2;
		return $news_list;
	}
	
	public function add_news()
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);
		
		return $this->db->insert('news', $data);
	}
	
}