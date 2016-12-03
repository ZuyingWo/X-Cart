<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Core;

use XLite\Core\Converter;

/**
 * CloudSearch store-side API methods
 * 
 * @Decorator\Depend ({"QSL\ShopByBrand"})
 */
abstract class StoreApiBrands extends \XLite\Module\QSL\CloudSearch\Core\StoreApi implements \XLite\Base\IDecorator
{
    protected function getBrandsCount()
    {
        return \XLite\Core\Database::getRepo('\XLite\Module\QSL\ShopByBrand\Model\Brand')->countEnabledBrands();
    }

    /**
     * Get products data
     *
     * @param $start
     * @param $limit
     *
     * @return array
     */
    public function getBrands()
    {
        $result = \XLite\Core\Database::getRepo('\XLite\Module\QSL\ShopByBrand\Model\Brand')->getCategoryBrandsWithProductCount();

        return array_map(
            array($this, 'getIndexBrandHash'), 
            $result
        );
    }

    public function getIndexBrandHash($record)
    {
        $brand = $record[0];

        return array(
            'name'          => $brand->getName(),
            'description'   => $brand->getDescription(),
            'id'            => $brand->getBrandId(),
            'url'           => $this->getUrlBrandHash($brand),
        );
    }

    protected function getUrlBrandHash($brand)
    {
        return Converter::buildFullURL(
            'brand', '', array('brand_id' => $brand->getBrandId())
        );
    }
}
