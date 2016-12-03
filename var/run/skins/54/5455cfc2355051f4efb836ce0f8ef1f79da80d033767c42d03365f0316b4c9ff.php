<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.email.twig */
class __TwigTemplate_eb2fa200b2b906da068e6db64a1d2f5938d286a482d3df7357b2e053b79ebf4d extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"form-item clearfix\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "required" => "true", "fieldName" => "email", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email address")), "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "email", array()), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your email")), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("We use this email in case we need additional information on your review. We do not use it for any kind of mailing lists or spam subscriptions"))))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # E-mail*/
/*  #*/
/*  # @ListChild (list="review.add.fields", weight="300")*/
/*  #}*/
/* <div class="form-item clearfix">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', required='true', fieldName='email', placeholder=t('Email address'), value=this.review.email, label=t('Your email'), help=t('We use this email in case we need additional information on your review. We do not use it for any kind of mailing lists or spam subscriptions')) }}*/
/* </div>*/
/* */
