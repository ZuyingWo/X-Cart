<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/parts.css/css_aggregation.twig */
class __TwigTemplate_eecc96c680bfd369517a385cdde74dbc8460c65163d08c12c065c6726286839c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSAggregation", array(), "method")) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAggregateCSSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "  ";
                if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSOptimization", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isResourceSuitableForOptimization", array(0 => $context["file"]), "method"))) {
                    // line 9
                    echo "    ";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInternalCssByResource", array(0 => $context["file"]), "method");
                    echo "
  ";
                } else {
                    // line 11
                    echo "    <link href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array())), "method"), "html", null, true);
                    echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "media", array()), "html", null, true);
                    echo "\" />
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/parts.css/css_aggregation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  28 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head.css", weight="200")*/
/*  #}*/
/* {% if this.doCSSAggregation() %}*/
/* {% for file in this.getAggregateCSSResources() %}*/
/*   {% if this.doCSSOptimization() and this.isResourceSuitableForOptimization(file) %}*/
/*     {{ this.getInternalCssByResource(file)|raw }}*/
/*   {% else %}*/
/*     <link href="{{ this.getResourceURL(file.url) }}" rel="stylesheet" type="text/css" media="{{ file.media }}" />*/
/*   {% endif %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
