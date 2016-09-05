<?php
namespace kerria\GroongaClient;

use kerria\GroongaClient\Groonga;

class Query
{
    private $options;

    public function send()
    {
        return Groonga::send($this);
    }

    public function __call($name, $args)
    {
        $this->options[$name] = array_pop($args);
        return $this;
    }
}
