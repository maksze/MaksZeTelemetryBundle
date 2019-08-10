<?php

namespace MaksZe\TelemetryBundle\Twig\Extension;

use MaksZe\TelemetryBundle\Service\ConfigService;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class TelemetryExtension extends AbstractExtension
{
  private $config;

  public function __construct(ConfigService $config)
  {
    $this->config = $config;
  }

  /**
   * {@inheritdoc}
   */
  public function getFunctions(): array
  {
    return [
      new TwigFunction('maksze_telemetry_render', [$this, 'render'], ['is_safe' => ['html'], 'needs_environment' => true]),
    ];
  }

  public function render(Environment $env)
  {
    return $env->render(
      '@MaksZeTelemetry/layout.html.twig',
      ['config' => $this->config]
    ); 
  }
}
