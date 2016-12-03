<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/script_config.twig */
class __TwigTemplate_45533675a4708150447ac1a3430ac9b8fed75f737a4b4821af6cf9b01b91f763 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
var xliteConfig = {
  script:   '";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getScript", array(), "method");
        echo "',
  target:   '";
        // line 10
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method");
        echo "',
  language: '";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "getCode", array(), "method"), "html", null, true);
        echo "',
  form_id: '";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "xlite", array()), "formId", array()), "html", null, true);
        echo "',
  form_id_name: '";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite::FORM_ID"), "html", null, true);
        echo "',
  developer_mode: ";
        // line 14
        echo (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDeveloperMode", array(), "method")) ? ("true") : ("false"));
        echo ",
};
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/script_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1300")*/
/*  #}*/
/* */
/* <script type="text/javascript">*/
/* var xliteConfig = {*/
/*   script:   '{{ this.getScript()|raw }}',*/
/*   target:   '{{ this.getTarget()|raw }}',*/
/*   language: '{{ this.currentLanguage.getCode() }}',*/
/*   form_id: '{{ this.xlite.formId }}',*/
/*   form_id_name: '{{ constant('XLite::FORM_ID') }}',*/
/*   developer_mode: {{ this.isDeveloperMode() ? 'true' : 'false' }},*/
/* };*/
/* </script>*/
/* */
