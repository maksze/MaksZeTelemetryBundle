<?php

namespace MaksZe\TelemetryBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
  public function getConfigTreeBuilder()
  {
    $treeBuilder = new TreeBuilder('maksze_telemetry'); 

    // BC layer for symfony/config < 4.2
    $rootNode = \method_exists($treeBuilder, 'getRootNode') ?
      $treeBuilder->getRootNode() : $treeBuilder->root('maksze_telemetry');

    $rootNode
      ->children()
        ->arrayNode('yandex_metrika')
          ->arrayPrototype()
            ->children()
              ->scalarNode('id')->end()
              ->booleanNode('webvisor')
                ->defaultTrue()
                ->end()
            ->end()
          ->end()
        ->end()
        ->arrayNode('yandex_webmaster')
          ->arrayPrototype()
            ->children()
              ->scalarNode('id')->end()
            ->end()
          ->end()
        ->end()
        ->arrayNode('google_search_console')
          ->arrayPrototype()
            ->children()
              ->scalarNode('id')->end()
            ->end()
          ->end()
        ->end()
        ->arrayNode('google_analytics')
          ->arrayPrototype()
            ->children()
              ->scalarNode('id')->end()
            ->end()
          ->end()
        ->end()
        ->arrayNode('facebook_pixel')
          ->arrayPrototype()
            ->children()
              ->scalarNode('id')->end()
            ->end()
          ->end()
        ->end()
      ->end();

    return $treeBuilder;
  }
}
