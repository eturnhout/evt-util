<?php
namespace Evt\Util;

/**
 * <h1>Stack</h1>
 * <p>
 * A base stack for extending.
 * </p>
 *
 * @author Eelke van Turnhout <eelketurnhout3@gmail.com>
 * @version 1.0
 */
abstract class Stack implements \Iterator
{

    protected $array = array();

    /**
     * Move forward to the next element and also return it.
     *
     * @return mixed The next element on the stack.
     */
    public function next()
    {
        return next($this->array);
    }

    /**
     * Move backward to the previous element and also return it.
     *
     * @return mixed The previous element on the stack.
     */
    public function prev()
    {
        return prev($this->array);
    }

    /**
     * Get the current element on the stack.
     *
     * @return mixed The current element on the stack.
     */
    public function current()
    {
        return current($this->array);
    }

    /**
     * Get the key of the current element on the stack.
     *
     * @return mixed The key of the current element.
     */
    public function key()
    {
        return key($this->array);
    }

    /**
     * Check if there is a current element.
     * Handy to use after calls like rewind(), next() or forward().
     *
     * @return boolean True if valid, false otherwise.
     */
    public function valid()
    {
        return ($this->current() !== false);
    }

    /**
     * Reset the stack cursor to the first element on the stack pointer and also returns it.
     *
     * @return mixed The first element on the stack or FALSE if it doesn't exist.
     */
    public function rewind()
    {
        return reset($this->array);
    }

    /**
     * Reset the stack cursor to the end of the stack and also returns it.
     *
     * @return mixed
     */
    public function forward()
    {
        return end($this->array);
    }

    /**
     * Get the size of the stack.
     *
     * @return integer The size of this stack.
     */
    public function sizeOf()
    {
        return count($this->array);
    }

    /**
     * Get array of this stack.
     *
     * @return array The array containing the elements of the stack.
     */
    public function toArray()
    {
        return $this->array;
    }
}