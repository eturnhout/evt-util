<?php
namespace Evt\Util;

use Evt\Util\Client\AbstractConfig;

/**
 * AbstractClient
 *
 * Class that with base client functions
 *
 * @author Eelke van Turnhout <eelketurnhout3@gmail.com>
 * @version 1.0
 */
abstract class AbstractClient
{

    /**
     * Set the configurations
     *
     * @param Evt\Util\Client\AbstractConfig $config The configurations with credentials
     */
    public function setConfig(AbstractConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Get the configurations
     *
     * @return Evt\Util\Client\AbstractConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Connect to the server
     */
    abstract public function connect();

    /**
     * Disconnect from the server
     */
    abstract public function disconnect();

    /**
     * Login to the server
     */
    abstract public function login();

    /**
     * Logout from the server
     */
    abstract public function logout();
}