<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/price.twig */
class __TwigTemplate_5a26b5d7e125b4f66925efe94a3853970ec79797595bf37b54d4d044945e9e83 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "participateSale", array(), "method")) {
            // line 8
            echo "  <li class=\"sale-banner\">
    <div class=\"sale-banner-block\">
      <div class=\"text\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("sale")), "html", null, true);
            echo "</div>
      <div class=\"percent\">";
            // line 11
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("percent X off", array("percent" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSalePercent", array(), "method"))));
            echo "</div>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product price value*/
/*  #*/
/*  # @ListChild (list="product.plain_price", weight="10")*/
/*  #}*/
/* */
/* {% if this.participateSale() %}*/
/*   <li class="sale-banner">*/
/*     <div class="sale-banner-block">*/
/*       <div class="text">{{ t('sale') }}</div>*/
/*       <div class="percent">{{ t('percent X off', {'percent': this.getSalePercent()})|raw }}</div>*/
/*     </div>*/
/*   </li>*/
/* {% endif %}*/
/* */
