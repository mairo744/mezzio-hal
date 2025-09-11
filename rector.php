<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets(php81: true)
    ->withAttributesSets()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/test',
    ])
    ->withPreparedSets(
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
    );
