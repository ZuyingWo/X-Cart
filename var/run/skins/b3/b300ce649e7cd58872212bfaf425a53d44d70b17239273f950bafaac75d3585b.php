<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.email.twig */
class __TwigTemplate_f9db44ffa84c3dbfa1a65cca26d3d40c6577d637f81779603d9f2820abe91175 extends \XLite\Core\Templating\Twig\Template
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
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("email@example.com")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your email")), "fieldName" => "email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "email"), "method"), "fieldOnly" => "false", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # E-mail*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="200")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', placeholder=t('email@example.com'), label=t('Your email'), fieldName='email', value=this.getValue('email'), fieldOnly='false', required='true') }}*/
/* </div>*/
/* */
