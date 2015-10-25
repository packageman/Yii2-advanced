<?php

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    public function testException()
    {
        $this->setExpectedException('InvalidArgumentException');
        throw new InvalidArgumentException('Right Message', 10);
    }

    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message'
        );
        throw new InvalidArgumentException('Right Message', 10);
    }

    public function testExceptionMessageMatchesRegExp()
    {
        $this->setExpectedExceptionRegExp(
          'InvalidArgumentException', '/Right.*/', 10
        );
        throw new InvalidArgumentException('Right Message', 10);
    }

    public function testExceptionHasRightCode()
    {
        $this->setExpectedException(
          'InvalidArgumentException', 'Right Message', 20
        );
        throw new InvalidArgumentException('Right Message', 20);
    }
}
