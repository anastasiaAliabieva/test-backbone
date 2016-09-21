<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3577d0d9fbc7ececce9a1477a827f7c29d9dd0c1df49bceced46687d1976ae33 extends Twig_Template
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
        $__internal_408f77609a9c7bf8e5c8cb9b886e63a3fc90ddc7bf38522cc642ca8c710c34fe = $this->env->getExtension("native_profiler");
        $__internal_408f77609a9c7bf8e5c8cb9b886e63a3fc90ddc7bf38522cc642ca8c710c34fe->enter($__internal_408f77609a9c7bf8e5c8cb9b886e63a3fc90ddc7bf38522cc642ca8c710c34fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_408f77609a9c7bf8e5c8cb9b886e63a3fc90ddc7bf38522cc642ca8c710c34fe->leave($__internal_408f77609a9c7bf8e5c8cb9b886e63a3fc90ddc7bf38522cc642ca8c710c34fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
