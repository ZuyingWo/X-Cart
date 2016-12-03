<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 *  NOTICE OF LICENSE
 *
 *  This source file is subject to the software license agreement
 *  that is bundled with this package in the file LICENSE.txt.
 *  If you did not receive a copy of the license and are unable to
 *  obtain it through the world-wide-web, please send an email
 *  to licensing@x-cart.com so we can send you a copy immediately.
 *
 *  DISCLAIMER
 *
 *  Do not modify this file if you wish to upgrade X-Cart to newer versions
 *  in the future. If you wish to customize X-Cart for your needs please
 *  refer to http://www.x-cart.com/ for more information.
 *
 *  @category  X-Cart 5
 *  @author    Qualiteam software Ltd <info@x-cart.com>
 *  @copyright Copyright (c) 2011-2016 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 *  @link      http://www.x-cart.com/
 */

namespace XLite\Module\QSL\SpecialOffersBase\View\FormField\Label;

/**
 * Read-only field that displays the name of the offer type.
 */
class OfferType extends \XLite\View\FormField\Label
{
    /**
     * Return field template
     *
     * @return string
     */
    protected function getFieldTemplate()
    {
        return 'offer_type.twig';
    }

    /**
     * Return name of the folder with templates
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/QSL/SpecialOffersBase/form_field/label';
    }

    /**
     * Assemble classes
     *
     * @param array $classes Classes
     *
     * @return array
     */
    protected function assembleClasses(array $classes)
    {
        $classes = parent::assembleClasses($classes);
        $classes[] = 'table-label';

        return $classes;
    }

}