<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.subtotal.twig */
class __TwigTemplate_caf6022b1df49b6390247294c4ae23d8b94935ca396cab6400bf1b40ec3e3b1b extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<div class=\"items-row clearfix\">
  <a href=\"#\" v-on:click.prevent=\"toggleItems\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("X items in bag", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method"))));
        echo "</a>
  <span class=\"price\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getDisplaySubtotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : subtotal*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="10")*/
/*  # @ListChild (list="checkout.review.inactive.items", weight="10")*/
/*  #}*/
/* <div class="items-row clearfix">*/
/*   <a href="#" v-on:click.prevent="toggleItems">{{ t('X items in bag', {'count': this.cart.countQuantity()})|raw }}</a>*/
/*   <span class="price">*/
/*     {{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getDisplaySubtotal(), currency=this.cart.getCurrency()) }}*/
/*   </span>*/
/* </div>*/
