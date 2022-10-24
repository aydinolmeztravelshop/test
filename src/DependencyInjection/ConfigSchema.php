<?php

namespace Aydin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class ConfigSchema implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('aydin');

        $rootNode = $treeBuilder->getRootNode();
        $treeBuilder->getRootNode()
            ->fixXmlConfig('aydin')
            ->children()
            ->scalarNode('access_key')->isRequired()->end()
            ->scalarNode('secret_key')->isRequired()->end()
            ->scalarNode('base_url')->isRequired()->end()
            ->end();

        return $treeBuilder;
    }
}