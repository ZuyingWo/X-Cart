<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/tags_list.twig */
class __TwigTemplate_714999fd3e52c286b49217e3ee8d5e3ca41a906d337b3c061424d9a2c4c6eb3d extends \XLite\Core\Templating\Twig\Template
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
<div class=\"tags-list-box\">
  <span class=\"icon icon-tags\"></span>
  <label for=\"edit-field-tags-tid\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tags")), "html", null, true);
        echo "</label>

  <div class=\"tag-list\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagsData", array(), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["url"]) {
            // line 13
            echo "      <div class=\"tag-item\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagName", array(0 => $context["name"]), "method"), "html", null, true);
            echo "</a></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/tags_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  34 => 13,  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.landing.controls", weight="200")*/
/*  #}*/
/* */
/* <div class="tags-list-box">*/
/*   <span class="icon icon-tags"></span>*/
/*   <label for="edit-field-tags-tid">{{ t('Tags') }}</label>*/
/* */
/*   <div class="tag-list">*/
/*     {% for name, url in this.getTagsData() %}*/
/*       <div class="tag-item"><a href="{{ url }}">{{ this.getTagName(name) }}</a></div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
