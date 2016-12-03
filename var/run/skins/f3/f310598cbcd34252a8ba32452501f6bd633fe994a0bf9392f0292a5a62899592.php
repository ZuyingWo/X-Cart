<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/fast_lane_checkout.twig */
class __TwigTemplate_2a2acdb40bc18617e6589000e8cb80db644aedb6545b7f84fa841ac372a47f51 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPayWithAmazonActive", array(), "method")) {
            // line 7
            echo "<div>
  <div id=\"payWithAmazonDiv_co_btn\" class=\"pay-with-amazon-button\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/fast_lane_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.blocks.payment_methods.available", weight="2000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/* <div>*/
/*   <div id="payWithAmazonDiv_co_btn" class="pay-with-amazon-button"></div>*/
/* </div>*/
/* {% endif %}*/
/* */
