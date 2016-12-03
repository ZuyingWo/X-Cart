<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/parts/social_login.after.twig */
class __TwigTemplate_f69004d70ecb1be44b7fca909786f48ff6b985efe24fa06cb46e6909a8d1e638 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTextAfter", array(), "method")) {
            // line 8
            echo "  <div class=\"social-login-note note-after\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTextAfter", array(), "method"), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/SocialLogin/parts/social_login.after.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SocialLogin widget's following elements*/
/*  #*/
/*  # @ListChild (list="social.login", weight="150")*/
/*  #}*/
/* */
/* {% if this.getTextAfter() %}*/
/*   <div class="social-login-note note-after">*/
/*     {{ this.getTextAfter() }}*/
/*   </div>*/
/* {% endif %}*/
/* */
