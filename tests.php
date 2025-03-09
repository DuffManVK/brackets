<?php

require 'Validator.php';

use PHPUnit\Framework\TestCase;
use Validator\Validator;

class Tests extends TestCase
{
    private $validator;

    protected function setUp(): void
    {
        $this->validator = new Validator();
    }

    public function testValidExpression()
    {
        $this->assertTrue($this->validator->isValid("5 * (4 - 2)"));
        $this->assertTrue($this->validator->isValid("(1 + 2) * (3 - 4)"));
        $this->assertTrue($this->validator->isValid("((5))"));
    }

    public function testInvalidExpression()
    {
        $this->assertFalse($this->validator->isValid("5 * (4 - 2("));
        $this->assertFalse($this->validator->isValid(")5 * (4 - 2)"));
        $this->assertFalse($this->validator->isValid("5 * (4 - 2))"));
    }
}