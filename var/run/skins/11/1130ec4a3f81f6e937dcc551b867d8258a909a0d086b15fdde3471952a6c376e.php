<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/product/details/rating.twig */
class __TwigTemplate_9bb0abad8a28c0487074c83725219935f8f6d6cbe827ce06f0a2c9d96b410974 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRatingOnPage", array(), "method")) {
            // line 7
            echo "  <div class=\"product-average-rating\">
    <input type=\"hidden\" name=\"target_widget\" value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating\" />
    <input type=\"hidden\" name=\"widgetMode\" value=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMode", array(), "method"), "html", null, true);
            echo "\" />
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProduct", array(), "method")))), "html", null, true);
            echo "
    ";
            // line 11
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") > 0))) {
                // line 12
                echo "      <div class=\"reviews-count no-reviews\">
        <a href=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                echo "\" class=\"link-to-tab\">
          ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Reviews: X", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method")))), "html", null, true);
                echo "
        </a>
      </div>
    ";
            }
            // line 18
            echo "    ";
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") == 0))) {
                // line 19
                echo "      <div class=\"reviews-count\">
        ";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No reviews.")), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 23
            echo "    ";
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") == 0))) {
                // line 24
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                echo "\" class=\"link-to-tab\">
          ";
                // line 25
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedAddReview", array(), "method")) {
                    // line 26
                    echo "            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Be the first and leave a feedback.")), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                    echo "
          ";
                }
                // line 27
                echo "      
      </a>
    ";
            }
            // line 30
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/product/details/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  77 => 27,  71 => 26,  69 => 25,  64 => 24,  61 => 23,  55 => 20,  52 => 19,  49 => 18,  42 => 14,  38 => 13,  35 => 12,  33 => 11,  29 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="reviews.product.rating.average", weight="100")*/
/*  #}*/
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*   <div class="product-average-rating">*/
/*     <input type="hidden" name="target_widget" value="\XLite\Module\XC\Reviews\View\Customer\ProductInfo\Details\AverageRating" />*/
/*     <input type="hidden" name="widgetMode" value="{{ this.getWidgetMode() }}" />*/
/*     {{ widget_list('reviews.product.rating', product=this.getRatedProduct()) }}*/
/*     {% if this.isVisibleReviewsCount() and this.getReviewsCount() > 0 %}*/
/*       <div class="reviews-count no-reviews">*/
/*         <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*           {{ t('Reviews: X', {'count': this.getReviewsCount()}) }}*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.isVisibleReviewsCount() and this.getReviewsCount() == 0 %}*/
/*       <div class="reviews-count">*/
/*         {{ t('No reviews.') }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.isVisibleReviewsCount() and this.getReviewsCount() == 0 %}*/
/*       <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*           {% if this.isAllowedAddReview() %}*/
/*             {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink', label=t('Be the first and leave a feedback.'), product=this.product) }}*/
/*           {% endif %}      */
/*       </a>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
