# bitrix-result-modifier
Библиотека позволяет сделать код в файлах result_modifier.php более чистым, предоставляя интерфейс для классов модификаторов и применяя модификаторы к результирующему массиву

## Установка

Use [composer](https://getcomposer.org) to install bitrix-result-modifier into your project:

```sh
composer require supermarchello/bitrix-result-modifier
```

# Использование #

Разработчик должен имплементировать интерфейс ModifierInterface, можно добавлять несколько модификаторов через флюент интерфейс метода addModifier

# Пример использользования #

```php

<?php

use Supermarchello\BitrixResultModifier\Modifier;
use Supermarchello\BitrixResultModifier\TestModifier;

Modifier::create()
    ->addModifier(new TestModifier())
    ->applyModifications($arResult);
    
    
```
