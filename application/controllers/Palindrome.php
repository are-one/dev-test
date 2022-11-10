<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
	{
		$wordList = ['Aku','KaMu', 'MalAm','isi', '']; 
        $this->palindrome_execute($wordList);
	}

    public function palindrome_execute($x) 
    {
        // TO DO CODE
        $result = [];
        foreach ($x as $kata) {
            $length = strlen($kata);
            $k = strtolower($kata);

            if($kata != null){
                
                $statement = 'adalah palindrome';
                for($i = 0; $i < $length/2; $i++){
                    
                    if($k[$i] !== $k[$length - 1 - $i] ){
                        $statement = 'bukan palindrome';
                    }
                }
                
            }else{
                $statement = 'bukan palindrome';
            }

            $result[] = $kata.' '. $statement;

        }

        echo implode(', ', $result);
    }
}
