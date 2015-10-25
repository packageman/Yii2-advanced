<?php

class ExceptionWithAnnotationTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
        throw new InvalidArgumentException('Right Message', 10);
    }

    /**
     * @expectedException              InvalidArgumentException
     * @expectedExceptionMessageRegExp #Right.*#
     */
    public function testExceptionMessageMatchesRegExp()
    {
        throw new InvalidArgumentException('Right Message', 10);
    }

    /**
     * @expectedException     InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        throw new InvalidArgumentException('Some Message', 20);
    }
}
