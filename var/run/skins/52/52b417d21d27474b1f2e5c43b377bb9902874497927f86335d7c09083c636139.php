<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/message.twig */
class __TwigTemplate_126c2e5bcfccc4d20e303a2bc662059d1710fe725d559b6880790c646a719d55 extends \XLite\Core\Templating\Twig\Template
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
<div class='inline-editor-message inline-editor--switchable'>
    ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInlineEditorAvailable", array(), "method")) {
            // line 9
            echo "    <span class='inline-editor-message_label'>";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are now in preview mode"));
            echo "</span>
    ";
        } else {
            // line 11
            echo "    <span class='inline-editor-message_label'>";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Inline editor is unavailable due to TinyMCE"));
            echo "</span>
    ";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/inline_editable/panel_parts/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor label*/
/*  #*/
/*  # @ListChild (list="inline_editor", weight="10")*/
/*  #}*/
/* */
/* <div class='inline-editor-message inline-editor--switchable'>*/
/*     {% if this.isInlineEditorAvailable() %}*/
/*     <span class='inline-editor-message_label'>{{ t('You are now in preview mode')|raw }}</span>*/
/*     {% else %}*/
/*     <span class='inline-editor-message_label'>{{ t('Inline editor is unavailable due to TinyMCE')|raw }}</span>*/
/*     {% endif %}*/
/* </div>*/
