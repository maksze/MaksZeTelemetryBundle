<?php

namespace MaksZe\TelemetryBundle;

use MaksZe\TelemetryBundle\DependencyInjection\MaksZeTelemetryExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MaksZeTelemetryBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);
  }

  public function getContainerExtension()
  {
    if (null === $this->extension)
    {
      $this->extension = new MaksZeTelemetryExtension(); 
    }

    return $this->extension;
  }
}
