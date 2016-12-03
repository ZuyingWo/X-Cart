<?php

/* trial_notice/body.twig */
class __TwigTemplate_041de5301c64e6ff495e34355d6a0839ffab4f0bf2651247fbf7815006c37db8 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div class=\"trial-notice-form alert alert-warning\">

  <div class=\"indent title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your X-Cart installation is licensed for evaluation purposes only.")), "html", null, true);
        echo "</div>

  <div class=\"indent\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You must register your installation before you can use it for real sales")), "html", null, true);
        echo "</div>

  <div class=\"buttons\">

    ";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLoggedAdmin", array(), "method")) {
            // line 14
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "label" => "Purchase premium license", "style" => "regular-main-button purchase-button", "jsCode" => (("window.open('" . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPurchaseURL", array(), "method")) . "', '_blank');")))), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLoggedAdmin", array(), "method")) {
            // line 17
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "label" => "Purchase premium license", "style" => "regular-main-button purchase-button", "jsCode" => (("window.open('" . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdminURL", array(), "method")) . "', '_blank');")))), "html", null, true);
            echo "
    ";
        }
        // line 19
        echo "
    <div class=\"text or\">";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</div>

    ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "label" => "Activate free license", "style" => "regular-button", "jsCode" => (("window.open('" . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdminURL", array(), "method")) . "?target=activate_free_license', '_blank');")))), "html", null, true);
        echo "

    <div class=\"text\">";
        // line 24
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Contact us trial notice", array("contactURL" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContactUsURL", array(), "method"))));
        echo "</div>

  </div>

  <div class=\"indent faq\">";
        // line 28
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("For details refer to X-Cart license", array("licenseAgreementURL" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLicenseAgreementURL", array(), "method"))));
        echo "</div>

  <div class=\"indent important\">";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Removal of this message is allowed only through activation of a free or premium license.")), "html", null, true);
        echo "</div>

  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "trial_notice/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  73 => 28,  66 => 24,  61 => 22,  56 => 20,  53 => 19,  47 => 17,  44 => 16,  38 => 14,  36 => 13,  29 => 9,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Trial notice popup dialog*/
/*  #}*/
/* */
/* <div class="trial-notice-form alert alert-warning">*/
/* */
/*   <div class="indent title">{{ t('Your X-Cart installation is licensed for evaluation purposes only.') }}</div>*/
/* */
/*   <div class="indent">{{ t('You must register your installation before you can use it for real sales') }}</div>*/
/* */
/*   <div class="buttons">*/
/* */
/*     {% if this.isLoggedAdmin() %}*/
/*       {{ widget('\\XLite\\View\\Button\\Regular', label='Purchase premium license', style='regular-main-button purchase-button', jsCode='window.open(\'' ~ this.getPurchaseURL() ~ '\', \'_blank\');') }}*/
/*     {% endif %}*/
/*     {% if not this.isLoggedAdmin() %}*/
/*       {{ widget('\\XLite\\View\\Button\\Regular', label='Purchase premium license', style='regular-main-button purchase-button', jsCode='window.open(\'' ~ this.getAdminURL() ~ '\', \'_blank\');') }}*/
/*     {% endif %}*/
/* */
/*     <div class="text or">{{ t('or') }}</div>*/
/* */
/*     {{ widget('\\XLite\\View\\Button\\Regular', label='Activate free license', style='regular-button', jsCode='window.open(\'' ~ this.getAdminURL() ~ '?target=activate_free_license\', \'_blank\');') }}*/
/* */
/*     <div class="text">{{ t('Contact us trial notice', {'contactURL': this.getContactUsURL()})|raw }}</div>*/
/* */
/*   </div>*/
/* */
/*   <div class="indent faq">{{ t('For details refer to X-Cart license', {'licenseAgreementURL': this.getLicenseAgreementURL()})|raw }}</div>*/
/* */
/*   <div class="indent important">{{ t('Removal of this message is allowed only through activation of a free or premium license.') }}</div>*/
/* */
/*   <div class="clear"></div>*/
/* </div>*/
/* */
