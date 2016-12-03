<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/download.twig */
class __TwigTemplate_2503d68c87c30c0d5e3f85df6198db282b8ce4fe48cc1319a4d4dad11ed24943 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDownloads", array(), "method") > 0)) {
            // line 8
            echo "  <li class=\"downloads-counter";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDownloadsCSSClass", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Popularity")), "html", null, true);
            echo ": <span class=\"counter\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDownloads", array(), "method"), "html", null, true);
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.info-element", weight="20")*/
/*  #}*/
/* */
/* {% if this.module.getDownloads() > 0 %}*/
/*   <li class="downloads-counter{{ this.getDownloadsCSSClass(this.module) }}">*/
/*     {{ t('Popularity') }}: <span class="counter">{{ this.module.getDownloads() }}</span>*/
/*   </li>*/
/* {% endif %}*/
/* */
