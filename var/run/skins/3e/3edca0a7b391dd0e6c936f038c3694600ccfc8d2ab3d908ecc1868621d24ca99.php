<?php

/* /var/www/next/output/xcart/src/skins/admin/body/header_right.twig */
class __TwigTemplate_34588862d0e26c73fedc06303e52a928f49acb3896c947daddaf1b0e4e16a3fc extends \XLite\Core\Templating\Twig\Template
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
<div id=\"header-right\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header.right"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/body/header_right.twig";
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
/*  # Header (right part)*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header", weight="9000")*/
/*  #}*/
/* */
/* <div id="header-right">*/
/*   {{ widget_list('admin.main.page.header.right') }}*/
/* </div>*/
/* */
