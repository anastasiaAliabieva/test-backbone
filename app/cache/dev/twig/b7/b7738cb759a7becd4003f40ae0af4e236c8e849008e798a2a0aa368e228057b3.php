<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7f8a6b3cfcc0df3f28b4d9f451a97061ef46f6808fb9b1e9642f94071346f388 extends Twig_Template
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
        $__internal_2038d70aedee3f89a854b7b926ccb89d6831e6f144b53ae30609af12d4c34d60 = $this->env->getExtension("native_profiler");
        $__internal_2038d70aedee3f89a854b7b926ccb89d6831e6f144b53ae30609af12d4c34d60->enter($__internal_2038d70aedee3f89a854b7b926ccb89d6831e6f144b53ae30609af12d4c34d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2038d70aedee3f89a854b7b926ccb89d6831e6f144b53ae30609af12d4c34d60->leave($__internal_2038d70aedee3f89a854b7b926ccb89d6831e6f144b53ae30609af12d4c34d60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
