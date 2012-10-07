<?php
require_once dirname(__FILE__).'/bootstrap.php';

class ModelTest extends PHPUnit_Framework_TestCase
{
    public function test_set()
    {
        $model = new Model;
        $model->set(array('foo' => 200, 'bar' => 'test'));
        $this->assertEquals(200, $model->foo);
        $this->assertEquals('test', $model->bar);
    }
}
