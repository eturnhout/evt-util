<?php
namespace Evt\Util;

/**
 * Validator
 *
 * A class used to do some basic validation on variables
 *
 * @author Eelke van Turnhout <eelketurnhout3@gmail.com>
 * @version 1.0
 */
class Validator
{

    /**
     * Checks if the value is a valid string
     *
     * @param string $name      Name of the property that is being validated
     * @param string $value     The value that needs validating
     * @param string $method    (optional) The method name where the arguments were originally passed through
     *
     * @throws \InvalidArgumentException When the value isn't a string
     */
    public static function string($name, $value, $method = null)
    {
        self::validateInput($name, $method);

        if (! is_string($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "string", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Checks if the value is a non empty string
     *
     * @param string $name      Name of the property that is being validated
     * @param string $value     The value that needs validating
     * @param string $method    (optional) The method name where the arguments were originally passed through
     *
     * @throws \InvalidArgumentException When the value isn't a string
     * @throws \InvalidArgumentException When the value is a empty string
     */
    public static function nonEmptyString($name, $value, $method = null)
    {
        self::validateInput($name, $method);

        if (! is_string($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "string", ' . gettype($value) . ' given.');
        } elseif (strlen($value) == 0) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be a non empty string.');
        }
    }

    /**
     * Checks if the value is an integer
     *
     * @param string    $name       Name of the property that is being validated
     * @param int       $value      The value that needs validating
     * @param string    $method     (optional) The method name where the arguments were originally passed through
     *
     * @throws \InvalidArgumentException When the value isn't a integer
     */
    public static function integer($name, $value, $method = null)
    {
        self::validateInput($name, $method);

        if (! is_int($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "integer", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Checks if the value is a boolean
     *
     * @param string $name      Name of the property that is being validated
     * @param string $value     The value that needs validating
     * @param string $method    (optional) The method name where the arguments were originally passed through
     *
     * @throws \InvalidArgumentException When the value isn't a boolean
     */
    public static function boolean($name, $value, $method = null)
    {
        self::validateInput($name, $method);

        if (! is_bool($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "boolean", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Checks the name and method input required by most methods in this class
     *
     * @param string $name      Name of the property that is being validated
     * @param string $method    (optional) The method name where the arguments were originally passed through
     *
     * @throws \InvalidArgumentException When the name isn't a string
     * @throws \InvalidArgumentException When the name is a empty string
     * @throws \InvalidArgumentException When the method's name isn't null and an not a string
     */
    private static function validateInput($name, &$method = null)
    {
        if (! is_string($name)) {
            throw new \InvalidArgumentException(__METHOD__ . '; The property name must be of type "string", ' . gettype($name) . ' given.');
        } elseif (strlen($name) == 0) {
            throw new \InvalidArgumentException(__METHOD__ . '; The property name must be a non empty string.');
        }

        if (! is_null($method)) {
            if (! is_string($method)) {
                throw new \InvalidArgumentException(__METHOD__ . '; The method must be of type "string" or "NULL", ' . gettype($method) . ' given.');
            }
        } else {
            $method = __METHOD__;
        }
    }
}
