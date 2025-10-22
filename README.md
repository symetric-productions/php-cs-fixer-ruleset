# Symetric PHP-CS-Fixer Ruleset

## Installation

```shell
composer require --dev symetric/php-cs-fixer-ruleset
```

In `.php-cs-fixer.dist.php` (or equivalent):

```php
<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;
use Symetric\PhpCsFixerRuleset\Ruleset;

$finder = (new Finder())
    ->in('src')
    ->notPath([
        'Kernel.php',
    ])
;

return (new Config())
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->registerCustomRuleSets([
        new Ruleset(),
    ])
    ->setRules([
        '@Symetric/Default' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
```
