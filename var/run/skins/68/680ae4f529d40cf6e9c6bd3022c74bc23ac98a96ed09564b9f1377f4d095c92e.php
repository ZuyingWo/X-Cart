<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/ThemeTweaker/layout_settings/settings.layout_edit_switcher.twig */
class __TwigTemplate_62a208a3286c535de7a2763feeab843a0b3af9ce3028f5305187eba4c2861701 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"layout-mode-switch\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "Layout editor", "labelHelp" => "Layout editor allows you to change the position of the blocks in drag-n-drop fashion", "fieldName" => "layout_mode", "value" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "XC", array()), "ThemeTweaker", array()), "layout_mode", array()), "comment" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStoreFrontLink", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/ThemeTweaker/layout_settings/settings.layout_edit_switcher.twig";
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
/*  # Layout mode switcher*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="40")*/
/*  #}*/
/* <div class="layout-mode-switch">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\OnOff', label='Layout editor', labelHelp='Layout editor allows you to change the position of the blocks in drag-n-drop fashion', fieldName='layout_mode', value=this.config.XC.ThemeTweaker.layout_mode, comment=this.getStoreFrontLink()) }}*/
/* </div>*/
/* */
