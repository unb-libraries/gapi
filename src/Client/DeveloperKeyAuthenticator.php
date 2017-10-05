<?php

namespace Drupal\gapi\Client;

use Drupal\key\KeyInterface;
use \Google_Client;
use Psr\Log\LoggerInterface;

/**
 * Authenticates a Google_Client instance using a developer key.
 */
class DeveloperKeyAuthenticator implements ClientAuthenticatorInterface {

  /**
   * {@inheritdoc}
   */
  public static function authenticate(Google_Client $client, KeyInterface $key, LoggerInterface $logger) {
    $client->setDeveloperKey($key->getKeyValue());
    return TRUE;
  }

}
