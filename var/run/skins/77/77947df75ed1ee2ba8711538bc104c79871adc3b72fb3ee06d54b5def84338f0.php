<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig */
class __TwigTemplate_d065f6e287afa48598f1f4c7ed69edbe4025f83e12ae46c69f56ed0eebe90e20 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.settings"), "method")) {
            // line 8
            echo "  <li class=\"settings\">
    <div>
      <a href=\"#settings-panel\" class=\"item-title\">
        <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Settings")), "html", null, true);
            echo "</span>
        <span class=\"mm-next\"></span>
      </a>
      <div class=\"Panel\" id=\"settings-panel\">
        <ul class=\"Inset\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.settings"), "method"));
            foreach ($context['_seq'] as $context["index"] => $context["w"]) {
                // line 17
                echo "            ";
                if ($this->getAttribute($context["w"], "isVisible", array(), "method")) {
                    // line 18
                    echo "              <li>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
                    echo "</li>
            ";
                }
                // line 20
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
      </div>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  50 => 20,  44 => 18,  41 => 17,  37 => 16,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="390")*/
/*  #}*/
/* */
/* {% if this.getViewList('slidebar.settings') %}*/
/*   <li class="settings">*/
/*     <div>*/
/*       <a href="#settings-panel" class="item-title">*/
/*         <span>{{ t('Settings') }}</span>*/
/*         <span class="mm-next"></span>*/
/*       </a>*/
/*       <div class="Panel" id="settings-panel">*/
/*         <ul class="Inset">*/
/*           {% for index, w in this.getViewList('slidebar.settings') %}*/
/*             {% if w.isVisible() %}*/
/*               <li>{{ w.display() }}</li>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </li>*/
/* {% endif %}*/
/* */
