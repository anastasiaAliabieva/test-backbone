<?php

/* default/index.html.twig */
class __TwigTemplate_a11f2e33d9eebab4d3444cad9ccff92beec5ea08b7e31f8c031ed8d3c2434469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e01a9f7487ae9f8d668a5b5d1d1ab40aabaa18d140ebe2dc85502d51e9f17b10 = $this->env->getExtension("native_profiler");
        $__internal_e01a9f7487ae9f8d668a5b5d1d1ab40aabaa18d140ebe2dc85502d51e9f17b10->enter($__internal_e01a9f7487ae9f8d668a5b5d1d1ab40aabaa18d140ebe2dc85502d51e9f17b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e01a9f7487ae9f8d668a5b5d1d1ab40aabaa18d140ebe2dc85502d51e9f17b10->leave($__internal_e01a9f7487ae9f8d668a5b5d1d1ab40aabaa18d140ebe2dc85502d51e9f17b10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_118cb29a4e87efd8be326069bde9e1b902c560b175cde77102b119cc848ccd6f = $this->env->getExtension("native_profiler");
        $__internal_118cb29a4e87efd8be326069bde9e1b902c560b175cde77102b119cc848ccd6f->enter($__internal_118cb29a4e87efd8be326069bde9e1b902c560b175cde77102b119cc848ccd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>Url for ajax form submit: ";
        echo $this->env->getExtension('routing')->getPath("process.form");
        echo "</p>
    <div class=\"row\">
\t\t\t <div class=\"col-md-10\" style=\"background:red\">
\t\t\t\tdffffffffffffffffffffff
    \t\t</div>
    </div>


";
        
        $__internal_118cb29a4e87efd8be326069bde9e1b902c560b175cde77102b119cc848ccd6f->leave($__internal_118cb29a4e87efd8be326069bde9e1b902c560b175cde77102b119cc848ccd6f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <p>Url for ajax form submit: {{ path('process.form') }}</p>*/
/*     <div class="row">*/
/* 			 <div class="col-md-10" style="background:red">*/
/* 				dffffffffffffffffffffff*/
/*     		</div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
