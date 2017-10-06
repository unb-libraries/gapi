<?php

namespace Drupal\gapi\Plugin\gapi\ServiceProvider;

use Drupal\gapi\Plugin\GoogleApiServiceProviderBase;
use \Google_Client;
use \Google_Service_Calendar;

/**
 * @GoogleApiServiceProvider(
 *   id = "gapi_calendar",
 *   label = @Translation("Google Calendar"),
 * )
 */
class GoogleCalendarServiceProvider extends GoogleApiServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function getService(Google_Client $client) {
    return new Google_Service_Calendar($client);
  }

}
