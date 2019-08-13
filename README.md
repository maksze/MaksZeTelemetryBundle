# Motivation
You can simply connect the file with the metric code in prod mode. Roughly so:
```twig
{% if not debug %}
  {% include 'telemetry.twig' %}
{% endif %}
```
but with bundle, it's much more fun)

## Installation

Open a command console, enter your project directory and execute the following command to download the latest version of this bundle:

```
composer require maksze/telemetry-bundle
```

## Configuration

To make this bundle work you need to add the following to your app/config/packages/maksze_telemetry.yaml:

```yaml
# app/config/packages/maksze_telemetry.yaml

maksze_telemetry:
  yandex_metrika:
    - {id: any_id}
  yandex_webmaster:
    - {id: any_id}
  google_search_console:
    - {id: any_id}
  google_analytics:
    - {id: any_id}
  facebook_pixel:
    - {id: any_id}
```

Add app/config/routes/maksze_telemetry.yaml

```yaml
# app/config/routes/maksze_telemetry.yaml

_maksze_telemetry:
  resource: '@MaksZeTelemetryBundle/Resources/config/routes.xml'
  prefix: /
```

Add to the main template before the closing body tag

```
{{ maksze_telemetry_render() }}
```
