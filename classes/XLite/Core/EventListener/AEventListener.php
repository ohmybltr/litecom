<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * LiteCommerce
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@litecommerce.com so we can send you a copy immediately.
 *
 * PHP version 5.3.0
 *
 * @category  LiteCommerce
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 */

namespace XLite\Core\EventListener;

/**
 * Abstract event listener 
 * 
 */
abstract class AEventListener extends \XLite\Base\Singleton
{
    /**
     * Errors 
     * 
     * @var array
     */
    protected $errors = array();

    /**
     * Arguments
     *
     * @var array
     */
    protected $arguments;

    /**
     * Handle event
     *
     * @param string $name      Event name
     * @param array  $arguments Event arguments OPTIONAL
     *
     * @return boolean
     */
    public static function handle($name, array $arguments = array())
    {
        return static::checkEvent($name, $arguments) ? static::getInstance()->handleEvent($name, $arguments) : false;
    }

    /**
     * Check event
     *
     * @param string $name      Event name
     * @param array  $arguments Event arguments OPTIONAL
     *
     * @return boolean
     */
    public static function checkEvent($name, array $arguments)
    {
        return true;
    }

    /**
     * Handle event (internal, after checking)
     *
     * @param string $name      Event name
     * @param array  $arguments Event arguments OPTIONAL
     *
     * @return boolean
     */
    public function handleEvent($name, array $arguments)
    {
        $this->arguments = $arguments;
    }

    /**
     * Get errors 
     * 
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

}
