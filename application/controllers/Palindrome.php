<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
	{
		$wordList = []; 
        $this->palindrome($wordList);
	}

    public function palindrome($x) 
    {
        // TO DO CODE
    }
}
