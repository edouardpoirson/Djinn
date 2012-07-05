<?php 
class Post extends AppModel{
	
	public function afterFind($data){
		foreach($data as $k=>$d){
			if(isset($d['Post']['slug']) && isset($d['Post']['id'])){
				$d['Post']['link'] = array(
				'controller'	=> 'pages',
				'action'	=> 'show',
				'id'		=> $d['Post']['id'],
				'slug'		=> $d['Post']['slug']
				
				);
			}
			$data[$k] = $d;
		}
		
		return $data;
	}
	
}