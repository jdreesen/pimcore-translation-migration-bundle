<?php declare(strict_types=1);

namespace Neusta\Pimcore\TranslationMigrationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class NeustaPimcoreTranslationMigrationBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
