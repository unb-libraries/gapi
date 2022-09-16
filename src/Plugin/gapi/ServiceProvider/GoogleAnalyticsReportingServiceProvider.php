<?php

namespace Drupal\gapi\Plugin\gapi\ServiceProvider;

use Drupal\gapi\Plugin\GoogleApiServiceProviderBase;
use \Google_Client;
use \Google_Service_AnalyticsReporting;

/**
 * @GoogleApiServiceProvider(
 *   id = "gapi_analyticsreporting",
 *   label = @Translation("Google Analytics Reporting"),
 * )
 */
class GoogleAnalyticsReportingServiceProvider extends GoogleApiServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function getService(Google_Client $client) {
    return new Google_Service_AnalyticsReporting($client);
  }

}
