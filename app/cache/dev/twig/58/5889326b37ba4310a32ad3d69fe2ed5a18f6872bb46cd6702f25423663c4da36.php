<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_745ac9d91cc27478b8bcafd6392c8d77e8a219943ba6b1297c2444029720c43b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb802ec7366d637e39a20f18ff7a8b4c7b61f4e49dfd5671fd32b564bc3d89e2 = $this->env->getExtension("native_profiler");
        $__internal_fb802ec7366d637e39a20f18ff7a8b4c7b61f4e49dfd5671fd32b564bc3d89e2->enter($__internal_fb802ec7366d637e39a20f18ff7a8b4c7b61f4e49dfd5671fd32b564bc3d89e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fb802ec7366d637e39a20f18ff7a8b4c7b61f4e49dfd5671fd32b564bc3d89e2->leave($__internal_fb802ec7366d637e39a20f18ff7a8b4c7b61f4e49dfd5671fd32b564bc3d89e2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e893b79c3f2495fee3da492da898c162fb69632e1b906a7e1e788378032aa80 = $this->env->getExtension("native_profiler");
        $__internal_3e893b79c3f2495fee3da492da898c162fb69632e1b906a7e1e788378032aa80->enter($__internal_3e893b79c3f2495fee3da492da898c162fb69632e1b906a7e1e788378032aa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e893b79c3f2495fee3da492da898c162fb69632e1b906a7e1e788378032aa80->leave($__internal_3e893b79c3f2495fee3da492da898c162fb69632e1b906a7e1e788378032aa80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
