<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/list.twig */
class __TwigTemplate_23c27487ff56a8cd6251d605505de70262cc16b35f64da8877d75755fb528976 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Module\\Manage");        // line 8
        echo "  <table cellspacing=\"0\" cellpadding=\"0\" class=\"data-table items-list modules-list\">
    <tbody class=\"lines\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["module"]) {
            // line 11
            echo "      <tr class=\"line module-item module-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["module"], "getModuleId", array(), "method"), "html", null, true);
            echo " module-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["module"], "getName", array(), "method"), "html", null, true);
            if ( !$this->getAttribute($context["module"], "getEnabled", array(), "method")) {
                echo " disabled";
            }
            echo "\">
      ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "columns", "type" => "inherited", "module" => $context["module"]))), "html", null, true);
            echo "
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
  </table>
  <div class=\"pager-bottom ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "getCSSClasses", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method"), "html", null, true);
        echo "</div>
  ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\StickyPanel\\ItemsList\\ManageModules"))), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  54 => 17,  50 => 15,  41 => 12,  31 => 11,  27 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.sections", weight="400")*/
/*  #}*/
/* */
/* {% form '\\XLite\\View\\Form\\Module\\Manage' %}*/
/*   <table cellspacing="0" cellpadding="0" class="data-table items-list modules-list">*/
/*     <tbody class="lines">*/
/*       {% for idx, module in this.getPageData() %}*/
/*       <tr class="line module-item module-{{ module.getModuleId() }} module-{{ module.getName() }}{% if not module.getEnabled() %} disabled{% endif %}">*/
/*       {{ widget_list('columns', type='inherited', module=module) }}*/
/*       </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   <div class="pager-bottom {{ this.pager.getCSSClasses() }}">{{ this.pager.display() }}</div>*/
/*   {{ widget('XLite\\View\\StickyPanel\\ItemsList\\ManageModules') }}*/
/* {% endform %}*/
/* */
