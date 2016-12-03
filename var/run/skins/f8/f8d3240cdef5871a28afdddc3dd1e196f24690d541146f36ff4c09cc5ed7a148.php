<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/custom_css.twig */
class __TwigTemplate_5c7b802dccd4c9c63908e7ca6899310f2d63b2d513f8e62f019b3da8ff04d936 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-css_editor'>
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\CustomCssEditor", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit styles")), "style" => "layout-editor-custom_css_button"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/custom_css.twig";
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
/*  # Layout editor exit button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="17")*/
/*  #}*/
/* */
/* <div class='layout-editor-css_editor'>*/
/*     {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\CustomCssEditor', label=t('Edit styles'), style='layout-editor-custom_css_button') }}*/
/* </div>*/
/* */
