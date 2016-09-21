<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e3d3e1118768ead16434a3e149fb9e30c73c3123ce5592590fb7ef920001dc08 extends Twig_Template
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
        $__internal_daebba7d0b3be14d546760b574b4eea5cbe785ede4179cbaa5e7b28a2f5a2e27 = $this->env->getExtension("native_profiler");
        $__internal_daebba7d0b3be14d546760b574b4eea5cbe785ede4179cbaa5e7b28a2f5a2e27->enter($__internal_daebba7d0b3be14d546760b574b4eea5cbe785ede4179cbaa5e7b28a2f5a2e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_daebba7d0b3be14d546760b574b4eea5cbe785ede4179cbaa5e7b28a2f5a2e27->leave($__internal_daebba7d0b3be14d546760b574b4eea5cbe785ede4179cbaa5e7b28a2f5a2e27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
