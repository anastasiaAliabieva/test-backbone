<?php

/* MopaBootstrapBundle::layout.html.twig */
class __TwigTemplate_fc980d3d62336400ee1f902500fc3f3845c10cc06c16728f5bfcc6e7680621bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base.html.twig", "MopaBootstrapBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb0daa749a6d8260cd2e2e3b31d7be0d661f9ae0c21904736f219ef7ff39d28 = $this->env->getExtension("native_profiler");
        $__internal_bbb0daa749a6d8260cd2e2e3b31d7be0d661f9ae0c21904736f219ef7ff39d28->enter($__internal_bbb0daa749a6d8260cd2e2e3b31d7be0d661f9ae0c21904736f219ef7ff39d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb0daa749a6d8260cd2e2e3b31d7be0d661f9ae0c21904736f219ef7ff39d28->leave($__internal_bbb0daa749a6d8260cd2e2e3b31d7be0d661f9ae0c21904736f219ef7ff39d28_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base.html.twig' %}*/
/* */
