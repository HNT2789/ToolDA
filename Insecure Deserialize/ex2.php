<?php
class Example2
{
	public $hook;
	function __construct(){
	// some PHP code...
	}
	function __wakeup(){
		 if(isset($this->hook)){
			eval($this->hook);
		 }
	}
}
 // some PHP code...
$ex2 = new Example2;
$ex2 -> hook = "echo \"RCE time\";";
$user_data = unserialize(serialize($ex2));
?>