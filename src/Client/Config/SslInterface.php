<?php
namespace Evt\Util\Client\Config;

/**
 * SslInterface
 *
 * Interface that requires implementation of ssl check functions
 *
 * @author Eelke van Turnhout <eelketurnhout3@gmail.com>
 * @version 1.0
 */
interface SslInterface
{

    /**
     * Set whether or not to use ssl
     *
     * @param mixed $ssl Best use boolean values (true or false)
     */
    public function setSsl($ssl);

    /**
     * Check if ssl is set
     *
     * @return Should return a boolean value
     */
    public function isSsl();
}