<?php
class watch
{ 
	private $_input_;
	private $_output_;
	private $_inputType_;
	private $_inputSize_;


	public function _break($input)
	{
    	//Atribui variavel a ser monitorada em propriedade interna da classe
		$this->_input_ = $input;
		$this->_inputType_ = gettype($input);

    	//Atribui variavel a ser monitorada em propriedade interna da classe
		switch($this->_inputType_)
		{

			case "array":

			$debugInfo = $this->build_table($this->_input_);
			$this->dump($debugInfo);
			die();
			
			default:

			$this->dump('Debug</br>'.$this->_inputType_. ":" . $this->_input_);
			die();
		}
		


	}

	public function _continue($input)
	{
    	//Atribui variavel a ser monitorada em propriedade interna da classe
		$this->_input_ = $input;
		$this->_inputType_ = gettype($input);

    	//Atribui variavel a ser monitorada em propriedade interna da classe
		switch($this->_inputType_)
		{

			case "array":

			$debugInfo = $this->build_table($this->_input_);
			$this->dump($debugInfo);
			break;
			
			default:

			$this->dump('Debug</br>'.$this->_inputType_. ":" . $this->_input_);
			break;
		}
		
	}

	private function build_table($array)
	{
		
		if(@is_array($array[0])){

    		   // start table
			$html = 'Debug</br>';
			$html .= '<table>';
    // header row
			$html .= '<tr>';
			foreach($array[0] as $key=>$value){
				$html .= '<th>' . $key . '</th>';
			}
			$html .= '</tr>';



    // data rows
			foreach( $array as $key=>$value){
				$html .= '<tr>';
				foreach($value as $key2=>$value2){
					$html .= '<td>' . $value2 . '</td>';
				}
				$html .= '</tr>';
			}

			return $html;


		}

		else {

			if($this->isAssoc($array))
			{
				// start table

			$html = 'Debug</br>';
			$html .= '<table>';
			

			$html .= '<tr>';

			foreach($array as $key => $value) {
 			   echo $key;
 			   $html .= '<th>' . $key . '</th>';
 			}

			//for($index = 0; $index < count($array);$index++){
			//	$html .= '<th>' . $index . '</th>';
			//}
 			$html .= '</tr>';


    // data rows
 			$html .= '<tr>';
 			foreach( $array as $value){


 				$html .= '<td>' . $value . '</td>';


 			}
 			$html .= '</tr>';
 			return $html;

			}
			else
			{
					// start table
			$index = 0;
			$html = 'Debug</br>';
			$html .= '<table>';
			

			$html .= '<tr>';

			

			for($index = 0; $index < count($array);$index++){
				$html .= '<th>' . $index . '</th>';
			}
 			$html .= '</tr>';


    // data rows
 			$html .= '<tr>';
 			foreach( $array as $value){


 				$html .= '<td>' . $value . '</td>';


 			}
 			$html .= '</tr>';
 			return $html;
			}
			
 		}

 	} 

 	private function dump($html)
 	{
 		$myfile = fopen("dump.html", "w") or die("Unable to open file!");
 		fwrite($myfile, $html);
 		fclose($myfile);
 	}

 	private function isAssoc(array $arr)
 	{
 		if (array() === $arr) return false;
 		return array_keys($arr) !== range(0, count($arr) - 1);
 	}



 }

 ?>