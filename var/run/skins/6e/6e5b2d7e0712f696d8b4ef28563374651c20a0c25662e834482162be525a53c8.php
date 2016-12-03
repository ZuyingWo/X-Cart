<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/check.twig */
class __TwigTemplate_e245ef5f116fc6d4eb6d2ef8ee4d6cf2540c394c1e285f9933164caafaf7239b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method")) {
            // line 7
            echo "
  ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "
    <div class=\"kount-result\">

      <a name=\"fraud-info-";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "code", array()), "html", null, true);
                echo "\"></a>

      <h2>";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "service", array()), "html", null, true);
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("result")), "html", null, true);
                echo "</h2>

      ";
                // line 16
                if ($this->getAttribute($context["data"], "errors", array())) {
                    // line 17
                    echo "        <div class=\"alert alert-danger\">
          <strong>";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check was not performed due to error occurred!")), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getErrorsList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 21
                        echo "              <li>";
                        echo $context["error"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "          </ul>
        </div>
      ";
                }
                // line 26
                echo "
      ";
                // line 27
                if ($this->getAttribute($context["data"], "warnings", array())) {
                    // line 28
                    echo "        <div class=\"alert alert-warning\">
          <strong>";
                    // line 29
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning!")), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getWarningList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                        // line 32
                        echo "              <li>";
                        echo $context["warning"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "          </ul>
        </div>
      ";
                }
                // line 37
                echo "
      ";
                // line 38
                if ($this->getAttribute($context["data"], "getDisplayMessage", array(), "method")) {
                    // line 39
                    echo "        <p class=\"lead\">
          ";
                    // line 40
                    echo $this->getAttribute($context["data"], "getDisplayMessage", array(), "method");
                    echo ".
  
          ";
                    // line 42
                    if ($this->getAttribute($context["data"], "score", array())) {
                        // line 43
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score")), "html", null, true);
                        echo ": 
            <span class=\"lead ";
                        // line 44
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "scoreClass", array()), "html", null, true);
                        echo "\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "score", array()), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 46
                    echo "        </p>
      ";
                }
                // line 48
                echo "
      ";
                // line 49
                if ($this->getAttribute($context["data"], "serviceTransactionId", array())) {
                    // line 50
                    echo "        <p>
          
          ";
                    // line 52
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
                    echo ":
  
          ";
                    // line 54
                    if ($this->getAttribute($context["data"], "url", array())) {
                        // line 55
                        echo "            <a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 57
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                        echo "
          ";
                    }
                    // line 59
                    echo "  
        </p>
      ";
                }
                // line 62
                echo "
      ";
                // line 63
                if ($this->getAttribute($context["data"], "rules", array())) {
                    // line 64
                    echo "
        <h3>";
                    // line 65
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rules triggered")), "html", null, true);
                    echo ":</h3>

        <ul class=\"kount-result-lines\">
        ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getRulesList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                        // line 69
                        echo "          <li>";
                        echo $context["rule"];
                        echo "</li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "        </ul>
      ";
                }
                // line 73
                echo "
    </div>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
<br/>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 77,  201 => 73,  197 => 71,  188 => 69,  184 => 68,  178 => 65,  175 => 64,  173 => 63,  170 => 62,  165 => 59,  159 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 50,  138 => 49,  135 => 48,  131 => 46,  124 => 44,  119 => 43,  117 => 42,  112 => 40,  109 => 39,  107 => 38,  104 => 37,  99 => 34,  90 => 32,  86 => 31,  81 => 29,  78 => 28,  76 => 27,  73 => 26,  68 => 23,  59 => 21,  55 => 20,  50 => 18,  47 => 17,  45 => 16,  38 => 14,  33 => 12,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fraud check results */
/*  #*/
/*  # @ListChild (list="order", weight="1100")*/
/*  #}*/
/* {% if this.order.getFraudCheckData() %}*/
/* */
/*   {% for data in this.order.getFraudCheckData() %}*/
/* */
/*     <div class="kount-result">*/
/* */
/*       <a name="fraud-info-{{ data.code }}"></a>*/
/* */
/*       <h2>{{ data.service }} {{ t('result') }}</h2>*/
/* */
/*       {% if data.errors %}*/
/*         <div class="alert alert-danger">*/
/*           <strong>{{ t('Check was not performed due to error occurred!') }}</strong>*/
/*           <ul>*/
/*             {% for error in data.getErrorsList() %}*/
/*               <li>{{ error|raw }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if data.warnings %}*/
/*         <div class="alert alert-warning">*/
/*           <strong>{{ t('Warning!') }}</strong>*/
/*           <ul>*/
/*             {% for warning in data.getWarningList() %}*/
/*               <li>{{ warning|raw }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if data.getDisplayMessage() %}*/
/*         <p class="lead">*/
/*           {{ data.getDisplayMessage()|raw }}.*/
/*   */
/*           {% if data.score %}*/
/*             {{ t('Score') }}: */
/*             <span class="lead {{ data.scoreClass }}">{{ data.score }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*       {% endif %}*/
/* */
/*       {% if data.serviceTransactionId %}*/
/*         <p>*/
/*           */
/*           {{ t('Transaction ID') }}:*/
/*   */
/*           {% if data.url %}*/
/*             <a href="{{ data.url }}" target="_blank">{{ data.serviceTransactionId }}</a>*/
/*           {% else %}*/
/*             {{ data.serviceTransactionId }}*/
/*           {% endif %}*/
/*   */
/*         </p>*/
/*       {% endif %}*/
/* */
/*       {% if data.rules %}*/
/* */
/*         <h3>{{ t('Rules triggered') }}:</h3>*/
/* */
/*         <ul class="kount-result-lines">*/
/*         {% for rule in data.getRulesList() %}*/
/*           <li>{{ rule|raw }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/* */
/*   {% endfor %}*/
/* */
/* <br/>*/
/* */
/* {% endif %}*/
/* */
