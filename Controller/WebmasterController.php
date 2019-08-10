<?php

namespace MaksZe\TelemetryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WebmasterController extends AbstractController
{
  public function yandex($id)
  {
    $webmaster_ids = $this->container->getParameter('maksze_telemetry.webmaster_ids');

    if (!in_array($id, $webmaster_ids))
    {
      throw $this->createNotFoundException("Yandex webmaster with id: {$id} not found");
    }

    return $this->render(
      '@MaksZeTelemetry/yandex_webmaster_werification.html.twig',
      ['id' => $id]
    );
  } 
  
  public function google($id)
  {
    $webmaster_ids = $this->container->getParameter('maksze_telemetry.search_console_ids');

    if (!in_array($id, $webmaster_ids))
    {
      throw $this->createNotFoundException("Google webmaster with id: {$id} not found");
    }

    return $this->render(
      '@MaksZeTelemetry/google_search_console_werification.html.twig',
      ['id' => $id]
    );
  } 
}
