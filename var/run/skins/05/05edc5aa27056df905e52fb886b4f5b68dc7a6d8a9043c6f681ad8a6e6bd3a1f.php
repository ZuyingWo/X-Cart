<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/header.twig */
class __TwigTemplate_3368d857765ad37fa4c8058cc0c01093b60e6c2b44538c60d58c4ed395bc0edf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAddonFilters", array(), "method")) {
            // line 8
            echo "  <div class=\"addons-filters\">
  
    <div class=\"addons-selectors\">
  
      <form name=\"addons-filter\" method=\"GET\" action=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
            echo "\">
        ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\FormId"))), "html", null, true);
            echo "
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getURLParams", array(), "method"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 15
                echo "          <input type=\"hidden\" name=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "  
        <div class=\"tag-filter-box combine-selector\">
          ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\AddonsSort", "fieldId" => "tag-filter", "fieldName" => "tag", "options" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagOptionsForSelector", array(), "method"), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagOptionsValueForSelector", array(), "method"), "attributes" => array("data-classes" => "tag-filter", "data-height" => "100%"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tags"))))), "html", null, true);
            echo "
        </div>
  
        <div class=\"vendor-filter-box combine-selector\">
          ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\AddonsSort", "fieldId" => "vendor-filter", "fieldName" => "vendor", "options" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVendorOptionsForSelector", array(), "method"), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVendorOptionsValueForSelector", array(), "method"), "attributes" => array("data-classes" => "vendor-filter", "data-height" => "100%"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Marketplace-Vendor"))))), "html", null, true);
            echo "
        </div>
  
        <div class=\"price-filter-box combine-selector\">
          ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\AddonsSort", "fieldId" => "price-filter", "fieldName" => "price", "disableSearch" => "true", "options" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPriceOptionsForSelector", array(), "method"), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPriceOptionsValueForSelector", array(), "method"), "attributes" => array("data-classes" => "price-filter", "data-height" => "100%"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price"))))), "html", null, true);
            echo "
        </div>
  
      </form>
  
    </div>
  
    ";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "marketplace.addons-filters"))), "html", null, true);
            echo "
  
    <div class=\"clear\"></div>
  
  </div>
";
        }
        // line 40
        echo "
";
        // line 41
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAddonFilters", array(), "method")) {
            // line 42
            echo "  <div class=\"addons-sort\">
    <ul class=\"addons-sort-box text-selector\">
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOptionsForSelector", array(), "method"));
            foreach ($context['_seq'] as $context["url"] => $context["name"]) {
                // line 45
                echo "      <li class=\"sort";
                if (($context["url"] == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOptionsValueForSelector", array(), "method"))) {
                    echo " selected";
                }
                echo "\"><a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['url'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  103 => 45,  99 => 44,  95 => 42,  93 => 41,  90 => 40,  81 => 34,  71 => 27,  64 => 23,  57 => 19,  53 => 17,  42 => 15,  38 => 14,  34 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="350")*/
/*  #}*/
/* */
/* {% if this.isVisibleAddonFilters() %}*/
/*   <div class="addons-filters">*/
/*   */
/*     <div class="addons-selectors">*/
/*   */
/*       <form name="addons-filter" method="GET" action="{{ url() }}">*/
/*         {{ widget('\\XLite\\View\\FormField\\Input\\FormId') }}*/
/*         {% for name, value in this.getURLParams() %}*/
/*           <input type="hidden" name="{{ name }}" value="{{ value }}" />*/
/*         {% endfor %}*/
/*   */
/*         <div class="tag-filter-box combine-selector">*/
/*           {{ widget('\\XLite\\View\\FormField\\Select\\AddonsSort', fieldId='tag-filter', fieldName='tag', options=this.getTagOptionsForSelector(), value=this.getTagOptionsValueForSelector(), attributes={'data-classes': 'tag-filter', 'data-height': '100%'}, label=t('Tags')) }}*/
/*         </div>*/
/*   */
/*         <div class="vendor-filter-box combine-selector">*/
/*           {{ widget('\\XLite\\View\\FormField\\Select\\AddonsSort', fieldId='vendor-filter', fieldName='vendor', options=this.getVendorOptionsForSelector(), value=this.getVendorOptionsValueForSelector(), attributes={'data-classes': 'vendor-filter', 'data-height': '100%'}, label=t('Marketplace-Vendor')) }}*/
/*         </div>*/
/*   */
/*         <div class="price-filter-box combine-selector">*/
/*           {{ widget('\\XLite\\View\\FormField\\Select\\AddonsSort', fieldId='price-filter', fieldName='price', disableSearch='true', options=this.getPriceOptionsForSelector(), value=this.getPriceOptionsValueForSelector(), attributes={'data-classes': 'price-filter', 'data-height': '100%'}, label=t('Price')) }}*/
/*         </div>*/
/*   */
/*       </form>*/
/*   */
/*     </div>*/
/*   */
/*     {{ widget_list('marketplace.addons-filters') }}*/
/*   */
/*     <div class="clear"></div>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if this.isVisibleAddonFilters() %}*/
/*   <div class="addons-sort">*/
/*     <ul class="addons-sort-box text-selector">*/
/*       {% for url, name in this.getSortOptionsForSelector() %}*/
/*       <li class="sort{% if url == this.getSortOptionsValueForSelector() %} selected{% endif %}"><a href="{{ url }}">{{ name }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
