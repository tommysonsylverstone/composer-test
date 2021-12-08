<?php

namespace Tommysonsylverstone\ComposerTest\Content\Types;

use Sulu\Component\Content\SimpleContentType;

class ColorPickerCustomTest extends SimpleContentType
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
