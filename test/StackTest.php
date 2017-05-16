<?php
namespace EvtTest\Util;

use PHPUnit\Framework\TestCase;
use Evt\Util\Stack;

class StackTest extends TestCase
{

    public function testIteration()
    {
        $stack = new FakeStack();
        
        for ($i = 1; $i < 11; $i ++) {
            $stack->push($i);
        }
        
        $this->assertTrue($stack->valid());
        $this->assertEquals(1, $stack->current());
        $stack->next();
        $this->assertEquals(2, $stack->current());
        
        for ($i = 3; $i < 11; $i ++) {
            $stack->next();
        }
        
        $this->assertTrue($stack->valid());
        $stack->prev();
        $this->assertEquals(9, $stack->current());
        
        for ($i = 0; $i < 3; $i ++) {
            $stack->next();
        }
        
        $this->assertFalse($stack->valid());
    }
}

class FakeStack extends Stack
{

    public function push($mixed)
    {
        array_push($this->array, $mixed);
    }
}