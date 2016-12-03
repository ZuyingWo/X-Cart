<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/message.twig */
class __TwigTemplate_7a52758d18703351dc1a08383fa1a47a2cb1820ff85626da044f31e89c579d6d extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-message layout-editor--switchable'>
<span class='layout-editor-message_label'>";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are now in layout editing mode"));
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/message.twig";
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
/*  # Layout editor label*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="10")*/
/*  #}*/
/* */
/* <div class='layout-editor-message layout-editor--switchable'>*/
/* <span class='layout-editor-message_label'>{{ t('You are now in layout editing mode')|raw }}</span>*/
/* </div>*/
