<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/request_for_upgrade.twig */
class __TwigTemplate_11adb883896f4c4cd891b47fd4b1e36ce2ac67343eb47da34e519fa176215aa3 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUpgradeRequestAvailable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "    <div class=\"request-for-upgrade\">
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_marketplace", "request_for_upgrade", array("module" => $this->getAttribute($this->getAttribute(            // line 11
(isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method")))), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Request for upgrade")), "style" => "btn regular-button always-enabled"))), "html", null, true);
            // line 13
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed/request_for_upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 13,  28 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # "Module upgrade needed"*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable", weight="400")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable", weight="400")*/
/*  #}*/
/* */
/* {% if this.isUpgradeRequestAvailable(this.module) %}*/
/*     <div class="request-for-upgrade">*/
/*         {{  widget('XLite\\View\\Button\\Link',*/
/*         location=url('addons_list_marketplace', 'request_for_upgrade', { 'module': this.module.getModuleId() } ),*/
/*         label=t('Request for upgrade'),*/
/*         style='btn regular-button always-enabled') }}*/
/*     </div>*/
/* {% endif %}*/
/* */
