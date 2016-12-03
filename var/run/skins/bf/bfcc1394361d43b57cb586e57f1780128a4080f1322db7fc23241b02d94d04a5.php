<?php

/* /var/www/next/output/xcart/src/skins/admin/dashboard/parts/sidebar/order_stats.twig */
class __TwigTemplate_825b7c4f97ada03fdf1e3928bb37116e8c8b932221341eb38cf3f507befecbb5 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Order\\Statistics\\MiniInformer"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/dashboard/parts/sidebar/order_stats.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Recent orders block*/
/*  #*/
/*  # @ListChild (list="dashboard-sidebar", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Order\\Statistics\\MiniInformer') }}*/
/* */
