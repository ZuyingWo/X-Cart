<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core;

/**
 * Events subsystem
 */
class Event extends \XLite\Base\Singleton
{
    /**
     * Events list
     *
     * @var array
     */
    protected $events = array();

    /**
     * Trigger invalidElement event
     *
     * @param string $name    Element name
     * @param string $message Error message
     *
     * @return void
     */
    public static function invalidElement($name, $message)
    {
        self::__callStatic('invalidElement', array(array('name' => $name, 'message' => $message)));
    }

    /**
     * Trigger invalidForm event
     *
     * @param string $name    Form name
     * @param string $message Error message
     *
     * @return void
     */
    public static function invalidForm($name, $message)
    {
        self::__callStatic('invalidForm', array(array('name' => $name, 'message' => $message)));
    }

    /**
     * Short event creation
     *
     * @param string $name      Event name
     * @param array  $arguments Event arguments
     *
     * @return void
     */
    public static function __callStatic($name, array $arguments)
    {
        static::getInstance()->trigger(
            $name,
            0 < count($arguments) ? array_shift($arguments) : array()
        );
    }

    /**
     * Trigger event
     *
     * @param string $name      Event name
     * @param array  $arguments Event arguments OPTIONAL
     *
     * @return void
     */
    public function trigger($name, array $arguments = array())
    {
        $this->events[] = array(
            'name'      => $name,
            'arguments' => $arguments,
        );
    }

    /**
     * Exclude event
     * 
     * @param string $name Event name
     *  
     * @return void
     */
    public function exclude($name)
    {
        foreach ($this->events as $i => $event) {
            if ($event['name'] == $name) {
                unset($this->events[$i]);
            }
        }

        $this->events = array_values($this->events);
    }

    /**
     * Display events
     *
     * @return void
     */
    public function display()
    {
        foreach ($this->events as $event) {
            header('event-' . $event['name'] . ': ' . json_encode($event['arguments']));
        }
    }

    /**
     * Clear list
     *
     * @return void
     */
    public function clear()
    {
        $this->events = array();
    }
}
