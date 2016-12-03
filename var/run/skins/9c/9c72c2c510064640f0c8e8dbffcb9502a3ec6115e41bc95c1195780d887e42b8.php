<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/expired_keys.twig */
class __TwigTemplate_15d71694f3b8db1cd881d862c600342d82798e1c622d64b364f11f2b1dab62e1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasExpiredKeys", array(), "method")) {
            // line 8
            echo "  <div class=\"alert alert-warning expired-keys\">
    <div>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExpiredKeysMessage", array(), "method"), "html", null, true);
            echo "</div>
    <ul>
      <li class=\"header\">
        <div class=\"key-title\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("License key")), "html", null, true);
            echo "</div>
        <div class=\"key-exp-date\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Exp. date")), "html", null, true);
            echo "</div>
      </li>
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExpiredKeys", array(), "method"));
            foreach ($context['_seq'] as $context["i"] => $context["k"]) {
                // line 16
                echo "        <li>
          <div class=\"key-title\">";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
                echo "</div>
          <div class=\"key-exp-date\">";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["k"], "expDate", array()), "html", null, true);
                echo "</div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
    <div class=\"actions\">
      ";
            // line 23
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllKeysPurchaseURL", array(), "method")) {
                // line 24
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllKeysPurchaseURL", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Prolongate keys")), "style" => "regular-main-button", "blank" => "true"))), "html", null, true);
                echo "
      ";
            }
            // line 26
            echo "      <div class=\"revalidate-keys\">
        ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ProgressState", "label" => "Re-validate license keys"))), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"clear\"></div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/expired_keys.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  74 => 26,  68 => 24,  66 => 23,  62 => 21,  53 => 18,  49 => 17,  46 => 16,  42 => 15,  37 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Trial upgrade notice*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.buttons.sections", weight="50")*/
/*  #}*/
/* */
/* {% if this.hasExpiredKeys() %}*/
/*   <div class="alert alert-warning expired-keys">*/
/*     <div>{{ this.getExpiredKeysMessage() }}</div>*/
/*     <ul>*/
/*       <li class="header">*/
/*         <div class="key-title">{{ t('License key') }}</div>*/
/*         <div class="key-exp-date">{{ t('Exp. date') }}</div>*/
/*       </li>*/
/*       {% for i, k in this.getExpiredKeys() %}*/
/*         <li>*/
/*           <div class="key-title">{{ k.title }}</div>*/
/*           <div class="key-exp-date">{{ k.expDate }}</div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="actions">*/
/*       {% if this.getAllKeysPurchaseURL() %}*/
/*         {{ widget('\\XLite\\View\\Button\\Link', location=this.getAllKeysPurchaseURL(), label=t('Prolongate keys'), style='regular-main-button', blank='true') }}*/
/*       {% endif %}*/
/*       <div class="revalidate-keys">*/
/*         {{ widget('\\XLite\\View\\Button\\ProgressState', label='Re-validate license keys') }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
