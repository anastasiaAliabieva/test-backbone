<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_98c618cd4c2ef1cb2c5021f896bdb8e0606f2d74f3b4956c90c1e1de3a8526de extends Twig_Template
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
        $__internal_3d09ed04794656b33bd1d6d7c2a3148138227c8982a6aa95814d5a948bfe9836 = $this->env->getExtension("native_profiler");
        $__internal_3d09ed04794656b33bd1d6d7c2a3148138227c8982a6aa95814d5a948bfe9836->enter($__internal_3d09ed04794656b33bd1d6d7c2a3148138227c8982a6aa95814d5a948bfe9836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3d09ed04794656b33bd1d6d7c2a3148138227c8982a6aa95814d5a948bfe9836->leave($__internal_3d09ed04794656b33bd1d6d7c2a3148138227c8982a6aa95814d5a948bfe9836_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
