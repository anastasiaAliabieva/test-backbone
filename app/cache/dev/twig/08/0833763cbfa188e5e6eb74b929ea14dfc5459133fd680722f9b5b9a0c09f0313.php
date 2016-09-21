<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_cf4508cecfdaa1a9df852a0fc62bc2607fc99cbf8ff2dc67539954609e9f45a6 extends Twig_Template
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
        $__internal_d945b0292b7b234dd8e1e1f966bcb2bad347e864428ab3d52f1f590a1a457e7f = $this->env->getExtension("native_profiler");
        $__internal_d945b0292b7b234dd8e1e1f966bcb2bad347e864428ab3d52f1f590a1a457e7f->enter($__internal_d945b0292b7b234dd8e1e1f966bcb2bad347e864428ab3d52f1f590a1a457e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d945b0292b7b234dd8e1e1f966bcb2bad347e864428ab3d52f1f590a1a457e7f->leave($__internal_d945b0292b7b234dd8e1e1f966bcb2bad347e864428ab3d52f1f590a1a457e7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
