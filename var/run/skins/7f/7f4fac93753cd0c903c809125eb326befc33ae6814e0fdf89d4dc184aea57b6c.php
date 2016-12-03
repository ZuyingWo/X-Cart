<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/totals.twig */
class __TwigTemplate_e894a18a1194e83c12a9d3c1c31f6f2b1fef872f140a08cc0b2aee2758f38ea5 extends \XLite\Core\Templating\Twig\Template
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
<td colspan=\"2\" class=\"total-title\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total"));
        echo ":</td>
<td class=\"total-item\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotalQty", array(), "method"), "html", null, true);
        echo "</td>
<td class=\"total-item\"></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals*/
/*  #*/
/*  # @ListChild (list="packing_slip.items", weight="10")*/
/*  #}*/
/* */
/* <td colspan="2" class="total-title">{{ t('Total')|raw }}:</td>*/
/* <td class="total-item">{{ this.getTotalQty() }}</td>*/
/* <td class="total-item"></td>*/
/* */
