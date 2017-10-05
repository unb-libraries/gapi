<?php

namespace Drupal\gapi\Client;

use Drupal\key\KeyInterface;
use \Google_Client;
use Psr\Log\LoggerInterface;

/**
 * Authenticates a Google_Client instance using service account credentials.
 */
class ApplicationCredentialsAuthenticator implements ClientAuthenticatorInterface {

  /**
   * {@inheritdoc}
   */
  public static function authenticate(Google_Client $client, KeyInterface $key, LoggerInterface $logger) {
    try {
      $client->setAuthConfig((array) json_decode($key->getKeyValue()));
    } catch (\Exception $e) {
      $logger->error($e->getMessage());
      return FALSE;
    }
    return TRUE;
  }

}
