<?php

class Form {
	private $action = "default.php";
	private $method = "post";	
	private $_fieldsList = array();
	
	public function setAction($action="default.php"){
		$this->action = $action;
	}
	
	public function setMethod($method){
		if (strtolower($method)=="get")
			$this->method = "get";
	}
	
	public function addTextField($name, $id, $value, $required=false) {
		
	}
	
	public function addPasswordField($name, $id, $value, $required=false) {
	
	}
	
	public function addSubmitButton($name, $id, $value, $required=false) {
	
	}
	
	public function removeField($name) {
		
	}
	
	public function displayForm() {
		echo "<form action=\"$this->action\" method=\"$this->method\">";
		echo "</form>";
	}
	
	public function isSubmitted() {
		return false;
	}
	
	private function validateForm() {
		
	}
}




$myForm = new Form();

$myForm->setAction("form.php");
$myForm->setMethod("get");
$myForm->addTextField("firstName", "firstName", "enter first name");
$myForm->addPasswordField("password", "password", "enter password");
$myForm->addSubmitButton("submit", "submit", "submit");

$myform->display();