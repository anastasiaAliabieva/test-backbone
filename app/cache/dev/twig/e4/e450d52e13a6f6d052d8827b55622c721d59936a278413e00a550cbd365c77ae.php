<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d7527e08c2ef5bc9b2d5ef3f69b5b92d4e7bd210d120f4ccebb97a62c01d0fb2 extends Twig_Template
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
        $__internal_230c648bf3cc717bf61303ca2ddb58d91045bd00dcb9cdd431ebdb9d7c3b119a = $this->env->getExtension("native_profiler");
        $__internal_230c648bf3cc717bf61303ca2ddb58d91045bd00dcb9cdd431ebdb9d7c3b119a->enter($__internal_230c648bf3cc717bf61303ca2ddb58d91045bd00dcb9cdd431ebdb9d7c3b119a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_230c648bf3cc717bf61303ca2ddb58d91045bd00dcb9cdd431ebdb9d7c3b119a->leave($__internal_230c648bf3cc717bf61303ca2ddb58d91045bd00dcb9cdd431ebdb9d7c3b119a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
