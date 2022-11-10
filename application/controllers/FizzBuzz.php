<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FizzBuzz extends CI_Controller {
    public function index()
	{
		$node = 0;
        $fizz = 0;
        $buzz = 0;
        $this->fizzbuzz($node, $fizz, $buzz);
	}

    public function fizzbuzz($x, $y, $z) 
    {
        // TO DO CODE

    }
}
