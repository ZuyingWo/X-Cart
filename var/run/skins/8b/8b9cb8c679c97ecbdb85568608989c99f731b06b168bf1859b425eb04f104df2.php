<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/review.twig */
class __TwigTemplate_a263e5609c4d8aec562f49fea32e685e55c3a075e933325b62ed1ecd50215848 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"input review-text clearfix\">
  <div class=\"table-label\">
    <label for=\"review\" class=\"review\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Text of review")), "html", null, true);
        echo "</label>
  </div>

  <div class=\"star\">&nbsp;</div>

  <div class=\"wrapper-table-value\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "fieldOnly" => "true", "fieldName" => "review", "cols" => "60", "rows" => "5", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "review", array())))), "html", null, true);
        echo "
  </div>

</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Review*/
/*  #*/
/*  # @ListChild (list="review.modify.fields", weight="500")*/
/*  #}*/
/* <li class="input review-text clearfix">*/
/*   <div class="table-label">*/
/*     <label for="review" class="review">{{ t('Text of review') }}</label>*/
/*   </div>*/
/* */
/*   <div class="star">&nbsp;</div>*/
/* */
/*   <div class="wrapper-table-value">*/
/*     {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', fieldOnly='true', fieldName='review', cols='60', rows='5', value=this.entity.review) }}*/
/*   </div>*/
/* */
/* </li>*/
/* */
