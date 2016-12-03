<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/tags.twig */
class __TwigTemplate_5bbe434c4023faf7c37dc4b7b3c3a54c6892358914281e61f6b7605a54f2d1ed extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getTags", array(), "method")) {
            // line 8
            echo "  <div class=\"module-tags\">
  <ul class=\"module-tags-list\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getTags", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 11
                echo "      <li>
        <a href=\"";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_marketplace", "", array("tag" => $context["value"]))), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagName", array(0 => $context["value"]), "method"), "html", null, true);
                echo "<div class=\"circle\"></div></a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  35 => 12,  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="0")*/
/*  #}*/
/* */
/* {% if this.module.getTags() %}*/
/*   <div class="module-tags">*/
/*   <ul class="module-tags-list">*/
/*     {% for value in this.module.getTags() %}*/
/*       <li>*/
/*         <a href="{{ url('addons_list_marketplace', '', {'tag': value}) }}">{{ this.getTagName(value) }}<div class="circle"></div></a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
