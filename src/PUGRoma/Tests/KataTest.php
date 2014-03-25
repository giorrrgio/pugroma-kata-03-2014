<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    protected $expected = [1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz',11,'Fizz',13,14, 'FizzBuzz'];

    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }

    public function testKata()
    {
        $kata = new Kata();

        $output = $kata->vincoIo(range(1,15));
        $this->assertEquals(array_values($this->expected), iterator_to_array($output));
    }
}