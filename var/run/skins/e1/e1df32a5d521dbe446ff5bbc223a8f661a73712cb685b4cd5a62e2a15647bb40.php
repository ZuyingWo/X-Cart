<?php

/* /var/www/next/output/xcart/src/skins/admin/address/order/parts/info.twig */
class __TwigTemplate_b8c6f478b45d16473034027948cf78582b6860fadd0d9310557b3605d6945970 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"info\">
  <strong>
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "origProfile", array())) {
            // line 10
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("profile_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "origProfile", array()), "profileId", array())))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 12
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "  </strong>
  <span class=\"separator\">-</span>
  ";
        // line 17
        echo "  <span class=\"email\">
  ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Inline\\Input\\Text\\Email", "entity" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getProfile", array(), "method"), "name" => "address_login", "fieldName" => "login", "fieldNamespace" => "address_login"))), "html", null, true);
        echo "
  </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/address/order/parts/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  44 => 17,  40 => 14,  34 => 12,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Order address : info*/
/*  #*/
/*  # @ListChild (list="address.order.main", weight="100")*/
/*  #}*/
/* */
/* <div class="info">*/
/*   <strong>*/
/*     {% if this.order.origProfile %}*/
/*       <a href="{{ url('profile', '', {'profile_id': this.order.origProfile.profileId}) }}">{{ this.getName() }}</a>*/
/*     {% else %}*/
/*       {{ this.getName() }}*/
/*     {% endif %}*/
/*   </strong>*/
/*   <span class="separator">-</span>*/
/*   {#<span class="email"><a href="mailto:{{ this.getEmail() }}">{{ this.getEmail() }}</a></span>#}*/
/*   <span class="email">*/
/*   {{ widget('\\XLite\\View\\FormField\\Inline\\Input\\Text\\Email', entity=this.order.getProfile(), name='address_login', fieldName='login', fieldNamespace='address_login') }}*/
/*   </span>*/
/* </div>*/
/* */
