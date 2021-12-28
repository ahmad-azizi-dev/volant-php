<?php

namespace App;

/**
 * Application configuration
 *
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'mysql8';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'lovant-php';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'secret';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = false;
}
