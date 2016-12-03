<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.name.twig */
class __TwigTemplate_5c61a3e054c0edcf227dbf1cea73ccd0869bd0c3e3648aadc16c411dcdbd11cd extends \XLite\Core\Templating\Twig\Template
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
  <label for=\"name\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your name")), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This field is required.")), "html", null, true);
        echo "\">*</span>
  </label>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Full Name")), "fieldName" => "name", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "name"), "method"), "fieldOnly" => "true", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.name.twig";
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
/*  # Name*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="100")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   <label for="name">*/
/*     {{ t('Your name') }}*/
/*     <span class="form-required" title="{{ t('This field is required.') }}">*</span>*/
/*   </label>*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text', placeholder=t('Full Name'), fieldName='name', value=this.getValue('name'), fieldOnly='true', required='true') }}*/
/* </div>*/
/* */
