<?php
namespace Evt\Util;

class Validator
{

    /**
     *
     * @param string $name
     *            <p>
     *            Name of the property that is being validated.
     *            </p>
     * @param string $value
     *            <p>
     *            The value that needs validating.
     *            </p>
     * @param string $method
     *            <p>
     *            (optional)
     *            The method name where the arguments were originally passed through.
     *            </p>
     * @throws \InvalidArgumentException
     */
    public static function string($name, $value, $method = null)
    {
        self::validateInput($name, $method);
        
        if (! is_string($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "string", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Function that validates the value to be a non empty string.
     *
     * @param string $name
     *            <p>
     *            Name of the property that is being validated.
     *            </p>
     * @param string $value
     *            <p>
     *            The value that needs validating.
     *            </p>
     * @param string $method
     *            <p>
     *            (optional)
     *            The method name where the arguments were originally passed through.
     *            </p>
     * @throws \InvalidArgumentException
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
     * Validates if the value is an integer.
     *
     * @param string $name
     *            <p>
     *            Name of the property that is being validated.
     *            </p>
     * @param int $value
     *            <p>
     *            The value that needs validating.
     *            </p>
     * @param string $method
     *            <p>
     *            (optional)
     *            The method name where the arguments were originally passed through.
     *            </p>
     * @throws \InvalidArgumentException
     */
    public static function integer($name, $value, $method = null)
    {
        self::validateInput($name, $method);
        
        if (! is_int($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "integer", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Validates if the value is a boolean.
     *
     * @param string $name
     *            <p>
     *            Name of the property that is being validated.
     *            </p>
     * @param string $value
     *            <p>
     *            The value that needs validating.
     *            </p>
     * @param string $method
     *            <p>
     *            (optional)
     *            The method name where the arguments were originally passed through.
     *            </p>
     * @throws \InvalidArgumentException
     */
    public static function boolean($name, $value, $method = null)
    {
        self::validateInput($name, $method);
        
        if (! is_bool($value)) {
            throw new \InvalidArgumentException($method . '; ' . $name . ' must be of type "boolean", ' . gettype($value) . ' given.');
        }
    }

    /**
     * Checks the name and method input required by most methods in this class.
     *
     * @param string $name
     *            <p>
     *            Name of the property that is being validated.
     *            </p>
     * @param string $method
     *            <p>
     *            (optional)
     *            The method name where the arguments were originally passed through.
     *            </p>
     * @throws \InvalidArgumentException
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
