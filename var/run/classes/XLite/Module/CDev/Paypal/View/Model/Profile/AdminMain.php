<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Model\Profile;

/**
 * \XLite\View\Model\Profile\AdminMain
 */
 class AdminMain extends \XLite\Module\CDev\SocialLogin\View\Model\Profile\AdminMain implements \XLite\Base\IDecorator
{
    /**
     * Return fields list by the corresponding schema
     *
     * @return array
     */
    protected function getFormFieldsForSectionMain()
    {
        if ($this->getModelObject()->isSocialProfile()) {
            unset($this->mainSchema['password']);
            unset($this->mainSchema['password_conf']);
        }

        return parent::getFormFieldsForSectionMain();
    }
}
