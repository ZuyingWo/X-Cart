<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.subject.twig */
class __TwigTemplate_455c78a2cca89416bed946783c8326ba9013009ff8cde039a4ac773a68309c5e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "subject", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subject")), "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValue", array(0 => "subject"), "method"), "fieldOnly" => "false", "required" => "true"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/ContactUs/contact_us/fields/field.subject.twig";
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
/*  # Subject*/
/*  #*/
/*  # @ListChild (list="contact-us.send.fields", weight="300")*/
/*  #}*/
/* */
/* <div class="form-item">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='subject', placeholder=t(''), label=t('Subject'), value=this.getValue('subject'), fieldOnly='false', required='true') }}*/
/* </div>*/
/* */
