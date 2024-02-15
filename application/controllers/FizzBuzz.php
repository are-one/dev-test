<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FizzBuzz extends CI_Controller
{
	public function index()
	{
		$node = 100;
		$fizz = 5;
		$buzz = 6;
		$this->fizzbuzz_execute($node, $fizz, $buzz);
	}

	public function fizzbuzz_execute($x, $y, $z)
	{
		// TO DO CODE
		// Nama fungsi saya ubah karena terjadi error :
		// Methods with the same name as their class will not be constructors in a future version of PHP; FizzBuzz has a deprecated constructor
		$result = [];

		if ($x == 0) {
			echo "Node = 0";
		} else {

			for ($i = 1; $i <= $x; $i++) {
				if ($i % $y == 0) {
					$result[] = 'Fizz';
				} elseif ($i % $z == 0) {
					$result[] = 'Buzz';
				} else {
					$result[] = $i;
				}
			}

			echo implode(', ', $result);
		}
	}
}
