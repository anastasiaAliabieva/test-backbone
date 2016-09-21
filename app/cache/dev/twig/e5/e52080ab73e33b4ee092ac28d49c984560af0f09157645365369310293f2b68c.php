<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0ea10982ae799cd1e7f20e69e74858fbb6ff418dbfb31b3bc6dc16804c743e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe613856fb94ce6b1d2d5896b0873b443543e080fbe820c879fc5081ee1ccad = $this->env->getExtension("native_profiler");
        $__internal_dfe613856fb94ce6b1d2d5896b0873b443543e080fbe820c879fc5081ee1ccad->enter($__internal_dfe613856fb94ce6b1d2d5896b0873b443543e080fbe820c879fc5081ee1ccad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfe613856fb94ce6b1d2d5896b0873b443543e080fbe820c879fc5081ee1ccad->leave($__internal_dfe613856fb94ce6b1d2d5896b0873b443543e080fbe820c879fc5081ee1ccad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9566a2867ad14011ce16ac4c68aeda9615874395ca885ca4f455f470cd9929a4 = $this->env->getExtension("native_profiler");
        $__internal_9566a2867ad14011ce16ac4c68aeda9615874395ca885ca4f455f470cd9929a4->enter($__internal_9566a2867ad14011ce16ac4c68aeda9615874395ca885ca4f455f470cd9929a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9566a2867ad14011ce16ac4c68aeda9615874395ca885ca4f455f470cd9929a4->leave($__internal_9566a2867ad14011ce16ac4c68aeda9615874395ca885ca4f455f470cd9929a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_702cd3eabb75b2471055008e42c2ff09973fc923f0afaeb18f560432ab049934 = $this->env->getExtension("native_profiler");
        $__internal_702cd3eabb75b2471055008e42c2ff09973fc923f0afaeb18f560432ab049934->enter($__internal_702cd3eabb75b2471055008e42c2ff09973fc923f0afaeb18f560432ab049934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_702cd3eabb75b2471055008e42c2ff09973fc923f0afaeb18f560432ab049934->leave($__internal_702cd3eabb75b2471055008e42c2ff09973fc923f0afaeb18f560432ab049934_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d7b7246c9f345fe264125d7976f685a084a5746715ee7a3f65a92308a3b664a = $this->env->getExtension("native_profiler");
        $__internal_2d7b7246c9f345fe264125d7976f685a084a5746715ee7a3f65a92308a3b664a->enter($__internal_2d7b7246c9f345fe264125d7976f685a084a5746715ee7a3f65a92308a3b664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d7b7246c9f345fe264125d7976f685a084a5746715ee7a3f65a92308a3b664a->leave($__internal_2d7b7246c9f345fe264125d7976f685a084a5746715ee7a3f65a92308a3b664a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
