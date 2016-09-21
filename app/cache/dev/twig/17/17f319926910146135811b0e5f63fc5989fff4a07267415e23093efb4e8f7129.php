<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bd743d67f9936797eef008f976dfe18183daf48c4ab0156158b1196375de289d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccef7f587eaf6237ed0bcd1a2be19ec2d882c7e02509cb17d902c18051b4c131 = $this->env->getExtension("native_profiler");
        $__internal_ccef7f587eaf6237ed0bcd1a2be19ec2d882c7e02509cb17d902c18051b4c131->enter($__internal_ccef7f587eaf6237ed0bcd1a2be19ec2d882c7e02509cb17d902c18051b4c131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccef7f587eaf6237ed0bcd1a2be19ec2d882c7e02509cb17d902c18051b4c131->leave($__internal_ccef7f587eaf6237ed0bcd1a2be19ec2d882c7e02509cb17d902c18051b4c131_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2897bb29c02eb2775f3f066346839337d04b5da2dcad5dc0ad6c7aeb02a0450c = $this->env->getExtension("native_profiler");
        $__internal_2897bb29c02eb2775f3f066346839337d04b5da2dcad5dc0ad6c7aeb02a0450c->enter($__internal_2897bb29c02eb2775f3f066346839337d04b5da2dcad5dc0ad6c7aeb02a0450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2897bb29c02eb2775f3f066346839337d04b5da2dcad5dc0ad6c7aeb02a0450c->leave($__internal_2897bb29c02eb2775f3f066346839337d04b5da2dcad5dc0ad6c7aeb02a0450c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c53817b659cf8fd6326742fbff03becadb5710e16a65200cf5fc4d1def8b982 = $this->env->getExtension("native_profiler");
        $__internal_4c53817b659cf8fd6326742fbff03becadb5710e16a65200cf5fc4d1def8b982->enter($__internal_4c53817b659cf8fd6326742fbff03becadb5710e16a65200cf5fc4d1def8b982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4c53817b659cf8fd6326742fbff03becadb5710e16a65200cf5fc4d1def8b982->leave($__internal_4c53817b659cf8fd6326742fbff03becadb5710e16a65200cf5fc4d1def8b982_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
