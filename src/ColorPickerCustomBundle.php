<?php

namespace Tommysonsylverstone\ComposerTest;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ColorPickerCustomBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
