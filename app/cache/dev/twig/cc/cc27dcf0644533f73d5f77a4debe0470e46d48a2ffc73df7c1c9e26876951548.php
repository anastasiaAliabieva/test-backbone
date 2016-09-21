<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7617cda5cd00d0e85dd6460854e257913f4ee84c031af8d16f3210be6e73ba06 extends Twig_Template
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
        $__internal_b85a512920e79b18ff458615aca3991ddb9a7ed6f0ee797447afed131a8067f6 = $this->env->getExtension("native_profiler");
        $__internal_b85a512920e79b18ff458615aca3991ddb9a7ed6f0ee797447afed131a8067f6->enter($__internal_b85a512920e79b18ff458615aca3991ddb9a7ed6f0ee797447afed131a8067f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b85a512920e79b18ff458615aca3991ddb9a7ed6f0ee797447afed131a8067f6->leave($__internal_b85a512920e79b18ff458615aca3991ddb9a7ed6f0ee797447afed131a8067f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
