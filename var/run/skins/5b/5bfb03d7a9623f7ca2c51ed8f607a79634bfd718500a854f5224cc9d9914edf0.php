<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/NewsletterSubscriptions/form/parts/form.twig */
class __TwigTemplate_17915df8040d9eb41035cda19910301f017a6402c3a7ebdd849f2536a2b44b78 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form", array("formTarget" => "NewsletterSubscriptions", "formAction" => "subscribe"));        // line 8
        echo "    <div class=\"subscription-form-label\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormLabel", array(), "method"), "html", null, true);
        echo "
    </div>
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "fieldName" => "email", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enter email address")), "maxlength" => "255", "fieldOnly" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFieldOnly", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email"))))), "html", null, true);
        echo "
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subscribe"))))), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/NewsletterSubscriptions/form/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  31 => 11,  26 => 9,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Subscribe block*/
/*  #*/
/*  # @ListChild (list="NewsletterSubscriptions.footer.form-block", weight="100")*/
/*  #}*/
/* */
/* {% form '\\XLite\\View\\Form' with {formTarget: 'NewsletterSubscriptions', formAction: 'subscribe'} %}*/
/*     <div class="subscription-form-label">*/
/*         {{ this.getFormLabel() }}*/
/*     </div>*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', fieldName='email', required='true', placeholder=t('Enter email address'), maxlength='255', fieldOnly=this.isFieldOnly(), label=t('Email')) }}*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label=t('Subscribe')) }}*/
/* {% endform %}*/
/* */
