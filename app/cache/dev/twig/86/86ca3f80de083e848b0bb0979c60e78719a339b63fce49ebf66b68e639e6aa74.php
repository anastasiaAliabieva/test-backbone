<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_28ddcf7e88c3b9a0766a8f319c3e31c3ef5cadc1bb9c0ccdccc4661e5a491e5e extends Twig_Template
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
        $__internal_6a36275944b23de5eec5570ce0628563b478aef28f4e5d2ea3aab16a532b8625 = $this->env->getExtension("native_profiler");
        $__internal_6a36275944b23de5eec5570ce0628563b478aef28f4e5d2ea3aab16a532b8625->enter($__internal_6a36275944b23de5eec5570ce0628563b478aef28f4e5d2ea3aab16a532b8625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6a36275944b23de5eec5570ce0628563b478aef28f4e5d2ea3aab16a532b8625->leave($__internal_6a36275944b23de5eec5570ce0628563b478aef28f4e5d2ea3aab16a532b8625_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
