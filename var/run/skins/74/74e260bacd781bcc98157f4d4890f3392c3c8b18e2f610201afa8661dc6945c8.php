<?php

/* /var/www/next/output/xcart/src/skins/admin/modules_manager/installation_type/buttons.twig */
class __TwigTemplate_186372a1c31fe84948e5e7fc3d87c2aa0ed67095deb8613009e7849a521ecc15 extends \XLite\Core\Templating\Twig\Template
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
  <ul class=\"actions\">
    <li class=\"button\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Install anyway")), "action" => "install_addon_force"))), "html", null, true);
        echo "
    </li>
    <li class=\"or\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</li>
    <li class=\"button\">
      ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update modules"))))), "html", null, true);
        echo "
    </li>
  </ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules_manager/installation_type/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 13,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Install updates or not (select installation type)*/
/*  #*/
/*  # @ListChild (list="installation_types.buttons")*/
/*  #}*/
/* */
/*   <ul class="actions">*/
/*     <li class="button">*/
/*       {{ widget('\\XLite\\View\\Button\\Regular', label=t('Install anyway'), action='install_addon_force') }}*/
/*     </li>*/
/*     <li class="or">{{ t('or') }}</li>*/
/*     <li class="button">*/
/*       {{ widget('\\XLite\\View\\Button\\Submit', label=t('Update modules')) }}*/
/*     </li>*/
/*   </ul>*/
/* */
