<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/details/link.twig */
class __TwigTemplate_4b726741dc3468b81402d9b1051326a94df127b26cdcbc9fc76b59eb94bc8347 extends \XLite\Core\Templating\Twig\Template
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
<a";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method")) {
            echo " href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getModuleName", array(), "method"), "html", null, true);
        echo " (";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getAuthorName", array(), "method"), "html", null, true);
        echo ")</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/cannot_enable/dependencies/details/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Link to the module*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section.messages.cannot_enable.dependencies.details", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.cannot_enable.dependencies.details", weight="100")*/
/*  #}*/
/* */
/* <a{% if this.getDependencyHRef(this.depend) %} href="{{ this.getDependencyHRef(this.depend) }}"{% endif %}>{{ this.depend.getModuleName() }} ({{ t('by') }} {{ this.depend.getAuthorName() }})</a>*/
/* */
