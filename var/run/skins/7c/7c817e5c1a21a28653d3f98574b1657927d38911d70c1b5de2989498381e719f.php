<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/list.twig */
class __TwigTemplate_50e43893ea6f4c507c99ffee0102eed8e2454827863be436f7d180a822e22cbb extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Module\\Install");        // line 8
        echo "  <div class=\"marketplace-wrapper";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            echo " marketplace-landing";
        }
        echo "\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 9
(isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/list.twig", 9)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 10
        echo "  </div>
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\StickyPanel\\ItemsList\\InstallModules"))), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  30 => 9,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="400")*/
/*  #}*/
/* */
/* {% form '\\XLite\\View\\Form\\Module\\Install' %}*/
/*   <div class="marketplace-wrapper{% if this.isLandingPage() %} marketplace-landing{% endif %}">*/
/*     {% include this.getBody() %}*/
/*   </div>*/
/*   {{ widget('XLite\\View\\StickyPanel\\ItemsList\\InstallModules') }}*/
/* {% endform %}*/
/* */
