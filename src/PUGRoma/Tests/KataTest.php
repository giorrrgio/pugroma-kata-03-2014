<?php

namespace PUGRoma\Kata;

class KataTest extends \PHPUnit_Framework_TestCase
{
    protected $numbers  = [1,2,3,5,15,30,35];
    protected $expected = [1,2,'Fizz','Buzz','FizzBuzz','FizzBuzz','Buzz'];

    public function testStart()
    {
        $kata = new Kata();
        $this->assertTrue($kata->isReady());
    }

    public function testKata()
    {
        $kata = new Kata();

        $output = $kata->vincoIo($this->numbers);
        $this->assertEquals($this->expected, $output);
    }
}