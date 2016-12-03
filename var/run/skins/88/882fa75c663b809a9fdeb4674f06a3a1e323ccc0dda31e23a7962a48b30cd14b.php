<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/language_labels.twig */
class __TwigTemplate_658df8b136efa533dcefd407b20ba9539a242c7cf5a4deec3ece46aae0c310b0 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabels", array(), "method")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/language_labels.twig";
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
/*  # Checkout preloaded language labels*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="99999")*/
/*  #}*/
/* */
/* {{ this.displayCommentedData(this.getPreloadedLabels()) }}*/
/* */
