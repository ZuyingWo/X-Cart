<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/buttons.approved.twig */
class __TwigTemplate_cf312059d18a81c7e6da94b245794b07be90446709e17c19571dbf97d4665c21 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "isApproved", array(), "method")) {
            // line 7
            echo "  <div class=\"button submit\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "style" => "regular-main-button button-submit"))), "html", null, true);
            echo "
  </div>
";
        }
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "isNew", array(), "method")) {
            // line 13
            echo "  <div class=\"button submit\">
    ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "style" => "regular-main-button button-create", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Create"))))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/buttons.approved.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  35 => 13,  33 => 12,  30 => 11,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="review.modify.buttons.approved", weight="600")*/
/*  #}*/
/* {% if this.entity.isApproved() %}*/
/*   <div class="button submit">*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', style='regular-main-button button-submit') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if this.entity.isNew() %}*/
/*   <div class="button submit">*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', style='regular-main-button button-create', label=t('Create')) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
