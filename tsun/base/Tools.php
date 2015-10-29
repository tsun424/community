<?php
	/**
	*	public methods
	************************************************************************
	*	@Author Xiaoming Yang
	*	@Initial date	28-09-2015 23:08
	************************************************************************
	*	update time			editor				updated information
	*
	*/

	class Tools{
		
		/**
		* find all directories from a given path(supporting both absolute path and relative path).
		* 
		*/
		function getDirs($path){
			$s1 = substr($path,0,1);
			$s2 = substr($path,1,1);
			$result = array();
			$scanArr = scandir($path);
			$pathModel = 0;	//0:absolute path 1:relative path
			$current = "";
			
			if($s1 != "\\" && $s1 != "/" && $s2 != ":"){
				$pathModel = 1;
			}
			
			foreach($scanArr as $val){
				if($val!='.' && $val !='..'){
					if($pathModel==1){
						$current = dirname(__FILE__).DIRECTORY_SEPARATOR."extends".DIRECTORY_SEPARATOR.$val;
					}else{
						$current = $path.DIRECTORY_SEPARATOR.$val;
					}
					if(is_dir($current)){
						$result[] = $current;
					}
				}
			}
			return $result;
		}		
	}
?>