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

namespace XLite\Model\Base;

/**
 * Abstract address model
 *
 *
 * @MappedSuperclass
 */
abstract class PersonalAddress extends \XLite\Model\Base\Address
{
    /**
     * Get full name
     *
     * @return string
     */
    public function getName()
    {
        return trim($this->getFirstname() . ' ' . $this->getLastname());
    }

    /**
     * Set full name
     *
     * @param string $value Full name
     *
     * @return string
     */
    public function setName($value)
    {
        $parts = array_map('trim', explode(' ', trim($value), 2));

        $this->setFirstname($parts[0]);
        $this->setLastname(isset($parts[1]) ? $parts[1] : '');
    }

}
