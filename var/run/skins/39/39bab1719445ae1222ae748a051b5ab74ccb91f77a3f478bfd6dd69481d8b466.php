<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig */
class __TwigTemplate_c1519a6433dedd24e23ac1c8ad30292b65b8765f47537e8f4ead3d3ed449f28e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "import.failed.content.errors"))), "html", null, true);
        echo "

";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrors", array(), "method")) {
            // line 10
            echo "  <div class=\"much-errors\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Critical errors have been detected in the files you are trying to import. Please correct the errors and try again.")), "html", null, true);
            echo "</div>
";
        }
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBroken", array(), "method")) {
            // line 13
            echo "  <div class=\"much-errors\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Import has been cancelled.")), "html", null, true);
            echo "</div>
";
        }
        // line 15
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrorsOrWarnings", array(), "method")) {
            // line 16
            echo "  <div class=\"download-errors\">
      <a href=\"";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "import", "getErrorsFile")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Download error file")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  45 => 16,  43 => 15,  37 => 13,  35 => 12,  29 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import failed section : errors */
/*  #*/
/*  # @ListChild (list="import.failed.content", weight="100")*/
/*  #}*/
/* */
/* {{ widget_list('import.failed.content.errors') }}*/
/* */
/* {% if this.hasErrors() %}*/
/*   <div class="much-errors">{{ t('Critical errors have been detected in the files you are trying to import. Please correct the errors and try again.') }}</div>*/
/* {% endif %}*/
/* {% if this.isBroken() %}*/
/*   <div class="much-errors">{{ t('Import has been cancelled.') }}</div>*/
/* {% endif %}*/
/* {% if this.hasErrorsOrWarnings() %}*/
/*   <div class="download-errors">*/
/*       <a href="{{ url('import', 'getErrorsFile') }}">{{ t('Download error file') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
