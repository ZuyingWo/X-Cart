<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/name-manage.twig */
class __TwigTemplate_b1cecef16e6d46072a4ac8062a70e223c3fb12e2eb89a36337c411745156669c extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"name\">
      ";
            // line 9
            ob_start();
            // line 10
            echo "        <a class=\"module-name\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getName", array(), "method"), "html", null, true);
            echo "\" target=\"blank\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\" target=\"blank\" class=\"fa fa-external-link\"></a>
      ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 13
            echo "  </div>
";
        } else {
            // line 15
            echo "  <div class=\"name\"><a class=\"module-name no-link\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getName", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/name-manage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  43 => 13,  38 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="10")*/
/*  #}*/
/* */
/* {% if this.getPageURL(this.module) %}*/
/*   <div class="name">*/
/*       {% spaceless %}*/
/*         <a class="module-name" name="{{ this.module.getName() }}" target="blank" href="{{ this.getPageURL(this.module) }}">{{ this.module.getModuleName() }}</a>*/
/*         <a href="{{ this.getPageURL(this.module) }}" target="blank" class="fa fa-external-link"></a>*/
/*       {% endspaceless %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="name"><a class="module-name no-link" name="{{ this.module.getName() }}">{{ this.module.getModuleName() }}</a></div>*/
/* {% endif %}*/
/* */
