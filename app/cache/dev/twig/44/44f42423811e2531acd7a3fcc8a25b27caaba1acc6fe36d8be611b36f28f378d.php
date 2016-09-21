<?php

/* MopaBootstrapBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_24990801b7bae6ffe7447009b6298190e022e1dec2acaccb144223260d4b7c08 extends Twig_Template
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
        $__internal_b52af7f1d047fb87deb47880d5ed3cc2b4031a740aeff2627f854e1cee69336b = $this->env->getExtension("native_profiler");
        $__internal_b52af7f1d047fb87deb47880d5ed3cc2b4031a740aeff2627f854e1cee69336b->enter($__internal_b52af7f1d047fb87deb47880d5ed3cc2b4031a740aeff2627f854e1cee69336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Pagination:sortable_link.html.twig"));

        // line 1
        $context["link"] = "";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            // line 3
            echo "    ";
            $context["link"] = ((((((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")) . " ") . $context["attr"]) . "=\"") . $context["value"]) . "\"");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "
<a ";
        // line 6
        echo (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"));
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_b52af7f1d047fb87deb47880d5ed3cc2b4031a740aeff2627f854e1cee69336b->leave($__internal_b52af7f1d047fb87deb47880d5ed3cc2b4031a740aeff2627f854e1cee69336b_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% set link = "" %}*/
/* {% for attr, value in options %}*/
/*     {% set link = link ~ " " ~ attr ~ '="' ~ value~ '"' %}*/
/* {% endfor %}*/
/* */
/* <a {{ link|raw }}>{{ title }}</a>*/
/* */
