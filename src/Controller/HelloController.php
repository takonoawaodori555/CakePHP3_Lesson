<?php
namespace App\Controller;

class HelloController extends AppController {

	public function initialize(){	
		$this->viewBuilder()->layout('Hello');	
		$this->set('msg','Hello/index');
		$this->set('footer','Hello/footer2');	
	}

	public function index(){
		$result = "";
		if( $this->request->isPost() ){
			$result = "<pre>※送信された情報<br/>";
			foreach( $this->request->data['HelloForm'] as $key => $val){
				$result .= $key .'=>' .$val;
			}
			$result .= "</pre>";
		}  else  {
			$result ="※何か送信して下さい。";
		}

		$this->set("result",$result);
	}

	public function sendForm(){
		$result = "※送信された情報<br/>";
		foreach( $this->request->query as $key => $val　){
			$result .= $key . " => " . $val . "<br/>";
		}
		$this->set("result",$result);
	}		
}