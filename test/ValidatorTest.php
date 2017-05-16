<?php
namespace EvtTest\Util;

use PHPUnit\Framework\TestCase;
use Evt\Util\Validator;

class ValidatorTest extends TestCase
{

    /**
     * Test the validation of a string (empty) successfully.
     */
    public function testValidString()
    {
        $this->assertNull(Validator::string("firstname", ""));
    }

    /**
     * Test if a exception is thrown when validating a non string value.
     */
    public function testInvalidString()
    {
        $this->expectException(\InvalidArgumentException::class);
        Validator::string("firstname", null, __METHOD__);
    }

    /**
     * Test the validation of a non empty string successfully.
     */
    public function testValidNonEmptyString()
    {
        $this->assertNull(Validator::nonEmptyString("firstname", "Eelke"));
    }

    /**
     * Test if a exception is thrown when validating a empty string.
     */
    public function testInvalidNonEmptyString()
    {
        $this->expectException(\InvalidArgumentException::class);
        Validator::nonEmptyString("firstname", "");
    }

    /**
     * Test the validation of a integer successfully.
     */
    public function testValidInteger()
    {
        $this->assertNull(Validator::integer("age", 24));
    }

    /**
     * Test if a exception is thrown when validating a non integer value.
     */
    public function testInvalidInteger()
    {
        $this->expectException(\InvalidArgumentException::class);
        Validator::integer("age", 2.4);
    }

    /**
     * Test the validation of a boolean successfully.
     */
    public function testValidBoolean()
    {
        $this->assertNull(Validator::boolean("valid", true));
    }

    /**
     * Test if a exception is thrown when validating a non boolean value.
     */
    public function testInvalidBoolean()
    {
        $this->expectException(\InvalidArgumentException::class);
        Validator::boolean("valid", "no");
    }

    /**
     * Test if a exception is thrown when passing a non string value for the name parameter.
     */
    public function testInvalidArguments()
    {
        $this->expectException(\InvalidArgumentException::class);
        Validator::boolean(null, true);
    }
}