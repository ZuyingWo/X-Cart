<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View;

/**
 * Welcome page
 *
 *  ListChild (list="layout.slidebar", zone="customer", weight="10")
 */
abstract class SlidebarAbstract extends \XLite\View\AView
{
    /**
     * Get a list of JavaScript files required to display the widget properly
     *
     * @return array
     */
    public function getJSFiles()
    {
        $list = parent::getJSFiles();

        $list[] = 'js/jquery.mmenu.min.all.js';
        $list[] = 'js/slidebar.js';

        return $list;
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'layout/slidebar.twig';
    }

    /**
     * Check if widget is visible
     *
     * @return boolean
     */
    protected function isVisible()
    {
        return parent::isVisible() && !$this->isCheckoutLayout();
    }

    /**
     * Get preloaded labels
     *
     * @return array
     */
    protected function getPreloadedLabels()
    {
        $list = array(
            'Menu',
        );

        $data = array();
        foreach ($list as $name) {
            $data[$name] = static::t($name);
        }

        return $data;
    }
}
