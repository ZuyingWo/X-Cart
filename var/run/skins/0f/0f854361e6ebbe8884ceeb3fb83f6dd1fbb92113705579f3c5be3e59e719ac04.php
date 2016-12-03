<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/note_mutual.twig */
class __TwigTemplate_51f066c81def22481a2acb0f803a05670c221ffceab0031e46d5e2eae14469f3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEnabledMutualModules", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following add-on(s) must be disabled")), "html", null, true);
            echo ":
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/note_mutual.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Top-level note*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.dependencies", weight="300")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.dependencies", weight="300")*/
/*  #}*/
/* */
/* {% if this.getEnabledMutualModules(this.module) %}*/
/*   {{ t('The following add-on(s) must be disabled') }}:*/
/* {% endif %}*/
/* */
