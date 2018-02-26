<?php

namespace NS\AltoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ns_alto');
        $rootNode
            ->children()
                ->scalarNode('wsdl')->isRequired()->end()
                ->arrayNode('soap_options')
                    ->children()
                        ->scalarNode('verify_ssl')->defaultTrue()->end()
                        ->scalarNode('location')->defaultTrue()->end()
                        ->scalarNode('trace')->defaultFalse()->end()
                        ->scalarNode('cache_wsdl')->end()
                    ->end()
                ->end()
            ->end();
        return $treeBuilder;
    }
}
