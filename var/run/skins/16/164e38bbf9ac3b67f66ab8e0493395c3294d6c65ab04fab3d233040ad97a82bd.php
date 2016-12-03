<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/url.twig */
class __TwigTemplate_af72f9d7e29d40ad1dcd84a0de254d6e1c7e7867666b9b91f921f7e091278aca extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"module-url\">
    <a href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\" target=\"_blank\" class=\"module-page-link form-external-link\" data-store-url=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStoreURL", array(), "method"), "html", null, true);
            echo "\" data-email=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUserEmail", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Module page")), "html", null, true);
            echo "<i class=\"icon fa fa-external-link\"></i></a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/url.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="30")*/
/*  #}*/
/* */
/* {% if this.getPageURL(this.module) %}*/
/*   <div class="module-url">*/
/*     <a href="{{ this.getPageURL(this.module) }}" target="_blank" class="module-page-link form-external-link" data-store-url="{{ this.getStoreURL() }}" data-email="{{ this.getUserEmail() }}">{{ t('Module page') }}<i class="icon fa fa-external-link"></i></a>*/
/*   </div>*/
/* {% endif %}*/
/* */
