<?php

/* /var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.alt.twig */
class __TwigTemplate_f0a31b3c989ef88e45e5108bf897a2dfee80e132250efb8ebd0f5b36cae02620 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasAlt", array(), "method")) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
  <li role=\"presentation\" class=\"alt-text\">
    <div class=\"value\">
      <b>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Alt")), "html", null, true);
            echo ":</b>
      <span>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "object", array()), "alt", array()), "html", null, true);
            echo "</span>
      <div class=\"right-fade\"></div>
    </div>
    <div class=\"input-group input-group-sm\">
      <span class=\"input-group-addon\">";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Alt")), "html", null, true);
            echo ":</span>
      <input type=\"text\" name=\"";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "[alt]\" v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVModel", array(), "method"), "html", null, true);
            echo ".alt\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "object", array()), "alt", array()), "html", null, true);
            echo "\" class=\"form-control input-alt\" />
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.alt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  40 => 16,  33 => 12,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="50")*/
/*  #}*/
/* */
/* {% if this.hasAlt() %}*/
/*   <li role="presentation" class="divider"></li>*/
/*   <li role="presentation" class="alt-text">*/
/*     <div class="value">*/
/*       <b>{{ t('Alt') }}:</b>*/
/*       <span>{{ this.object.alt }}</span>*/
/*       <div class="right-fade"></div>*/
/*     </div>*/
/*     <div class="input-group input-group-sm">*/
/*       <span class="input-group-addon">{{ t('Alt') }}:</span>*/
/*       <input type="text" name="{{ this.getName() }}[alt]" v-model="{{ this.getVModel() }}.alt" value="{{ this.object.alt }}" class="form-control input-alt" />*/
/*     </div>*/
/*   </li>*/
/* {% endif %}*/
/* */
