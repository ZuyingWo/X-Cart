<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/reviewer.twig */
class __TwigTemplate_9b31ace16672225b589817d0ff4549875bacf4d398ad9487bc2f5d990a09185e extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"input clearfix\">
  <div class=\"table-label\">
    <label for=\"profile\" class=\"email\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Profile")), "html", null, true);
        echo "</label>
  </div>

  <div class=\"star\"></div>

  <div class=\"wrapper-table-value\">
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getProfile", array(), "method")) {
            // line 15
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector", "fieldOnly" => "true", "fieldName" => "profile", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Start typing customer email or name")), "is_model_required" => "false", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "profile", array()), "getProfileId", array(), "method")))), "html", null, true);
            echo "
    ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 16
(isset($context["this"]) ? $context["this"] : null), "entity", array()), "getReviewerName", array(), "method")) {
            // line 17
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector", "fieldOnly" => "true", "fieldName" => "profile", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Start typing customer email or name")), "is_model_required" => "false", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getReviewerName", array(), "method")))), "html", null, true);
            echo "

    ";
        } else {
            // line 20
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector", "fieldOnly" => "true", "fieldName" => "profile", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Start typing customer email or name")), "is_model_required" => "false", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "value" => ""))), "html", null, true);
            echo "
    ";
        }
        // line 22
        echo "  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/parts/reviewer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  48 => 20,  41 => 17,  39 => 16,  34 => 15,  32 => 14,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Reviewer (email and name)*/
/*  #*/
/*  # @ListChild (list="review.modify.fields", weight="300")*/
/*  #}*/
/* <li class="input clearfix">*/
/*   <div class="table-label">*/
/*     <label for="profile" class="email">{{ t('Profile') }}</label>*/
/*   </div>*/
/* */
/*   <div class="star"></div>*/
/* */
/*   <div class="wrapper-table-value">*/
/*     {% if this.entity.getProfile() %}*/
/*     {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector', fieldOnly='true', fieldName='profile', placeholder=t('Start typing customer email or name'), is_model_required='false', review=this.entity, value=this.entity.profile.getProfileId()) }}*/
/*     {% elseif this.entity.getReviewerName() %}*/
/*     {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector', fieldOnly='true', fieldName='profile', placeholder=t('Start typing customer email or name'), is_model_required='false', review=this.entity, value=this.entity.getReviewerName()) }}*/
/* */
/*     {% else %}*/
/*     {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Select\\ProfileSelector', fieldOnly='true', fieldName='profile', placeholder=t('Start typing customer email or name'), is_model_required='false', review=this.entity, value='') }}*/
/*     {% endif %}*/
/*   </div>*/
/* </li>*/
/* */
