<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/install.twig */
class __TwigTemplate_0da8c9d98f8a9a71d6a1553d30e6f6d7de3fd459c8942a94daa7af542f190316 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canInstall", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"install-section\">
    <div class=\"install\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ModulesManager\\Action\\SelectToInstall", "moduleID" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method")))), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/install.twig";
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
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="200")*/
/*  #}*/
/* */
/* {% if this.canInstall(this.module) %}*/
/*   <div class="install-section">*/
/*     <div class="install">*/
/*       {{ widget('\\XLite\\View\\ModulesManager\\Action\\SelectToInstall', moduleID=this.module.getModuleID()) }}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
