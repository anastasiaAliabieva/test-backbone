<?php

/* MopaBootstrapBundle:Form:formflow_buttons.html.twig */
class __TwigTemplate_b4372669625be02b7cbf15bc3c366908135d78515c6c4eae58d0b22f0186a9ef extends Twig_Template
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
        // line 1
        $context["renderBackButton"] = twig_in_filter($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStep", array(), "method"), range(($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFirstStep", array(), "method") + 1), $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getLastStep", array(), "method")));
        // line 2
        echo "<div class=\"form-actions form-flow-actions\">
    ";
        // line 8
        echo "    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 9
        if (($this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getCurrentStep", array(), "method") < $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getMaxSteps", array(), "method"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"back\" class=\"btn btn-primary";
        if ( !(isset($context["renderBackButton"]) ? $context["renderBackButton"] : null)) {
            echo " disabled";
        }
        echo "\" formnovalidate=\"formnovalidate\"";
        if ( !(isset($context["renderBackButton"]) ? $context["renderBackButton"] : null)) {
            echo " disabled=\"disabled\"";
        }
        echo ">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 18
        echo "</button>

    <button type=\"submit\" name=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : null), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" class=\"btn btn-primary\" formnovalidate=\"formnovalidate\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 22
        echo "</button>
</div>
";
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
        return array (  60 => 22,  58 => 21,  55 => 20,  51 => 18,  49 => 17,  38 => 16,  34 => 14,  31 => 12,  28 => 10,  26 => 9,  24 => 8,  21 => 2,  19 => 1,);
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
