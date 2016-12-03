<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/parts/social_login.caption.twig */
class __TwigTemplate_cf99b3db813e0af03abc7577271f28f77c08fde1797729c0aa0ea6e17eaf1b0c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCaption", array(), "method")) {
            // line 8
            echo "  <li class=\"social-login-caption\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCaption", array(), "method"), "html", null, true);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/parts/social_login.caption.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SocialLogin widget caption*/
/*  #*/
/*  # @ListChild (list="social.login.buttons", weight="1")*/
/*  #}*/
/* */
/* {% if this.getCaption() %}*/
/*   <li class="social-login-caption">{{ this.getCaption() }}</li>*/
/* {% endif %}*/
/* */
