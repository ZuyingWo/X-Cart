<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/show_hidden_button.twig */
class __TwigTemplate_fd30450817fa3ada0d2ddbc9668b212e20c607f3edf21665db4efa29ab37373e extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-show layout-editor--switchable'>
\t<span class='layout-editor-show_icon'><i class=\"fa fa-eye-slash\"></i></span>
\t<span class='layout-editor-show_blocks-counter'>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Some")), "html", null, true);
        echo "</span>
\t<span class='layout-editor-show_label'>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("disabled blocks")), "html", null, true);
        echo "</span>
\t";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Show all")), "style" => "layout-editor-show_button", "jsCode" => "core.trigger(\"layout.show_hidden\");"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/layout_editor/panel_parts/show_hidden_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor show hidden blocks button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="15")*/
/*  #}*/
/* */
/* <div class='layout-editor-show layout-editor--switchable'>*/
/* 	<span class='layout-editor-show_icon'><i class="fa fa-eye-slash"></i></span>*/
/* 	<span class='layout-editor-show_blocks-counter'>{{ t('Some') }}</span>*/
/* 	<span class='layout-editor-show_label'>{{ t('disabled blocks') }}</span>*/
/* 	{{ widget('XLite\\View\\Button\\SimpleLink', label=t('Show all'), style='layout-editor-show_button', jsCode='core.trigger("layout.show_hidden");') }}*/
/* </div>*/
/* */
