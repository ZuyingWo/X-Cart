<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome/parts/block.twig */
class __TwigTemplate_f6fea8e5f611270036f5c83eae5bcd4206ce0389199a4dbe6fb091b6d15afd17 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"block-content\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "paypal.welcome.content"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome/parts/block.twig";
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
/*  # Block content*/
/*  #*/
/*  # @ListChild (list="paypal.welcome", weight="20")*/
/*  #}*/
/* */
/* <div class="block-content">*/
/*   {{ widget_list('paypal.welcome.content') }}*/
/* </div>*/
/* */
