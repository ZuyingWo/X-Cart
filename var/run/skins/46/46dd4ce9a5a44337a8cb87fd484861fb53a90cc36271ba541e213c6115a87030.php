<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.address.twig */
class __TwigTemplate_361d3c2c509f47544bda5cb67e86afd8d3062729ed82272e44fba65a1fad8f00 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAddressMasksEditEnabled", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneAddresses", array(0 => 1), "method"), "label" => "Address masks", "rows" => "5", "cols" => "70", "fieldName" => "zone_addresses", "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zone address masks help"))))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: address masks template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="500")*/
/*  #}*/
/* */
/* {% if this.isAddressMasksEditEnabled() %}*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', value=this.zone.getZoneAddresses(1), label='Address masks', rows='5', cols='70', fieldName='zone_addresses', help=t('Zone address masks help')) }}*/
/* {% endif %}*/
/* */
