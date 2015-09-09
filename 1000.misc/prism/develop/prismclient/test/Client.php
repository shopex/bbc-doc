<?php

require_once('../prism/src/Prism.php');


class Client
{
    public function __construct($url, $key, $secret)
    {
        $this->client = new Prism($url, $key, $secret);
    }
}
