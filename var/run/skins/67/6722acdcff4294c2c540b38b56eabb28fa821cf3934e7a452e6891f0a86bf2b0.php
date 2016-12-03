<?php

/* modules/XC/Reviews/vote_bar/vote_bar.twig */
class __TwigTemplate_95b871d110fb24a2c1586f708d3bfea90415c7069114f2073800c6c69e8c6a43 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div class=\"vote-bar";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            echo " editable";
        }
        echo "\">

  <div class=\"stars-row\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 9
            echo "      <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </div>

  <div class=\"stars-row static\"  style=\"width: ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPercent", array(), "method"), "html", null, true);
        echo "%;\">
    <div class=\"stars-row full\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 16
            echo "        <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
  </div>

  ";
        // line 21
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            // line 22
            echo "  <div class=\"stars-row hovered\" style=\"display: none;\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
                // line 24
                echo "      <div class=\"star-single star-num-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["num"], "html", null, true);
                echo "\"><span class=\"fa fa-star\"></span></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </div>

  <input type=\"hidden\" name=\"";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldName", array(), "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRating", array(), "method"), "html", null, true);
            echo "\" />
  ";
        }
        // line 30
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/vote_bar/vote_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  88 => 28,  84 => 26,  75 => 24,  71 => 23,  68 => 22,  66 => 21,  61 => 18,  54 => 16,  50 => 15,  45 => 13,  41 => 11,  34 => 9,  30 => 8,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Vote bar*/
/*  #}*/
/* */
/* <div class="vote-bar{% if this.isEditable() %} editable{% endif %}">*/
/* */
/*   <div class="stars-row">*/
/*     {% for num in this.getStarsCount() %}*/
/*       <div class="star-single"><span class="fa fa-star"></span></div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <div class="stars-row static"  style="width: {{ this.getPercent() }}%;">*/
/*     <div class="stars-row full">*/
/*       {% for num in this.getStarsCount() %}*/
/*         <div class="star-single"><span class="fa fa-star"></span></div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if this.isEditable() %}*/
/*   <div class="stars-row hovered" style="display: none;">*/
/*     {% for num in this.getStarsCount() %}*/
/*       <div class="star-single star-num-{{ num }}"><span class="fa fa-star"></span></div>*/
/*     {% endfor %}*/
/*   </div>*/
/* */
/*   <input type="hidden" name="{{ this.getFieldName() }}" value="{{ this.getRating() }}" />*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
