<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/top_menu.twig */
class __TwigTemplate_3a895c72643993317dea40f8f8c376ff1e542eae88cc19157e728253f7fda99b extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method")) {
            // line 8
            echo "<div class=\"navbar navbar-inverse mobile-hidden\" role=\"navigation\">
    <div class=\"collapse navbar-collapse\">
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu"))), "html", null, true);
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/top_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Top menu container*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="250")*/
/*  #}*/
/* */
/* {% if not this.isCheckoutLayout() %}*/
/* <div class="navbar navbar-inverse mobile-hidden" role="navigation">*/
/*     <div class="collapse navbar-collapse">*/
/*         {{ widget_list('header.menu') }}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
