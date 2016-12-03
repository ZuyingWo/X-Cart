<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome/parts/block.content.twig */
class __TwigTemplate_709f35e6524a86cba87edbd548283146095d37e87a26fa3fd4ab2d1db04deeb9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"content\">
  <div class=\"info\">

    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("paypal_welcome_text", array("email" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPaypalEmail", array(), "method"))));
        echo "

    <div class=\"action\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\SignUp", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Launch PayPal"))))), "html", null, true);
        echo "
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome/parts/block.content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Block content : items*/
/*  #*/
/*  # @ListChild (list="paypal.welcome.content", weight="10")*/
/*  #}*/
/* <div class="content">*/
/*   <div class="info">*/
/* */
/*     {{ t('paypal_welcome_text', {'email': this.getPaypalEmail()})|raw }}*/
/* */
/*     <div class="action">*/
/*       {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Button\\SignUp', label=t('Launch PayPal')) }}*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
