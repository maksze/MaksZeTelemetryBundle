<?php

namespace MaksZe\TelemetryBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class MaksZeTelemetryExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container)
  {
    $loader = new XmlFileLoader(
      $container,
      new FileLocator(__DIR__.'/../Resources/config')
    );
    $loader->load('services.xml');

    $configuration = $this->getConfiguration($configs, $container);
    $config = $this->processConfiguration($configuration, $configs);

    $container->setParameter(
      'maksze_telemetry.webmaster_ids',
      array_map(function($item){return $item['id'];}, $config['yandex_webmaster'])
    );
    
    $container->setParameter(
      'maksze_telemetry.search_console_ids',
      array_map(function($item){return $item['id'];}, $config['google_search_console'])
    );

    $configServiceDefintion = $container->getDefinition('maksze_telemetry.config_service');
    $configServiceDefintion->addMethodCall('setConfig', [$config]);
  }

  public function getAlias()
  {
    return 'maksze_telemetry';
  }
}
