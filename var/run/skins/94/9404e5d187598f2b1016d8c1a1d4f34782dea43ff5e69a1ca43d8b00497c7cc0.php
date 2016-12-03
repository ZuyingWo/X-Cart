<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/product.twig */
class __TwigTemplate_549febcc4560ef6581bd6e169c01dcb3fcd9aa1541417465b26e4e290487d2b4 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"input clearfix\">
  <div class=\"table-label\">
    <label for=\"product\" class=\"product\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product")), "html", null, true);
        echo "</label>
  </div>

  <div class=\"star\">*</div>
  ";
        // line 12
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRequestTargetProductId", array(), "method")) {
            // line 13
            echo "    <div class=\"wrapper-table-value\">
      ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\Model\\ProductSelector", "fieldOnly" => "true", "fieldName" => "product_title", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Start typing product name or SKU")), "is_model_required" => "true", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method")))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRequestTargetProductId", array(), "method")) {
            // line 19
            echo "    <input type=\"hidden\" name=\"product_id\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method"), "html", null, true);
            echo "\" class=\"product-id-value\" id=\"product-id\" />
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRequestTargetProductId", array(), "method")) {
            // line 23
            echo "    <div class=\"table-value\">
      ";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRequestTargetProductTitle", array(), "method"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 27
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  60 => 24,  57 => 23,  55 => 22,  52 => 21,  46 => 19,  44 => 18,  41 => 17,  35 => 14,  32 => 13,  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Product*/
/*  #*/
/*  # @ListChild (list="review.modify.fields", weight="100")*/
/*  #}*/
/* <li class="input clearfix">*/
/*   <div class="table-label">*/
/*     <label for="product" class="product">{{ t('Product') }}</label>*/
/*   </div>*/
/* */
/*   <div class="star">*</div>*/
/*   {% if not this.getRequestTargetProductId() %}*/
/*     <div class="wrapper-table-value">*/
/*       {{ widget('\\XLite\\View\\FormField\\Select\\Model\\ProductSelector', fieldOnly='true', fieldName='product_title', placeholder=t('Start typing product name or SKU'), is_model_required='true', value=this.getProductId()) }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if not this.getRequestTargetProductId() %}*/
/*     <input type="hidden" name="product_id" value="{{ this.getProductId() }}" class="product-id-value" id="product-id" />*/
/*   {% endif %}*/
/* */
/*   {% if this.getRequestTargetProductId() %}*/
/*     <div class="table-value">*/
/*       {{ this.getRequestTargetProductTitle() }}*/
/*     </div>*/
/*   {% endif %}*/
/* </li>*/
/* */
