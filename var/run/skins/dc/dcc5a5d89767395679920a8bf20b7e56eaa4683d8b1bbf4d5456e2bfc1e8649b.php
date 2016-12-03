<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.message.twig */
class __TwigTemplate_9d2f6e5382950b66965f5dd34ca271ded544d5e6542f5305a0b3aaa69d31259d extends \XLite\Core\Templating\Twig\Template
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
  <label for=\"message\" class=\"for-message\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Message")), "html", null, true);
        echo "
    <span class=\"form-required\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This field is required.")), "html", null, true);
        echo "\">*</span>
  </label>
  <div class=\"resizable-textarea\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your Message")), "fieldName" => "message", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "message"), "method"), "fieldOnly" => "true", "required" => "true"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ContactUs/contact_us/fields/field.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 13,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Message*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="400")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   <label for="message" class="for-message">*/
/*     {{ t('Message') }}*/
/*     <span class="form-required" title="{{ t('This field is required.') }}">*</span>*/
/*   </label>*/
/*   <div class="resizable-textarea">*/
/*     {{ widget('XLite\\View\\FormField\\Textarea\\Simple', placeholder=t('Your Message'), fieldName='message', value=this.getValue('message'), fieldOnly='true', required='true') }}*/
/*   </div>*/
/* </div>*/
/* */
