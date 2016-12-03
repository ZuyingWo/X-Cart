<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/ThemeTweaker/layout_settings/settings.webmaster_mode_switcher.twig */
class __TwigTemplate_972c3ec0f1d82c797ea4e7be83f5639f4dc7a97c913425d988a440a14c95a074 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"webmaster-mode-switch\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "Webmaster mode", "labelHelp" => "Webmaster Mode allows you to change the storefront design in click-and-edit mode", "fieldName" => "edit_mode", "value" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "XC", array()), "ThemeTweaker", array()), "edit_mode", array()), "comment" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStoreFrontLink", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/ThemeTweaker/layout_settings/settings.webmaster_mode_switcher.twig";
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
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="35")*/
/*  #}*/
/* <div class="webmaster-mode-switch">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\OnOff', label='Webmaster mode', labelHelp='Webmaster Mode allows you to change the storefront design in click-and-edit mode', fieldName='edit_mode', value=this.config.XC.ThemeTweaker.edit_mode, comment=this.getStoreFrontLink()) }}*/
/* </div>*/
/* */
