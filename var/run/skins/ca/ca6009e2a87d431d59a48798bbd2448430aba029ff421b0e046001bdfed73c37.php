<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/type.twig */
class __TwigTemplate_68cab75014635b37323141ad289bf943555d52d90b999124da7ab007f95c52d0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"create-param param-offer-type\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\QSL\\SpecialOffersBase\\View\\FormField\\Select\\OfferType", "fieldName" => "type_id", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("New offer:"))))), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/type.twig";
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
/*  # @ListChild (list="qsl.specialoffersbase.special_offers.list.create", weight="100")*/
/*  #}*/
/* */
/* <li class="create-param param-offer-type">*/
/*   {{ widget('XLite\\Module\\QSL\\SpecialOffersBase\\View\\FormField\\Select\\OfferType', fieldName='type_id', label=t('New offer:')) }}*/
/* </li>*/
