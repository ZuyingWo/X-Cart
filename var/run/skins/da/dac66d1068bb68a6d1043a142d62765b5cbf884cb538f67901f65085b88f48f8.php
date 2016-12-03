<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.message.twig */
class __TwigTemplate_fc862bb728dd2265cb32646284ad2d4966789555cdb051fba2473f0594400ddd extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"resizable-textarea\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Message")), "fieldName" => "message", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "message"), "method"), "fieldOnly" => "false", "required" => "true"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Message*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="400")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   <div class="resizable-textarea">*/
/*     {{ widget('XLite\\View\\FormField\\Textarea\\Simple', placeholder=t(''), label=t('Message'), fieldName='message', value=this.getValue('message'), fieldOnly='false', required='true') }}*/
/*   </div>*/
/* </div>*/
/* */
