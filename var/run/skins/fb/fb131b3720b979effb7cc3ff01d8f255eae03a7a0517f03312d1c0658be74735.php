<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/buttons.pending.twig */
class __TwigTemplate_ed60dd9a320c1910fcbe4bff8a005d47251538e18fbf2897d7037420543523da extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"button submit\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "name" => "approve", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Approve")), "style" => "regular-main-button button-approve", "jsCode" => "onApproveButton(this);"))), "html", null, true);
        echo "
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "name" => "delete", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "style" => "button-delete", "jsCode" => "onRemoveButton(this);"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/buttons.pending.twig";
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
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="review.modify.buttons.pending", weight="600")*/
/*  #}*/
/* <div class="button submit">*/
/*   {{ widget('\\XLite\\View\\Button\\Regular', name='approve', label=t('Approve'), style='regular-main-button button-approve', jsCode='onApproveButton(this);') }}*/
/*   {{ widget('\\XLite\\View\\Button\\Regular', name='delete', label=t('Remove'), style='button-delete', jsCode='onRemoveButton(this);') }}*/
/* </div>*/
/* */
