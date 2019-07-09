<?php
/**
 * Created by PhpStorm.
 * User: jerry.mei
 * Date: 2019/6/25
 * Time: 22:47
 */

use PHPUnit\Framework\TestCase;

require_once './PrimeFactor.php';

class PrimeFactorTest extends TestCase
{
	public function test_prime_factor() {
		$primeFactor = new PrimeFactor();
		$this->assertEquals([2] , $primeFactor->getFactors(2));
		$this->assertEquals([3] , $primeFactor->getFactors(3));
		$this->assertEquals([2 , 2] , $primeFactor->getFactors(4));
		$this->assertEquals([5] , $primeFactor->getFactors(5));
		$this->assertEquals([2 , 3] , $primeFactor->getFactors(6));
		$this->assertEquals([7] , $primeFactor->getFactors(7));
		$this->assertEquals([2 , 2 , 2] , $primeFactor->getFactors(8));
		$this->assertEquals([3 , 3] , $primeFactor->getFactors(9));
		$this->assertEquals([2 , 2 , 3] , $primeFactor->getFactors(12));
		$this->assertEquals([5 , 5] , $primeFactor->getFactors(25));
		$this->assertEquals([2 , 3 , 7] , $primeFactor->getFactors(2 * 3 * 7));
	}

	/**
	 * @dataProvider primeProvider
	 * @param $prime_factor
	 * @param $expected
	 */
	public function test_prime_factor1($prime_factor , $expected) {
		$primeFactor = new PrimeFactor();
		$this->assertEquals($expected , $primeFactor->getFactors($prime_factor));
	}

	public function primeProvider() {
		return [
			[2 , [2]] ,
			[3 , [3]] ,
			[4 , [2 , 2]] ,
			[8 , [2 , 2 , 2]] ,
			[9 , [3 , 3]] ,
			[25 , [5 , 5]] ,
			[3 * 7 * 11 , [3 , 7 , 11]]
		];
	}

}