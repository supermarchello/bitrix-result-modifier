<?php

namespace Supermarchello\BitrixResultModifier;

/**
 *  Тестовый класс
 */
final class TestModifier implements ModifierInterface
{
    public function modify(array &$arResult): void
    {
        $arResult['test2'] = 2;
    }
}
