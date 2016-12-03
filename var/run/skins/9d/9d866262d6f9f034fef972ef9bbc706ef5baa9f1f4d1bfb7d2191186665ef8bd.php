<?php

/* /var/www/next/output/xcart/src/skins/admin/main/parts_non_root/block.footer.twig */
class __TwigTemplate_46d4635ca1abd6d5ab3d0a168995c93f65b092a27635d10cec4121847b7890b9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"welcome-footer\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("To change the roles of your profile, contact the store administrator")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/main/parts_non_root/block.footer.twig";
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
/*  # Block content : footer*/
/*  #*/
/*  # @ListChild (list="dashboard-center.welcome.non-root.content", weight="20")*/
/*  #}*/
/* */
/* <div class="welcome-footer">*/
/*   {{ t('To change the roles of your profile, contact the store administrator') }}*/
/* </div>*/
/* */
