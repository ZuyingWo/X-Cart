<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/QSL/SpecialOffersBase/shopping_cart/parts/item.subtotal.twig */
class __TwigTemplate_53b06588159b4f9f2b1f2420214fa6e94838fa3c0f13451b3a16e34813c617f4 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\QSL\\SpecialOffersBase\\View\\OrderItemSubtotal", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "cart" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array())))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/QSL/SpecialOffersBase/shopping_cart/parts/item.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # @ListChild (list="cart.item", weight="60")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\QSL\\SpecialOffersBase\\View\\OrderItemSubtotal', item=this.item, cart=this.cart) }}*/
