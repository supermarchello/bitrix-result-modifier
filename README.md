# bitrix-result-modifier
Библиотека позволяет сделать код в файлах result_modifier.php более чистым, предоставляя интерфейс для классов модификаторов и применяя модификаторы к результирующему массиву

## Установка

Use [composer](https://getcomposer.org) to install bitrix-result-modifier into your project:

```sh
composer require super/bitrix-result-modifier
```


# Пример использользования #

```php

<?php

use Super\BitrixResultModifier\Modifier;
use Super\BitrixResultModifier\TestModifier;

Modifier::create()
    ->addModifier(new TestModifier())
    ->applyModifications($arResult);
    
    
```
