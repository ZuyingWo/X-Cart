<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/icon/image.twig */
class __TwigTemplate_0a05ba96253db3ec9a2d3195a0475e2df32f896ff90013b25d0dbc5b26d91da1 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"addon-icon\">
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "hasIcon", array(), "method")) {
            // line 10
            echo "    <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getPublicIconURL", array(), "method"), "html", null, true);
            echo "\" class=\"addon-icon\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "\" />
  ";
        } else {
            // line 12
            echo "    <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" class=\"addon-icon addon-default-icon\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "\" />
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/icon/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  33 => 12,  25 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.icon", weight="200")*/
/*  # @ListChild (list="itemsList.module.install.columns.icon", weight="200")*/
/*  #}*/
/* */
/* <div class="addon-icon">*/
/*   {% if this.module.hasIcon() %}*/
/*     <img src="{{ this.module.getPublicIconURL() }}" class="addon-icon" alt="{{ this.module.getModuleName() }}" />*/
/*   {% else %}*/
/*     <img src="{{ asset('images/spacer.gif') }}" class="addon-icon addon-default-icon" alt="{{ this.module.getModuleName() }}" />*/
/*   {% endif %}*/
/* </div>*/
/* */
