<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\Paypal\View\Button\TopMessage;

/**
 * Express Checkout button
 */
class ExpressCheckout extends \XLite\Module\CDev\Paypal\View\Button\AExpressCheckout
{
    /**
     * Returns widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/CDev/Paypal/button/top_message/default/express_checkout.twig';
    }

    /**
     * Return current template
     *
     * @return string
     */
    protected function getTemplate()
    {
        return $this->isInContextAvailable()
            ? 'modules/CDev/Paypal/button/top_message/in_context/express_checkout.twig'
            : 'modules/CDev/Paypal/button/top_message/default/express_checkout.twig';
    }

    /**
     * Returns additional link params
     *
     * @return array
     */
    protected function getAdditionalLinkParams()
    {
        $result = parent::getAdditionalLinkParams();

        if ($this->isInContextAvailable()) {
            $result['inContext'] = true;
            $result['cancelUrl'] = $this->isAjax()
                ? $this->getReferrerURL()
                : \XLite\Core\URLManager::getSelfURI();
        }

        return $result;
    }
}
