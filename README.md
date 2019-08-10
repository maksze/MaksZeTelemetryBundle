## Installation

Open a command console, enter your project directory and execute the following command to download the latest version of this bundle:

```
composer require maksze/telemetry-bundle
```

## Configuration

To make this bundle work you need to add the following to your packages/maksze_telemetry.yaml:

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
