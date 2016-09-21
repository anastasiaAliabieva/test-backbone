<?php

/* MopaBootstrapBundle:Pagination:sliding_item.html.twig */
class __TwigTemplate_2d219dbe6376d5366d62bbf1bc951283d63ef368729a73f0f108d45bb273caf5 extends Twig_Template
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
        $__internal_4fc65b2a7ea9bf4bb00acad2e2b6c4f03a6627e7b594372d583591d754a41031 = $this->env->getExtension("native_profiler");
        $__internal_4fc65b2a7ea9bf4bb00acad2e2b6c4f03a6627e7b594372d583591d754a41031->enter($__internal_4fc65b2a7ea9bf4bb00acad2e2b6c4f03a6627e7b594372d583591d754a41031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Pagination:sliding_item.html.twig"));

        // line 1
        echo "<li class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) : ("")), "html", null, true);
        echo " ";
        echo ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) ? ("active") : (""));
        echo " ";
        echo (((array_key_exists("clickable", $context) &&  !(isset($context["clickable"]) ? $context["clickable"] : $this->getContext($context, "clickable")))) ? ("disabled") : (""));
        echo "\">
    ";
        // line 2
        if ((((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) && ( !array_key_exists("clickable", $context) || (isset($context["clickable"]) ? $context["clickable"] : $this->getContext($context, "clickable"))))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))) : ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))) : ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "</li>
";
        
        $__internal_4fc65b2a7ea9bf4bb00acad2e2b6c4f03a6627e7b594372d583591d754a41031->leave($__internal_4fc65b2a7ea9bf4bb00acad2e2b6c4f03a6627e7b594372d583591d754a41031_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  41 => 5,  33 => 3,  31 => 2,  22 => 1,);
    }
}
/* <li class="{{ name is defined ? name : '' }} {{ page == current ? 'active' : '' }} {{ clickable is defined and not clickable ? 'disabled' : '' }}">*/
/*     {% if page != current and (clickable is not defined or clickable) %}*/
/*         <a href="{{ path(route, query | merge({(pageParameterName): page})) }}">{{ text is defined ? text : page }}</a>*/
/*     {% else %}*/
/*         <span>{{ text is defined ? text : page }}</span>*/
/*     {% endif %}*/
/* </li>*/
/* */
