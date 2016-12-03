<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/action.create.twig */
class __TwigTemplate_54160c5f58143484e403efbfc23c7fbc62712f645a634f705706a6212af6a1b8 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"action create\">
  <div class=\"table-value\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Create"))))), "html", null, true);
        echo "</div>
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/SpecialOffersBase/special_offers/create/action.create.twig";
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
/*  # @ListChild (list="qsl.specialoffersbase.special_offers.list.create", weight="200")*/
/*  #}*/
/* */
/* <li class="action create">*/
/*   <div class="table-value">{{ widget('\\XLite\\View\\Button\\Submit', label=t('Create')) }}</div>*/
/* </li>*/
