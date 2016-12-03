<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed.twig */
class __TwigTemplate_d54f6561e79273714fdc555827b1854594777d7f3f858acfd4c036400e09247f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleUpgradeNeeded", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  <div class=\"note version error\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "module_upgrade_needed", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/module_upgrade_needed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # "Module upgrade needed"*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable", weight="300")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable", weight="300")*/
/*  #}*/
/* */
/* {% if this.isModuleUpgradeNeeded(this.module) %}*/
/*   <div class="note version error">*/
/*     {{ widget_list('module_upgrade_needed', type='nested', module=this.module) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
