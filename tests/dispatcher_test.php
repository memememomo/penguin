<?php
require_once dirname(__FILE__).'/bootstrap.php';

class DispatcherTest extends PHPUnit_Framework_TestCase
{
    public function test_parseAction()
    {
        $this->assertEquals(array('top', 'index'), Dispatcher::parseAction('top/index'));
        $this->assertEquals(array('player', 'view_record'), Dispatcher::parseAction('player/view_record'));
        $this->assertEquals(array('event_top', 'index'), Dispatcher::parseAction('event/top/index'));
    }

    public function test_parseAction_02()
    {
        $this->setExpectedException('PGException', 'invalid url format');
        Dispatcher::parseAction('top');
    }

    public function test_getController()
    {
        $this->assertInstanceOf('HelloController', Dispatcher::getController('hello'));
    }

    public function test_getController_02()
    {
        $this->setExpectedException('PGException', 'FooController is not found');
        Dispatcher::getController('foo');
    }
}

class HelloController extends Controller
{
}
