<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig */
class __TwigTemplate_ff6a246fa384e417b6578dbd7460b32f8f53518ba79564ff563ee528ef41a11f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAmazonConfigured", array(), "method")) {
            // line 7
            echo "  ";
            $context["amazonConfig"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAmazonConfig", array(), "method");
            // line 8
            echo "  <script type=\"text/javascript\">
    var amazonConfig = {
      sid: '";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "amazon_pa_sid", array()), "html", null, true);
            echo "',
      mode: '";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "amazon_pa_mode", array()), "html", null, true);
            echo "',
      mobile: '";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMobileDevice", array()), "html", null, true);
            echo "',
      clientId: '";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "amazon_pa_client_id", array()), "html", null, true);
            echo "'
    };

    window.onAmazonLoginReady = function() {
      amazon.Login.setSandboxMode(";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSandboxMode", array(), "method"), "html", null, true);
            echo ");
      amazon.Login.setClientId(amazonConfig.clientId);
      amazon.Login.setRegion('";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["amazonConfig"]) ? $context["amazonConfig"] : null), "amazon_pa_region", array()), "html", null, true);
            echo "');
      amazon.Login.setUseCookie(true);

      ";
            // line 22
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method")) {
                // line 23
                echo "      if (xliteConfig.target !== 'amazon_checkout') {
        amazon.Login.logout();
      }
      ";
            }
            // line 27
            echo "
//      var uriHash = hash.get();
//      if (uriHash.action === 'loginWithAmazon') {
//        amazon.Login.authorize(
//          {
//            scope: 'profile payments:widget payments:shipping_address',
//            popup: 'true'
//          },
//          uriHash.returnUrl
//        );
//        window.location.hash = '';
//      }
    };

  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/header/parts/amazon_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 27,  60 => 23,  58 => 22,  52 => 19,  47 => 17,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1310")*/
/*  #}*/
/* {% if this.isAmazonConfigured() %}*/
/*   {% set amazonConfig = this.getAmazonConfig() %}*/
/*   <script type="text/javascript">*/
/*     var amazonConfig = {*/
/*       sid: '{{ amazonConfig.amazon_pa_sid }}',*/
/*       mode: '{{ amazonConfig.amazon_pa_mode }}',*/
/*       mobile: '{{ this.isMobileDevice }}',*/
/*       clientId: '{{ amazonConfig.amazon_pa_client_id }}'*/
/*     };*/
/* */
/*     window.onAmazonLoginReady = function() {*/
/*       amazon.Login.setSandboxMode({{ this.isSandboxMode() }});*/
/*       amazon.Login.setClientId(amazonConfig.clientId);*/
/*       amazon.Login.setRegion('{{ amazonConfig.amazon_pa_region }}');*/
/*       amazon.Login.setUseCookie(true);*/
/* */
/*       {% if not this.isLogged() %}*/
/*       if (xliteConfig.target !== 'amazon_checkout') {*/
/*         amazon.Login.logout();*/
/*       }*/
/*       {% endif %}*/
/* */
/* //      var uriHash = hash.get();*/
/* //      if (uriHash.action === 'loginWithAmazon') {*/
/* //        amazon.Login.authorize(*/
/* //          {*/
/* //            scope: 'profile payments:widget payments:shipping_address',*/
/* //            popup: 'true'*/
/* //          },*/
/* //          uriHash.returnUrl*/
/* //        );*/
/* //        window.location.hash = '';*/
/* //      }*/
/*     };*/
/* */
/*   </script>*/
/* {% endif %}*/
/* */
