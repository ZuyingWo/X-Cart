<?php
namespace XLite\Module\CDev\Coupons\Model;
/**
 * Coupon
 *
 * @Entity
 * @Table  (name="coupons",
 *      indexes={
 *          @Index (name="ce", columns={"code", "enabled"})
 *      }
 * )
 */
class Coupon extends \XLite\Module\XC\FreeShipping\Model\Coupon {}