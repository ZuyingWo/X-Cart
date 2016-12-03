<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/rating.twig */
class __TwigTemplate_b6744c481989c9a73377ef36d36f28fa885afcb5f163765f42b700ae6cc33b7b extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"input rating clearfix\">
  <div class=\"table-label\">
    <label for=\"rating\" class=\"rating\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rating")), "html", null, true);
        echo "</label>
  </div>

  <div class=\"star\">&nbsp;</div>
  <div class=\"table-value\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "rate" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "rating", array()), "is_editable" => "true", "max" => "5"))), "html", null, true);
        echo "
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Rating*/
/*  #*/
/*  # @ListChild (list="review.modify.fields", weight="200")*/
/*  #}*/
/* <li class="input rating clearfix">*/
/*   <div class="table-label">*/
/*     <label for="rating" class="rating">{{ t('Rating') }}</label>*/
/*   </div>*/
/* */
/*   <div class="star">&nbsp;</div>*/
/*   <div class="table-value">*/
/*     {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating', fieldName='rating', rate=this.entity.rating, is_editable='true', max='5') }}*/
/*   </div>*/
/* </li>*/
/* */
