<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/signin/layout.header.bar.links.newby.twig */
class __TwigTemplate_2e122c5e6409958dd6196d726de686faf5d566ef79b2cad8e2ff54ea6b5f5ecc extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"social-login\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget", "buttonStyle" => "icon", "placement" => "signin"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/signin/layout.header.bar.links.newby.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", zone="customer", weight="101")*/
/*  #}*/
/* <li class="social-login">*/
/*   {{ widget('\\XLite\\Module\\CDev\\SocialLogin\\View\\SocialLoginWidget', buttonStyle='icon', placement='signin') }}*/
/* </li>*/
/* */
