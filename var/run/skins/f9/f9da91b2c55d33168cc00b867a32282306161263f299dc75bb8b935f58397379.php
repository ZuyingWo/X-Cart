<?php

/* modules/XC/Reviews/product/details/rating.twig */
class __TwigTemplate_2d9e3beb5d3b34c1b2d4f15a646eddcdfc739e4e2625ea5b89a6490265c31fea extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRatingOnPage", array(), "method")) {
            // line 5
            echo "  <div class=\"product-average-rating\">
    <input type=\"hidden\" name=\"target_widget\" value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating\" />
    <input type=\"hidden\" name=\"widgetMode\" value=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMode", array(), "method"), "html", null, true);
            echo "\" />
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProduct", array(), "method")))), "html", null, true);
            echo "
    ";
            // line 9
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") > 0))) {
                // line 10
                echo "      <div class=\"reviews-count no-reviews\">
        &mdash;
        <a href=\"";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                echo "\" class=\"link-to-tab\">
          ";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method"), "html", null, true);
                echo "
        </a>
      </div>
    ";
            }
            // line 17
            echo "    ";
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") == 0))) {
                // line 18
                echo "      <div class=\"reviews-count\">
        ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No reviews.")), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 22
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedAddReview", array(), "method")) {
                // line 23
                echo "      <span class=\"separator\">|</span>
      <a href=\"";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                echo "\" class=\"link-to-tab\">
            ";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Be the first and leave a feedback.")), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                echo "
      </a>
    ";
            }
            // line 28
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/product/details/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  72 => 25,  68 => 24,  65 => 23,  62 => 22,  56 => 19,  53 => 18,  50 => 17,  43 => 13,  39 => 12,  35 => 10,  33 => 9,  29 => 8,  25 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #}*/
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*   <div class="product-average-rating">*/
/*     <input type="hidden" name="target_widget" value="\XLite\Module\XC\Reviews\View\Customer\ProductInfo\Details\AverageRating" />*/
/*     <input type="hidden" name="widgetMode" value="{{ this.getWidgetMode() }}" />*/
/*     {{ widget_list('reviews.product.rating', product=this.getRatedProduct()) }}*/
/*     {% if this.isVisibleReviewsCount() and this.getReviewsCount() > 0 %}*/
/*       <div class="reviews-count no-reviews">*/
/*         &mdash;*/
/*         <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*           {{ this.getReviewsCount() }}*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.isVisibleReviewsCount() and this.getReviewsCount() == 0 %}*/
/*       <div class="reviews-count">*/
/*         {{ t('No reviews.') }}*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.isAllowedAddReview() %}*/
/*       <span class="separator">|</span>*/
/*       <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*             {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink', label=t('Be the first and leave a feedback.'), product=this.product) }}*/
/*       </a>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
