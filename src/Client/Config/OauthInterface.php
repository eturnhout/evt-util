<?php
namespace Evt\Util\Client\Config;

/**
 * OauthInterface
 *
 * Interface that requires oauth check functions
 *
 * @author Eelke van Turnhout <eelketurnhout3@gmail.com>
 * @version 1.0
 */
interface OauthInterface
{

    /**
     * Set whether or not to use oauth
     *
     * @param mixed $oauth Best use boolean values (true or false)
     */
    public function setOauth($oauth);

    /**
     * Check if the configuration is set to use oauth
     *
     * @return Should return a boolean
     */
    public function isOauth();
}