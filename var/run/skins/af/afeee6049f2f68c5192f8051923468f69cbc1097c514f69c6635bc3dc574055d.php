<?php

/* /var/www/next/output/xcart/src/skins/admin/product/attributes/parts/action.remove.twig */
class __TwigTemplate_7dc23e1c2dfb828acd2e6fbb3faa67675229f052564fec51b002c9d06ef36fb8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRemovable", array(), "method")) {
            // line 8
            echo "  <div class=\"actions\">
  \t";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Remove", "buttonName" => (("delete[" . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "itemId", array())) . "]"), "label" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPemoveText", array(), "method"), "style" => "delete"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/attributes/parts/action.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Add offline method*/
/*  #*/
/*  # @ListChild (list="product.attributes.actions", weight="10")*/
/*  #}*/
/* */
/* {% if this.isRemovable() %}*/
/*   <div class="actions">*/
/*   	{{ widget('XLite\\View\\Button\\Remove', buttonName='delete[' ~ this.itemId ~ ']', label=this.getPemoveText(), style='delete') }}*/
/*   </div>*/
/* {% endif %}*/
