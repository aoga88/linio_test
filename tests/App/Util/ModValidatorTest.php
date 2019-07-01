<?php
namespace App\Test\Util;

use App\Util\ModValidator;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class ModValidatorTest extends TestCase
{
    public function testNonModNumber() {
        $this->assertEquals(1, ModValidator::validate(1));
        $this->assertEquals(2, ModValidator::validate(2));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(3));
        $this->assertEquals(4, ModValidator::validate(4));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(5));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(6));
    }

    public function testMod15Number() {
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(15));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(30));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(45));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(60));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(75));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(90));
    }

    public function testMod5Number() {
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(5));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(10));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(15));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(20));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(25));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(30));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(35));
        $this->assertEquals(ModValidator::MOD_5, ModValidator::validate(40));
    }

    public function testMod3Number() {
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(3));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(6));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(9));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(12));
        $this->assertEquals(ModValidator::MOD_15, ModValidator::validate(15));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(18));
        $this->assertEquals(ModValidator::MOD_3, ModValidator::validate(21));
    }

    public function testNotNumber() {
        $this->assertFalse( ModValidator::validate('Test'));
    }
}