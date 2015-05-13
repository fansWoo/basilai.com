<?php

class Setting_model extends CI_Model {
    
    private $keyword;
    private $value;

	public function __construct()
	{
	}
	
    public function construct($arg = array('keyword' => '', 'value' => '') )
    {
        $keyword = $arg['keyword'];
        $value = $arg['value'];
		$data = array(
			'keyword' => $keyword,
			'value' => $value
		);
		$this->db->where('keyword', $keyword);
		$this->db->update('setting', $data);
    }
    
    public function update()
    {
        $keyword = $this->keyword;
        $value = $this->value;
		$data = array(
			'keyword' => $keyword,
			'value' => $value
		);
		$this->db->where('keyword', $keyword);
		$this->db->update('setting', $data);
    }
}