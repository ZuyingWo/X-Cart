<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/shipping.method.twig */
class __TwigTemplate_73afa518e6fe6d92f7cffea620f8a5afdc4433cc64553e55e3f37b4ec6d289b4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "shippingMethod"), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/shipping.method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Order's shipping method*/
/*  #*/
/*  # @ListChild (list="order.shipping", weight="100")*/
/*  #}*/
/* */
/* <div class="method">*/
/*   {{ this.orderForm.displayComplexField('shippingMethod') }}*/
/* </div>*/
/* */
