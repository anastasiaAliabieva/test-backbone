<?php

/* MopaBootstrapBundle:Form:formflow_buttons.html.twig */
class __TwigTemplate_f48fe975688cfca238b36a94a6d4d95b5f62d6fe26083b9987cdebcf3be84581 extends Twig_Template
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
        $__internal_e9775258e3991198441248f4ff617e3e8632985362c4871f0c0073ba68dbbb9e = $this->env->getExtension("native_profiler");
        $__internal_e9775258e3991198441248f4ff617e3e8632985362c4871f0c0073ba68dbbb9e->enter($__internal_e9775258e3991198441248f4ff617e3e8632985362c4871f0c0073ba68dbbb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Form:formflow_buttons.html.twig"));

        // line 1
        $context["renderBackButton"] = twig_in_filter($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStep", array(), "method"), range(($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFirstStep", array(), "method") + 1), $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getLastStep", array(), "method")));
        // line 2
        echo "<div class=\"form-actions form-flow-actions\">
    ";
        // line 8
        echo "    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 9
        if (($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStep", array(), "method") < $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getMaxSteps", array(), "method"))) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.next", array(), "CraueFormFlowBundle"), "html", null, true);
        } else {
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.finish", array(), "CraueFormFlowBundle"), "html", null, true);
        }
        // line 14
        echo "</button>

    <button type=\"submit\" name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"back\" class=\"btn btn-primary";
        if ( !(isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton"))) {
            echo " disabled";
        }
        echo "\" formnovalidate=\"formnovalidate\"";
        if ( !(isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton"))) {
            echo " disabled=\"disabled\"";
        }
        echo ">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 18
        echo "</button>

    <button type=\"submit\" name=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" class=\"btn btn-primary\" formnovalidate=\"formnovalidate\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 22
        echo "</button>
</div>
";
        
        $__internal_e9775258e3991198441248f4ff617e3e8632985362c4871f0c0073ba68dbbb9e->leave($__internal_e9775258e3991198441248f4ff617e3e8632985362c4871f0c0073ba68dbbb9e_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:formflow_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  61 => 21,  58 => 20,  54 => 18,  52 => 17,  41 => 16,  37 => 14,  34 => 12,  31 => 10,  29 => 9,  27 => 8,  24 => 2,  22 => 1,);
    }
}
/* {% set renderBackButton = flow.getCurrentStep() in (flow.getFirstStep() + 1) .. flow.getLastStep() %}*/
/* <div class="form-actions form-flow-actions">*/
/*     {#*/
/*         Default button (the one trigged by pressing the enter/return key) must be defined first.*/
/*         Thus, all buttons are defined in reverse order and will be reversed again via CSS.*/
/*         See http://stackoverflow.com/questions/1963245/multiple-submit-buttons-specifying-default-button*/
/*     #}*/
/*     <button type="submit" class="btn btn-primary">*/
/*         {%- if flow.getCurrentStep() < flow.getMaxSteps() -%}*/
/*             {{- 'button.next' | trans({}, 'CraueFormFlowBundle') -}}*/
/*         {%- else -%}*/
/*             {{- 'button.finish' | trans({}, 'CraueFormFlowBundle') -}}*/
/*         {%- endif -%}*/
/*     </button>*/
/* */
/*     <button type="submit" name="{{ flow.getFormTransitionKey() }}" value="back" class="btn btn-primary{% if not renderBackButton %} disabled{% endif %}" formnovalidate="formnovalidate"{% if not renderBackButton %} disabled="disabled"{% endif %}>*/
/*         {{- 'button.back' | trans({}, 'CraueFormFlowBundle') -}}*/
/*     </button>*/
/* */
/*     <button type="submit" name="{{ flow.getFormTransitionKey() }}" value="reset" class="btn btn-primary" formnovalidate="formnovalidate">*/
/*         {{- 'button.reset' | trans({}, 'CraueFormFlowBundle') -}}*/
/*     </button>*/
/* </div>*/
/* */
