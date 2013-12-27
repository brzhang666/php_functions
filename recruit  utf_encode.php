private function utf_encode($data){
		
		if(is_array($data)){
			foreach ( $data as $key => $value ) {
       			$data[$key]=$this->utf_encode($value);
			}
			return $data;
		}
		if(is_object($data)){
			foreach ( $data as $key => $value ) {
       			$data->$key=$this->utf_encode($value);
			}
			return $data;
		}else{
			return iconv('gbk','utf-8',$data);
		}
	}
