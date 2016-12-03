<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details_box.twig */
class __TwigTemplate_06dad071109174ba6765ee7dad7a94cf4cb93613bd35a6ef7433865c71f1324a extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"checkout_fastlane_details_wrapper\">
    <div class=\"checkout_fastlane_details_box loading\">
    \t";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.details"))), "html", null, true);
        echo "
    </div>
</div>
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.after", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_details_wrapper">*/
/*     <div class="checkout_fastlane_details_box loading">*/
/*     	{{ widget_list('checkout_fastlane.sections.details') }}*/
/*     </div>*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* */
