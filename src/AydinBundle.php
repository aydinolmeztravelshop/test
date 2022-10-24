<?php

namespace Aydin;

use Aydin\DependencyInjection\AydinExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AydinBundle extends Bundle
{
    public function getContainerExtension(): AydinExtension
    {
        return new AydinExtension();
    }
}