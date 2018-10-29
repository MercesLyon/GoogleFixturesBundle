<?php

namespace MercesLab\Bundle\GoogleFixturesBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package MercesLab\Bundle\GoogleFixturesBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('merces_lab_google_fixtures');

        $rootNode
            ->children()
            ->scalarNode('google_credentials')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
