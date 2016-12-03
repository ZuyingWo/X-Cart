<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/conditions/name.twig */
class __TwigTemplate_61b467deb66ec92809b77cbc4dfe668b223d379028de7644114b54531f0e1af9 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"condition name\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "name", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "name"), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Name"))))), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/conditions/name.twig";
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
/*  # @ListChild (list="qsl.specialoffersbase.special_offers.list.search.conditions", weight="100")*/
/*  #}*/
/* */
/* <li class="condition name">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='name', value=this.getCondition('name'), label=t('Name')) }}*/
/* </li>*/
