<?php
namespace kerria\GroongaClient;

use kerria\GroongaClient\Groonga;

class Query
{
    private $command;
    private $options = [];

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function send()
    {
        return Groonga::send($this);
    }

    public function command()
    {
        return $this->command;
    }

    public function options()
    {
        return $this->options;
    }

    public function get($key)
    {
        return isset($this->options[$key])
            ? $this->options[$key]
            : null;
    }

    public function set($key, $value)
    {
        $this->options[$key] = $value;
        return $this;
    }

    public function __call($name, $args)
    {
        if (count($args) === 0) {
            return $this->get($name);
        }
        return $this->set($name, array_pop($args));
    }
}
