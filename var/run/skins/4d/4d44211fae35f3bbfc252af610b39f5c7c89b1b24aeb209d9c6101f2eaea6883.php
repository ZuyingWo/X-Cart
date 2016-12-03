<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/view_all.twig */
class __TwigTemplate_16a253235ca3732fad489ac9dd347b6afeb45d6d1a3c11c5afdc088a5c4456a0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            // line 8
            echo "  <a class=\"view-all-modules-link\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_marketplace")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View all modules")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/view_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Marketplace banner*/
/*  #*/
/*  # @ListChild (list="install-modules.pager.buttons", weight="100")*/
/*  #}*/
/* */
/* {% if this.isLandingPage() %}*/
/*   <a class="view-all-modules-link" href="{{ url('addons_list_marketplace') }}">{{ t('View all modules') }}</a>*/
/* {% endif %}*/
/* */
