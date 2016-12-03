<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/Amazon/PayWithAmazon/order_controls.twig */
class __TwigTemplate_79e675c5c143f407e5bdac292c44937ebf5b571551e39dc21a20765489175acd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAmazonControlsVisible", array(), "method")) {
            // line 7
            echo "
  <h2>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("PayWithAmazon available actions")), "html", null, true);
            echo "</h2>

  <script type=\"text/javascript\">
    //<![CDATA[
    var lbl_amazon_pa_confirm_capture = '";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This operation will capture funds from customer. Please confirm to proceed.")), "html", null, true);
            echo "';
    var lbl_amazon_pa_confirm_void = '";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This operation will cancel order. Payment authorization will be voided. Please confirm to proceed.")), "html", null, true);
            echo "';
    var lbl_amazon_pa_confirm_refund = '";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This operation will refund funds to customer. Please confirm to proceed.")), "html", null, true);
            echo "';

    function amz_submit_form(formObj, formMode) {
      if (!formObj)
        return false;

      if (formObj.tagName != \"FORM\") {
        if (!formObj.form)
          return false;
        formObj = formObj.form;
      }

      if (formObj.action) 
        formObj.action.value = formMode;

      return formObj.submit();
    }
    //]]>
  </script>

  ";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Amazon Order Ref ID")), "html", null, true);
            echo ": <b>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderDetail", array(0 => "AmazonOrderReferenceId"), "method"), "html", null, true);
            echo "</b>

  <table>
  <tr>

  ";
            // line 39
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCaptureButtonVisible", array(), "method")) {
                // line 40
                echo "  <td>
    ";
                // line 41
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getDetail", array(0 => "amazon_pa_capture_status"), "method")) {
                    // line 42
                    echo "      ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Capture status")), "html", null, true);
                    echo ": <b>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderDetail", array(0 => "amazon_pa_capture_status"), "method"), "html", null, true);
                    echo "</b>
    ";
                } else {
                    // line 44
                    echo "      <input type=\"button\" value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Capture")), "html", null, true);
                    echo "\" onclick=\"javascript: if(confirm(lbl_amazon_pa_confirm_capture)) amz_submit_form(this, 'amz_capture');\" />&nbsp;
    ";
                }
                // line 46
                echo "  </td>

  <td>
    <input type=\"button\" value=\"";
                // line 49
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Void")), "html", null, true);
                echo "\" onclick=\"javascript: if(confirm(lbl_amazon_pa_confirm_void)) amz_submit_form(this, 'amz_void');\" />
  </td>
  ";
            }
            // line 52
            echo "
  ";
            // line 53
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRefundButtonVisible", array(), "method")) {
                // line 54
                echo "  <td>
    ";
                // line 55
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getDetail", array(0 => "amazon_pa_refund_status"), "method")) {
                    // line 56
                    echo "      ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Refund status")), "html", null, true);
                    echo ": <b>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderDetail", array(0 => "amazon_pa_refund_status"), "method"), "html", null, true);
                    echo "</b>
      <br />
      <input type=\"button\" value=\"";
                    // line 58
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Refresh status")), "html", null, true);
                    echo "\" onclick=\"javascript: amz_submit_form(this, 'amz_refresh_refund_status');\" />
    ";
                } else {
                    // line 60
                    echo "      <input type=\"button\" value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Refund")), "html", null, true);
                    echo "\" onclick=\"javascript: if(confirm(lbl_amazon_pa_confirm_refund)) amz_submit_form(this, 'amz_refund');\" />
    ";
                }
                // line 62
                echo "  </td>
  ";
            }
            // line 64
            echo "
  ";
            // line 65
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRefreshButtonVisible", array(), "method")) {
                // line 66
                echo "  <td>
    <input type=\"button\" value=\"";
                // line 67
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Refresh status")), "html", null, true);
                echo "\" onclick=\"javascript: amz_submit_form(this, 'amz_refresh');\" />
  </td>
  ";
            }
            // line 70
            echo "
  </tr>

  </table>
  <br >
  <br />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/Amazon/PayWithAmazon/order_controls.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 70,  145 => 67,  142 => 66,  140 => 65,  137 => 64,  133 => 62,  127 => 60,  122 => 58,  114 => 56,  112 => 55,  109 => 54,  107 => 53,  104 => 52,  98 => 49,  93 => 46,  87 => 44,  79 => 42,  77 => 41,  74 => 40,  72 => 39,  62 => 34,  39 => 14,  35 => 13,  31 => 12,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="105")*/
/*  #}*/
/* {% if this.isAmazonControlsVisible() %}*/
/* */
/*   <h2>{{ t('PayWithAmazon available actions') }}</h2>*/
/* */
/*   <script type="text/javascript">*/
/*     //<![CDATA[*/
/*     var lbl_amazon_pa_confirm_capture = '{{ t('This operation will capture funds from customer. Please confirm to proceed.') }}';*/
/*     var lbl_amazon_pa_confirm_void = '{{ t('This operation will cancel order. Payment authorization will be voided. Please confirm to proceed.') }}';*/
/*     var lbl_amazon_pa_confirm_refund = '{{ t('This operation will refund funds to customer. Please confirm to proceed.') }}';*/
/* */
/*     function amz_submit_form(formObj, formMode) {*/
/*       if (!formObj)*/
/*         return false;*/
/* */
/*       if (formObj.tagName != "FORM") {*/
/*         if (!formObj.form)*/
/*           return false;*/
/*         formObj = formObj.form;*/
/*       }*/
/* */
/*       if (formObj.action) */
/*         formObj.action.value = formMode;*/
/* */
/*       return formObj.submit();*/
/*     }*/
/*     //]]>*/
/*   </script>*/
/* */
/*   {{ t('Amazon Order Ref ID') }}: <b>{{ this.getOrderDetail('AmazonOrderReferenceId') }}</b>*/
/* */
/*   <table>*/
/*   <tr>*/
/* */
/*   {% if this.isCaptureButtonVisible() %}*/
/*   <td>*/
/*     {% if this.order.getDetail('amazon_pa_capture_status') %}*/
/*       {{ t('Capture status') }}: <b>{{ this.getOrderDetail('amazon_pa_capture_status') }}</b>*/
/*     {% else %}*/
/*       <input type="button" value="{{ t('Capture') }}" onclick="javascript: if(confirm(lbl_amazon_pa_confirm_capture)) amz_submit_form(this, 'amz_capture');" />&nbsp;*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     <input type="button" value="{{ t('Void') }}" onclick="javascript: if(confirm(lbl_amazon_pa_confirm_void)) amz_submit_form(this, 'amz_void');" />*/
/*   </td>*/
/*   {% endif %}*/
/* */
/*   {% if this.isRefundButtonVisible() %}*/
/*   <td>*/
/*     {% if this.order.getDetail('amazon_pa_refund_status') %}*/
/*       {{ t('Refund status') }}: <b>{{ this.getOrderDetail('amazon_pa_refund_status') }}</b>*/
/*       <br />*/
/*       <input type="button" value="{{ t('Refresh status') }}" onclick="javascript: amz_submit_form(this, 'amz_refresh_refund_status');" />*/
/*     {% else %}*/
/*       <input type="button" value="{{ t('Refund') }}" onclick="javascript: if(confirm(lbl_amazon_pa_confirm_refund)) amz_submit_form(this, 'amz_refund');" />*/
/*     {% endif %}*/
/*   </td>*/
/*   {% endif %}*/
/* */
/*   {% if this.isRefreshButtonVisible() %}*/
/*   <td>*/
/*     <input type="button" value="{{ t('Refresh status') }}" onclick="javascript: amz_submit_form(this, 'amz_refresh');" />*/
/*   </td>*/
/*   {% endif %}*/
/* */
/*   </tr>*/
/* */
/*   </table>*/
/*   <br >*/
/*   <br />*/
/* {% endif %}*/
/* */
