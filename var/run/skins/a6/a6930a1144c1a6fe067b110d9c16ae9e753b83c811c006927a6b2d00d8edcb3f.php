<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.subject.twig */
class __TwigTemplate_0f8488048a1126c180f48c75745cd679a2e73896c5e663bdf22f3aa02ab77bfd extends \XLite\Core\Templating\Twig\Template
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
<div class=\"form-item\">
  <label for=\"subject\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subject")), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This field is required.")), "html", null, true);
        echo "\">*</span>
  </label>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "subject", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subject")), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "subject"), "method"), "fieldOnly" => "true", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.subject.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Subject*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="300")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   <label for="subject">*/
/*     {{ t('Subject') }}*/
/*     <span class="form-required" title="{{ t('This field is required.') }}">*</span>*/
/*   </label>*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='subject', placeholder=t('Subject'), value=this.getValue('subject'), fieldOnly='true', required='true') }}*/
/* </div>*/
/* */
