<?php
	class bfiThumb{
		
		public static function raw($url, array $params = array(), $single = true){
			return bfi_thumb($url, $params, $single);
		}
		
		public static function always($url, array $params = array(), $single = true){
			//if((empty($url) || get_headers($url)[0] == 'HTTP/1.0 404 Not Found') && (getenv('ENVIRONMENT') != 'production')){
			if(empty($url) && (getenv('ENVIRONMENT') != 'production')){
	
					$url = 'https://unsplash.it';
	
					if(isset($params['grayscale']))
						$url .= '/g';
	
					if(isset($params['width']))
						$url .= '/' . $params['width'];
					else
						$url .= '/' . rand(1, 12) . '00';
	
					if(isset($params['height']))
						$url .= '/' . $params['height'];
					elseif(isset($params['width']))
						$url .= '/' . (($params['width'] / 16 ) * 9 );
					else
						$url .= '/' . rand(1, 12) . '00';
	
					//$url .= '?image=' . rand(0, 1084);
	
				}
			return bfi_thumb($url, $params, $single);
		}
		
	}