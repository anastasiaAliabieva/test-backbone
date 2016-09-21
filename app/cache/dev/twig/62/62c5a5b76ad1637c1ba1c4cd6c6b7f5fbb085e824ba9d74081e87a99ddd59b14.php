<?php

/* MopaBootstrapBundle:Navbar:subnavbar.html.twig */
class __TwigTemplate_9d2bffed19ec8b3aa17a684b5ee45e150967f3b320068383e78eb6b3ebba9f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c4d92982083c5b7751a8a8851f12b80dba09199776a47e4a5aba950b633b0a3 = $this->env->getExtension("native_profiler");
        $__internal_2c4d92982083c5b7751a8a8851f12b80dba09199776a47e4a5aba950b633b0a3->enter($__internal_2c4d92982083c5b7751a8a8851f12b80dba09199776a47e4a5aba950b633b0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Navbar:subnavbar.html.twig"));

        // line 1
        echo "<div class=\"subnav ";
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : $this->getContext($context, "fixedTop")), false)) : (false))) ? ("subnavbar-fixed-top") : (""));
        echo "\">
    ";
        // line 2
        $this->displayBlock('menu', $context, $blocks);
        // line 3
        echo "</div>
";
        
        $__internal_2c4d92982083c5b7751a8a8851f12b80dba09199776a47e4a5aba950b633b0a3->leave($__internal_2c4d92982083c5b7751a8a8851f12b80dba09199776a47e4a5aba950b633b0a3_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37e5bea5dd6bb3d7391bfd2d9cbe26c48e477bfe421b7d661e7e060452c68bdb = $this->env->getExtension("native_profiler");
        $__internal_37e5bea5dd6bb3d7391bfd2d9cbe26c48e477bfe421b7d661e7e060452c68bdb->enter($__internal_37e5bea5dd6bb3d7391bfd2d9cbe26c48e477bfe421b7d661e7e060452c68bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_37e5bea5dd6bb3d7391bfd2d9cbe26c48e477bfe421b7d661e7e060452c68bdb->leave($__internal_37e5bea5dd6bb3d7391bfd2d9cbe26c48e477bfe421b7d661e7e060452c68bdb_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:subnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <div class="subnav {{ fixedTop|default(false) ? 'subnavbar-fixed-top' : '' }}">*/
/*     {% block menu %}{% endblock %}*/
/* </div>*/
/* */
