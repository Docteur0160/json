<?php

class json{

	private $json = array('dir' => null, 'file' => null);
	// dirname(__FILE__)
	
	public function save($new){
		file_put_contents($this->json['dir'].'//'.$this->json['file'], json_encode($new));
		return $this->load();
	}

	public function load(){
		return json_decode(file_get_contents($this->json['dir'].'//'.$this->json['file']), true);
	}

	protected function json_conf($dir , $file){
		$this->json['dir'] = $dir;
		$this->json['file'] = $file;
	}

}

?>