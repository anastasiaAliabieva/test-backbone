<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dbd842646c2660267621d130e1b5cba7b129a6e1065665ea9721d5fe91ede15b extends Twig_Template
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
        $__internal_1b7cd501694366307d2b2e886bd67784eee1f78e572f161d3cfd4f49984a70e2 = $this->env->getExtension("native_profiler");
        $__internal_1b7cd501694366307d2b2e886bd67784eee1f78e572f161d3cfd4f49984a70e2->enter($__internal_1b7cd501694366307d2b2e886bd67784eee1f78e572f161d3cfd4f49984a70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1b7cd501694366307d2b2e886bd67784eee1f78e572f161d3cfd4f49984a70e2->leave($__internal_1b7cd501694366307d2b2e886bd67784eee1f78e572f161d3cfd4f49984a70e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
