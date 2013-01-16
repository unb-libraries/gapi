<?php

/**
 * @file
 * Abstract class that should be extended by modules
 * wishing to implement a robust api based on the gapi
 * interface.
 */

/**
 * An abstract interface for the creation of a robust
 * API via the gapi module.
 */
interface GAPIInterface {

  /**
   * Check the connection to the api.
   *
   * @return bool
   *   TRUE if connection is OK or FALSE otherwise.
   *   Note that for slow connections this may time
   *   out and throw an Exception which should also
   *   be accounted for.
   *
   * @see gapi_cron()
   */
  public function gapiCheckConnection();

  /**
   * Provide the current version of your API here.
   *
   * @return string
   *   Version information.
   */
  public function gapiGetVersion();

}

/**
 * Exception for when an unknown method is called on the gapi wrapper.
 */
class GapiUnknownMethodException extends Exception {}
