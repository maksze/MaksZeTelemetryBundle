<?php

namespace MaksZe\TelemetryBundle\Service;

class ConfigService
{
  private $yandexMetrika;
  private $googleAnalytics;
  private $facebookPixel;

  public function setConfig($config)
  {
     $this->yandexMetrika = $config['yandex_metrika'];
     $this->googleAnalytics = $config['google_analytics'];
     $this->facebookPixel = $config['facebook_pixel'];
  }

  public function getYandexMetrika(): array
  {
    return $this->yandexMetrika;
  }

  public function getGoogleAnalytics(): array
  {
    return $this->googleAnalytics;
  }

  public function getFacebookPixel(): array
  {
    return $this->facebookPixel;
  }
}
