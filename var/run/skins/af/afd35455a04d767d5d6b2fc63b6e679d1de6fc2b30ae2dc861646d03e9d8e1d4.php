<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/conditions/action.search.twig */
class __TwigTemplate_d4397f36d6c1a3b95336b315bb16ffdbb794c3a0d22a2901514d6da7779fae40 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<li class=\"action search\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search"))))), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/conditions/action.search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # @ListChild (list="qsl.specialoffersbase.special_offers.list.search.conditions", weight="200")*/
/*  #}*/
/* */
/* <li class="action search">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Search')) }}*/
/* </li>*/
