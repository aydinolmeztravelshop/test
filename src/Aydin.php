<?php

namespace Aydin;

use Symfony\Component\DependencyInjection\ContainerInterface;

class Aydin
{
    public function __construct(
        public ContainerInterface $container
    )
    {
    }

    public function getTest(): ?string
    {
        return $this->container->getParameter('access_key');
    }
}