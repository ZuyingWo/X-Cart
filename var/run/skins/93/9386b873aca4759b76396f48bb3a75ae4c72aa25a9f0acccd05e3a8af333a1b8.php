<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase.twig */
class __TwigTemplate_d6315a5dfeb77dda611d65fe93543b744280a434861f796ba384c3d967214b53 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canPurchase", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Addon\\Purchase", "moduleObj" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "style" => "main-button"))), "html", null, true);
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canPurchase", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 12
            echo "  <div class=\"or-activate\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ActivateKey", "label" => "Activate key", "isModule" => "true"))), "html", null, true);
            echo "
    ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => "Activate key", "isModule" => "true"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  35 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="200")*/
/*  #}*/
/* */
/* {% if this.canPurchase(this.module) %}*/
/*   {{ widget('\\XLite\\View\\Button\\Addon\\Purchase', moduleObj=this.module, style='main-button') }}*/
/* {% endif %}*/
/* */
/* {% if this.canPurchase(this.module) %}*/
/*   <div class="or-activate">{{ t('or') }}*/
/*     {{ widget('\\XLite\\View\\Button\\ActivateKey', label='Activate key', isModule='true') }}*/
/*     {{ widget('\\XLite\\View\\Button\\Addon\\EnterLicenseKey', label='Activate key', isModule='true') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
