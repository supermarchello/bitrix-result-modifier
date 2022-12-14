<?php

namespace Supermarchello\BitrixResultModifier;

use PHPUnit\Framework\TestCase;

class ModifierTest extends TestCase
{
    public function testCreate()
    {
        $modifier = Modifier::create();
        $this->assertInstanceOf(Modifier::class, $modifier);
    }

    public function testAddModifier()
    {
        $modifier = Modifier::create();
        $modifier->addModifier($this->createStub(ModifierInterface::class));
        $this->assertNotEmpty($modifier->getModifiersPool());
        foreach ($modifier->getModifiersPool() as $modifier){
            $this->assertInstanceOf(ModifierInterface::class, $modifier);
        }
    }

    public function testApplyModifications()
    {
        $testResult = ['test' => 1];
        Modifier::create()->addModifier(new TestModifier())->applyModifications($testResult);
        $this->assertEquals(['test' => 1, 'test2' => 2], $testResult);
    }
}
